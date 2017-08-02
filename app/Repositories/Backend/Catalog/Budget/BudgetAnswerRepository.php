<?php

namespace Snaketec\Repositories\Backend\Catalog\Budget;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Snaketec\Events\Backend\Catalog\Budget\BudgetAnswer\BudgetAnswerCreated;
use Snaketec\Events\Backend\Catalog\Budget\BudgetAnswer\BudgetAnswerPermanentlyDeleted;
use Snaketec\Events\Backend\Catalog\Budget\BudgetAnswer\BudgetAnswerUpdated;
use Snaketec\Models\Catalog\Budget\Budget;
use Snaketec\Models\Catalog\Budget\BudgetAnswer;
use Snaketec\Repositories\Repository;
use Snaketec\Exceptions\GeneralException;

/**
 * Class BudgetAnswerRepository.
 */
class BudgetAnswerRepository extends Repository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = BudgetAnswer::class;

    /**
     * @param int  $status
     * @param bool $trashed
     *
     * @return mixed
     */
    public function getForDataTable($status = 0)
    {
        $dataTableQuery = $this->query()
            ->with('users', 'items')
            ->select([
                config('catalog.budgets_table').'.id',
                config('catalog.budgets_table').'.user_id',
                config('catalog.budgets_table').'.status',
                config('catalog.budgets_table').'.updated_at',
            ]);

        return $dataTableQuery->active($status);
    }

    /**
     * @param Model $input
     */
    public function create($input)
    {
        $answer = $this->createAnswerStub($input);

        DB::transaction(function () use ($answer) {
            if (parent::save($answer)) {
                $this->makeCollumChange($answer->budget_id);

                event(new BudgetAnswerCreated($answer));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.catalog.budgets.create_error'));
        });
    }

    private function makeCollumChange($id)
    {
        $model = Budget::find($id);
        $model->status = 0;
        $model->manager_id = auth()->user()->id;
        $model->save();
    }

    /**
     * @param Model $user
     * @param array $input
     */
    public function update(Model $user, array $input)
    {
        $data = $input['data'];
        $roles = $input['roles'];

        $this->checkUserByEmail($data, $user);

        DB::transaction(function () use ($user, $data, $roles) {
            if (parent::update($user, $data)) {
                //For whatever reason this just wont work in the above call, so a second is needed for now
                $user->status = isset($data['status']) ? 1 : 0;
                $user->confirmed = isset($data['confirmed']) ? 1 : 0;
                parent::save($user);

                $this->checkUserRolesCount($roles);
                $this->flushRoles($roles, $user);

                event(new ProductUpdated($user));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.catalog.products.update_error'));
        });
    }

    /**
     * @param Model $product
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Model $product)
    {
        if (parent::delete($product)) {
            event(new ProductDeleted($product));

            return true;
        }

        throw new GeneralException(trans('exceptions.backend.catalog.products.delete_error'));
    }

    /**
     * @param Model $product
     * @throws GeneralException
     * @return bool
     */
    public function forceDelete(Model $product)
    {
        if (is_null($product->deleted_at)) {
            throw new GeneralException(trans('exceptions.backend.catalog.products.delete_first'));
        }

        DB::transaction(function () use ($product) {
            if (parent::forceDelete($product)) {

                event(new ProductPermanentlyDeleted($product));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.catalog.products.delete_error'));
        });
    }

    /**
     * @param Model $product
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function restore(Model $product)
    {
        if (is_null($product->deleted_at)) {
            throw new GeneralException(trans('exceptions.backend.catalog.products.cant_restore'));
        }

        if (parent::restore(($product))) {
            event(new ProductRestored($product));

            return true;
        }

        throw new GeneralException(trans('exceptions.backend.catalog.products.restore_error'));
    }

    /**
     * @param Model $product
     * @param $status
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function mark(Model $product, $status)
    {
        $product->status = $status;

        switch ($status) {
            case 0:
                event(new ProductDeactivated($product));
            break;

            case 1:
                event(new ProductReactivated($product));
            break;
        }

        if (parent::save($product)) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.catalog.products.mark_error'));
    }

    /**
     * @param  $input
     *
     * @return mixed
     */
    protected function createAnswerStub($input)
    {
        $answer                 = self::MODEL;
        $answer                 = new $answer();
        $answer->user_id        = (int) auth()->user()->id;
        $answer->budget_id      = (int) $input['budget_id'];
        $answer->message        = (string) $input['answer'];

        return $answer;
    }
}
