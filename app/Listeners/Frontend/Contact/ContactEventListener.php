<?php

namespace Snaketec\Listeners\Frontend\Contact;

/**
 * Class ContactEventListener.
 */
class ContactEventListener
{
    /**
     * @param $event
     */
    public function OnCreated($event)
    {
        \Log::info('Contato criado por: '.$event->contact->name);
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \Snaketec\Events\Frontend\Contact\ContactCreated::class,
            'Snaketec\Listeners\Frontend\Contact\ContactEventListener@OnCreated'
        );
    }
}
