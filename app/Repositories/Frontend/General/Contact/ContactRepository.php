<?php

namespace Snaketec\Repositories\Frontend\General\Contact;

use Illuminate\Support\Facades\DB;
use Snaketec\Models\General\Contact\Contact;
use Snaketec\Repositories\Repository;
use Snaketec\Events\Frontend\Contact\ContactCreated;
use Snaketec\Mail\ContactMail;

/**
 * Class ContactRepository.
 */
class ContactRepository extends Repository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Contact::class;

    /**
     * @param array $data
     *
     * @return static
     */
    public function create(array $data)
    {
        $contact          = self::MODEL;
        $contact          = new $contact();
        $contact->name    = $data['name'];
        $contact->email   = $data['email'];
        $contact->subject = $data['subject'];
        $contact->message = $data['message'];
        $contact->status  = 1;

        DB::transaction(function () use ($contact) {

            if (parent::save($contact)) {

                \Mail::to($contact->email)->send(new ContactMail($contact));
                
                event(new ContactCreated($contact));
            }
        });

        return $contact;
    }
}