<?php

namespace Snaketec\Http\Controllers\Frontend;

use Snaketec\Http\Controllers\Controller;
use Snaketec\Http\Requests\Frontend\Contact\StoreContactRequest;
use Snaketec\Models\General\Contact\Contact;
use Snaketec\Repositories\Frontend\General\Contact\ContactRepository;

use Illuminate\Support\Facades\DB;
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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact.index');
    }

    /**
     * @param StoreContactRequest $request
     *
     * @return \Illuminate\View\View
     */
    public function store(StoreContactRequest $request)
    {
        $this->contacts->create($request->all());

        return redirect()->route('frontend.contact.created');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function created()
    {
        $contact = \Snaketec\Models\General\Contact\Contact::orderBy('id', 'desc')->first();
        return view('frontend.contact.created', compact('contact'));
    }
}