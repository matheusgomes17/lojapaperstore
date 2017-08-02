<?php

namespace Snaketec\Events\Frontend\Contact;

use Snaketec\Events\Event;
use Illuminate\Queue\SerializesModels;

/**
 * Class ContactCreated.
 */
class ContactCreated extends Event
{
    use SerializesModels;

    /**
     * @var
     */
    public $contact;

    /**
     * @param $contact
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }
}
