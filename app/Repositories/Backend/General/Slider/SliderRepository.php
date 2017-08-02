<?php

namespace Snaketec\Repositories\Backend\General\Slider;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Snaketec\Events\Backend\General\Slider\SliderCreated;
use Snaketec\Events\Backend\General\Slider\SliderDeactivated;
use Snaketec\Events\Backend\General\Slider\SliderDeleted;
use Snaketec\Events\Backend\General\Slider\SliderPermanentlyDeleted;
use Snaketec\Events\Backend\General\Slider\SliderReactivated;
use Snaketec\Events\Backend\General\Slider\SliderRestored;
use Snaketec\Events\Backend\General\Slider\SliderUpdated;
use Snaketec\Models\General\Slider\Slider;
use Snaketec\Repositories\Repository;
use Snaketec\Exceptions\GeneralException;
use Snaketec\Mail\AnswerMail;

/**
 * Class SliderRepository.
 */
class SliderRepository extends Repository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Slider::class;

    /**
     * @param int  $status
     * @param bool $trashed
     *
     * @return mixed
     */
    public function getForDataTable($status = 1, $trashed = false)
    {
        /**
         * Note: You must return deleted_at or the Slider getActionButtonsAttribute won't
         * be able to differentiate what buttons to show for each row.
         */
        $dataTableQuery = $this->query()
            ->select([
                config('general.sliders_table').'.id',
                config('general.sliders_table').'.url',
                config('general.sliders_table').'.title',
                config('general.sliders_table').'.status',
                config('general.sliders_table').'.created_at',
                config('general.sliders_table').'.updated_at',
                config('general.sliders_table').'.deleted_at',
            ]);

        if ($trashed == 'true') {
            return $dataTableQuery->onlyTrashed();
        }

        // active() is a scope on the SliderScope trait
        return $dataTableQuery->active($status);
    }

    /**
     * @param Model $input
     */
    public function create($input)
    {
        $data = $input['data'];
        $slider = $this->createSliderStub($input['data']);

        DB::transaction(function () use ($slider, $data) {

            if (parent::save($slider)) {

                $image = new \Artesaos\Attacher\AttacherModel();
                $image->setupFile($data['cover']);
                $image->subject_id = $slider->id;
                $image->subject_type = self::MODEL;
                $image->file_name = str_random(56).'.'.$image->file_extension;
                $image->save();

                // \Mail::to($slider->users->email)->send(new AnswerMail($contact));

                event(new SliderCreated($slider));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.general.sliders.create_error'));
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
                //unlink(public_path($product['cover']));

                event(new SliderPermanentlyDeleted($slider));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.general.sliders.delete_error'));
        });
    }

    /**
     * @param Model $slider
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function restore(Model $slider)
    {
        if (is_null($slider->deleted_at)) {
            throw new GeneralException(trans('exceptions.backend.general.sliders.cant_restore'));
        }

        if (parent::restore(($slider))) {
            event(new SliderRestored($slider));

            return true;
        }

        throw new GeneralException(trans('exceptions.backend.general.sliders.restore_error'));
    }

    /**
     * @param Model $slider
     * @param $status
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function mark(Model $slider, $status)
    {
        $slider->status = $status;

        switch ($status) {
            case 0:
                event(new SliderDeactivated($slider));
            break;

            case 1:
                event(new SliderReactivated($slider));
            break;
        }

        if (parent::save($slider)) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.general.sliders.mark_error'));
    }
    
    /**
     * @param  $input
     *
     * @return mixed
     */
    protected function createSliderStub($input)
    {
        $slider                = self::MODEL;
        $slider                = new $slider();
        $slider->url           = $input['url'];
        $slider->title         = $input['title'];
        $slider->message       = $input['message'];
        $slider->description   = $input['description'];

        return $slider;
    }
}
