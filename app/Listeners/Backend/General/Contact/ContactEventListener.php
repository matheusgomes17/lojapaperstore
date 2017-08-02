<?php

namespace Snaketec\Listeners\Backend\General\Contact;

/**
 * Class ContactEventListener.
 */
class ContactEventListener
{
    /**
     * @var string
     */
    private $history_slug = 'Contact';

    /**
     * @param $event
     */
    public function onCreated($event)
    {
        history()->log(
            $this->history_slug,
            'trans("history.backend.contacts.created") '.$event->contact->name,
            $event->contact->id,
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
            'trans("history.backend.contacts.updated") '.$event->contact->name,
            $event->contact->id,
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
            'trans("history.backend.contacts.deleted") '.$event->contact->name,
            $event->contact->id,
            'trash',
            'bg-maroon'
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
            \Snaketec\Events\Backend\General\Contact\ContactCreated::class,
            'Snaketec\Listeners\Backend\General\Contact\ContactEventListener@onCreated'
        );

        $events->listen(
            \Snaketec\Events\Backend\General\Contact\ContactUpdated::class,
            'Snaketec\Listeners\Backend\General\Contact\ContactEventListener@onUpdated'
        );

        $events->listen(
            \Snaketec\Events\Backend\General\Contact\ContactDeleted::class,
            'Snaketec\Listeners\Backend\General\Contact\ContactEventListener@onDeleted'
        );
    }
}
