<?php

namespace Snaketec\Http\Controllers\Backend\General\Contact;

use Snaketec\Http\Controllers\Controller;
use Snaketec\Http\Requests\Backend\General\Contact\ManageContactRequest;
use Snaketec\Http\Requests\Backend\General\Contact\StoreContactRequest;
use Snaketec\Repositories\Backend\General\Contact\ContactRepository;

/**
 * Class ContactController.
 */
class ContactController extends Controller
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
     * @param ManageSliderRequest $request
     *
     * @return \Illuminate\View\View
     */
    public function index(ManageContactRequest $request)
    {
        //dd($this->contacts->getAll());
        return view('backend.general.contacts.index');
    }
}