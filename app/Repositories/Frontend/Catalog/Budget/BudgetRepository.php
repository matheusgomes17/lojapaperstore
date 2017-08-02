<?php

namespace Snaketec\Repositories\Frontend\Catalog\Budget;

use Illuminate\Support\Facades\DB;
use Snaketec\Models\Catalog\Budget\Budget;
use Snaketec\Repositories\Repository;
use Snaketec\Events\Frontend\Catalog\Budget\BudgetCreated;

/**
 * Class BudgetRepository.
 */
class BudgetRepository extends Repository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Budget::class;

    /**
     * @param array $data
     *
     * @return static
     */
    public function create(array $data)
    {
        if (! session()->has('cart')) {
            return false;
        }
        
        $budget = self::MODEL;
        $budget = new $budget();
        $budget->user_id = auth()->user()->id;
        $budget->status = 1;
        $budget->height = $data['height'];
        $budget->width = $data['width'];

        $cart = session()->get('cart');

        DB::transaction(function () use ($budget, $cart) {

            if (parent::save($budget)) {

                foreach ($cart->all() as $k => $item) {
                    $budget->items()->create([
                        'product_id' => $k, 'budget_id' => $budget, 'qtd' => 1
                    ]);
                }

                $cart->clear();

                event(new BudgetCreated($budget));
            }
        });

        return $budget;
    }

}