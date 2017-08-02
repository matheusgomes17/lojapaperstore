<?php

namespace Snaketec\Http\Controllers\Backend\General\Slider;

use Snaketec\Http\Requests\Backend\General\Slider\ManageSliderRequest;
use Snaketec\Http\Controllers\Controller;
use Snaketec\Models\General\Slider\Slider;
use Snaketec\Repositories\Backend\General\Slider\SliderRepository;

/**
 * Class SliderStatusController.
 */
class SliderStatusController extends Controller
{
    /**
     * @var SliderRepository
     */
    protected $sliders;

    /**
     * @param SliderRepository $sliders
     */
    public function __construct(SliderRepository $sliders)
    {
        $this->sliders = $sliders;
    }

    /**
     * @param ManageSliderRequest $request
     *
     * @return mixed
     */
    public function getDeactivated(ManageSliderRequest $request)
    {
        return view('backend.general.sliders.deactivated');
    }

    /**
     * @param ManageSliderRequest $request
     *
     * @return mixed
     */
    public function getDeleted(ManageSliderRequest $request)
    {
        return view('backend.general.sliders.deleted');
    }

    /**
     * @param Slider $slider
     * @param $status
     * @param ManageSliderRequest $request
     *
     * @return mixed
     */
    public function mark(Slider $slider, $status, ManageSliderRequest $request)
    {
        $this->sliders->mark($slider, $status);

        return redirect()->route($status == 1 ? 'admin.general.slider.index' : 'admin.general.slider.deactivated')->withFlashSuccess(trans('alerts.backend.sliders.updated'));
    }

    /**
     * @param Slider              $deletedSlider
     * @param ManageSliderRequest $request
     *
     * @return mixed
     */
    public function delete(Slider $deletedSlider, ManageSliderRequest $request)
    {
        $this->sliders->forceDelete($deletedSlider);

        return redirect()->route('admin.general.slider.deleted')->withFlashSuccess(trans('alerts.backend.sliders.deleted_permanently'));
    }

    /**
     * @param Slider              $deletedSlider
     * @param ManageSliderRequest $request
     *
     * @return mixed
     */
    public function restore(Slider $deletedSlider, ManageSliderRequest $request)
    {
        $this->sliders->restore($deletedSlider);

        return redirect()->route('admin.general.slider.index')->withFlashSuccess(trans('alerts.backend.sliders.restored'));
    }
}
