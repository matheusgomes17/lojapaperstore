<?php

namespace Snaketec\Http\Controllers\Backend\General\Slider;

use Snaketec\Http\Controllers\Controller;
use Snaketec\Http\Requests\Backend\General\Slider\ManageSliderRequest;
use Snaketec\Repositories\Backend\General\Slider\SliderRepository;
use Yajra\Datatables\Facades\Datatables;

/**
 * Class SliderTableController.
 */
class SliderTableController extends Controller
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
    public function __invoke(ManageSliderRequest $request)
    {
        return Datatables::of($this->sliders->getForDataTable($request->get('status'), $request->get('trashed')))
            ->addColumn('status', function ($slider) {
                return $slider->status_label;
            })
            ->addColumn('actions', function ($slider) {
                return $slider->action_buttons;
            })
            ->withTrashed()
            ->make(true);
    }
}
