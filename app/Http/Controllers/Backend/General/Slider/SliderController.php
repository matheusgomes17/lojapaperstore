<?php

namespace Snaketec\Http\Controllers\Backend\General\Slider;

use Snaketec\Http\Requests\Backend\General\Slider\ManageSliderRequest;
use Snaketec\Http\Requests\Backend\General\Slider\StoreSliderRequest;
use Snaketec\Http\Requests\Backend\General\Slider\UpdateSliderRequest;
use Snaketec\Http\Controllers\Controller;
use Snaketec\Models\General\Slider\Slider;
use Snaketec\Repositories\Backend\General\Slider\SliderRepository;

/**
 * Class SliderController.
 */
class SliderController extends Controller
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageSliderRequest $request)
    {
        //dd($this->sliders->find(1));
        return view('backend.general.sliders.index');
    }

    /**
     * @param ManageSliderRequest $request
     *
     * @return mixed
     */
    public function create(ManageSliderRequest $request)
    {
        return view('backend.general.sliders.create');
    }

    /**
     * @param StoreSliderRequest $request
     *
     * @return mixed
     */
    public function store(StoreSliderRequest $request)
    {
        $this->sliders->create(['data' => $request->all()]);

        return redirect()->route('admin.general.slider.index')->withFlashSuccess(trans('alerts.backend.sliders.created'));
    }

    /**
     * @param Slider              $slider
     * @param ManageSliderRequest $request
     *
     * @return mixed
     */
    public function show(Slider $slider, ManageSliderRequest $request)
    {
        return view('backend.general.sliders.show')
            ->withSlider($slider);
    }

    /**
     * @param Slider              $slider
     * @param ManageSliderRequest $request
     *
     * @return mixed
     */
    public function edit(Slider $slider, ManageSliderRequest $request)
    {
        return view('backend.general.sliders.edit')
            ->withSlider($slider);
    }

    /**
     * @param Slider              $slider
     * @param UpdateSliderRequest $request
     *
     * @return mixed
     */
    public function update(Slider $slider, UpdateSliderRequest $request)
    {
        $this->sliders->update($slider, ['data' => $request->all()]);

        return redirect()->route('admin.general.slider.index')->withFlashSuccess(trans('alerts.backend.sliders.updated'));
    }

    /**
     * @param Slider              $slider
     * @param ManageSliderRequest $request
     *
     * @return mixed
     */
    public function destroy(Slider $slider, ManageSliderRequest $request)
    {
        $this->sliders->delete($slider);

        return redirect()->route('admin.general.slider.deleted')->withFlashSuccess(trans('alerts.backend.sliders.deleted'));
    }
}
