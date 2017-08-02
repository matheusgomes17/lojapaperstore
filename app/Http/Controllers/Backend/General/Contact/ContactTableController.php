<?php

namespace Snaketec\Http\Controllers\Backend\General\Contact;

use Snaketec\Http\Controllers\Controller;
use Snaketec\Http\Requests\Backend\General\Contact\ManageContactRequest;
use Snaketec\Repositories\Backend\General\Contact\ContactRepository;
use Yajra\Datatables\Facades\Datatables;

/**
 * Class ContactTableController.
 */
class ContactTableController extends Controller
{
    /**
     * @var ContactRepository
     */
    protected $contacts;

    /**
     * @param ContactRepository $contacts
     */
    public function __construct(ContactRepository $contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * @param ManageContactRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageContactRequest $request)
    {
        return Datatables::of($this->contacts->getForDataTable(1))
            ->addColumn('actions', function ($contact) {
                return $contact->action_buttons;
            })
            ->make(true);
    }
}
