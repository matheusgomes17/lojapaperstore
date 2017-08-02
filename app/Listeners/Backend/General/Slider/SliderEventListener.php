<?php

namespace Snaketec\Listeners\Backend\General\Slider;

/**
 * Class SliderEventListener.
 */
class SliderEventListener
{
    /**
     * @var string
     */
    private $history_slug = 'Slider';

    /**
     * @param $event
     */
    public function onCreated($event)
    {
        history()->log(
            $this->history_slug,
            'trans("history.backend.sliders.created") '.$event->slider->name,
            $event->slider->id,
            'plus',
            'bg-green'
        );
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        history()->log(
            $this->history_slug,
            'trans("history.backend.sliders.updated") '.$event->slider->name,
            $event->slider->id,
            'save',
            'bg-aqua'
        );
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        history()->log(
            $this->history_slug,
            'trans("history.backend.sliders.deleted") '.$event->slider->name,
            $event->slider->id,
            'trash',
            'bg-maroon'
        );
    }

    /**
     * @param $event
     */
    public function onRestored($event)
    {
        history()->log(
            $this->history_slug,
            'trans("history.backend.sliders.restored") '.$event->slider->name,
            $event->slider->id,
            'refresh',
            'bg-aqua'
        );
    }

    /**
     * @param $event
     */
    public function onPermanentlyDeleted($event)
    {
        history()->log(
            $this->history_slug,
            'trans("history.backend.sliders.permanently_deleted") '.$event->slider->name,
            $event->slider->id,
            'trash',
            'bg-maroon'
        );
    }

    /**
     * @param $event
     */
    public function onDeactivated($event)
    {
        history()->log(
            $this->history_slug,
            'trans("history.backend.sliders.deactivated") '.$event->slider->name,
            $event->slider->id,
            'times',
            'bg-yellow'
        );
    }

    /**
     * @param $event
     */
    public function onReactivated($event)
    {
        history()->log(
            $this->history_slug,
            'trans("history.backend.sliders.reactivated") '.$event->slider->name,
            $event->slider->id,
            'check',
            'bg-green'
        );
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \Snaketec\Events\Backend\General\Slider\SliderCreated::class,
            'Snaketec\Listeners\Backend\General\Slider\SliderEventListener@onCreated'
        );

        $events->listen(
            \Snaketec\Events\Backend\General\Slider\SliderUpdated::class,
            'Snaketec\Listeners\Backend\General\Slider\SliderEventListener@onUpdated'
        );

        $events->listen(
            \Snaketec\Events\Backend\General\Slider\SliderDeleted::class,
            'Snaketec\Listeners\Backend\General\Slider\SliderEventListener@onDeleted'
        );

        $events->listen(
            \Snaketec\Events\Backend\General\Slider\SliderRestored::class,
            'Snaketec\Listeners\Backend\General\Slider\SliderEventListener@onRestored'
        );

        $events->listen(
            \Snaketec\Events\Backend\General\Slider\SliderPermanentlyDeleted::class,
            'Snaketec\Listeners\Backend\General\Slider\SliderEventListener@onPermanentlyDeleted'
        );

        $events->listen(
            \Snaketec\Events\Backend\General\Slider\SliderDeactivated::class,
            'Snaketec\Listeners\Backend\General\Slider\SliderEventListener@onDeactivated'
        );

        $events->listen(
            \Snaketec\Events\Backend\General\Slider\SliderReactivated::class,
            'Snaketec\Listeners\Backend\General\Slider\SliderEventListener@onReactivated'
        );
    }
}
