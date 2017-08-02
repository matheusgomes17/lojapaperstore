<?php

namespace Snaketec\Repositories\Backend\General\Contact;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Snaketec\Events\Backend\General\Contact\ContactCreated;
use Snaketec\Models\General\Contact\Answer;
use Snaketec\Repositories\Backend\General\Contact\ContactRepository;
use Snaketec\Repositories\Repository;
use Snaketec\Exceptions\GeneralException;
use Snaketec\Mail\BudgetMail;

/**
 * Class AnswerRepository.
 */
class AnswerRepository extends Repository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Answer::class;

    /**
     * @param int  $status
     * @param bool $trashed
     *
     * @return mixed
     */
    public function getForDataTable($status = 0)
    {
        $dataTableQuery = $this->query()
            ->with('contacts')
            ->select([
                config('general.contacts_answers_table').'.id',
                config('general.contacts_answers_table').'.user_id',
                config('general.contacts_answers_table').'.contact_id',
                config('general.contacts_answers_table').'.created_at',
                config('general.contacts_answers_table').'.updated_at',
            ]);

        return $dataTableQuery->active($status);
    }

    /**
     * @param Model $input
     */
    public function create($input)
    {
        $answer = $this->createContactStub($input['data']);
        $contact = $input['contact'];

        DB::transaction(function () use ($answer, $contact) {

            if (parent::save($answer)) {

                $contact->status = 0;
                $contact->save();

                \Mail::to($answer->users->email)->send(new BudgetMail($contact));

                event(new ContactCreated($answer));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.general.contacts.create_error'));
        });
    }

    /**
     * @param Model $slider
     * @param array $input
     */
    public function update(Model $slider, array $input)
    {
        $data = $input['data'];

        DB::transaction(function () use ($slider, $data) {

            if (parent::update($slider, $data)) {

                $slider->status = isset($data['status']) ? 1 : 0;
                parent::save($slider);

                event(new SliderUpdated($slider));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.general.sliders.update_error'));
        });
    }

    /**
     * @param Model $slider
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Model $slider)
    {
        if (parent::delete($slider)) {

            event(new SliderDeleted($slider));

            return true;
        }

        throw new GeneralException(trans('exceptions.backend.general.sliders.delete_error'));
    }

    /**
     * @param Model $slider
     * @throws GeneralException
     * @return bool
     */
    public function forceDelete(Model $slider)
    {
        if (is_null($slider->deleted_at)) {
            throw new GeneralException(trans('exceptions.backend.general.sliders.delete_first'));
        }

        DB::transaction(function () use ($slider) {
            
            if (parent::forceDelete($slider)) {

                event(new SliderPermanentlyDeleted($slider));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.general.sliders.delete_error'));
        });
    }

    /**
     * @param  $input
     *
     * @return mixed
     */
    protected function createContactStub($input)
    {
        $contact             = self::MODEL;
        $contact             = new $contact();
        $contact->message    = $input['message'];
        $contact->user_id    = auth()->user()->id;
        $contact->contact_id = (int) $input['contact_id'];

        return $contact;
    }
}
