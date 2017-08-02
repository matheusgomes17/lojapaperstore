<?php

namespace Snaketec\Http\Controllers\Backend\General\Contact;

use Snaketec\Http\Controllers\Controller;
use Snaketec\Models\General\Contact\Answer;
use Snaketec\Http\Requests\Backend\General\Contact\ManageContactRequest;
use Snaketec\Http\Requests\Backend\General\Contact\StoreContactRequest;
use Snaketec\Repositories\Backend\General\Contact\AnswerRepository;
use Snaketec\Repositories\Backend\General\Contact\ContactRepository;

/**
 * Class AnswerController.
 */
class AnswerController extends Controller
{
    /**
     * @var AnswerRepository
     */
    protected $answers;

    /**
     * @var ContactRepository
     */
    protected $contacts;

    /**
     * @param AnswerRepository $answers
     * @param ContactRepository $contacts
     */
    public function __construct(AnswerRepository $answers, ContactRepository $contacts)
    {
        $this->answers = $answers;
        $this->contacts = $contacts;
    }

    /**
     * @param ManageContactRequest $request
     *
     * @return \Illuminate\View\View
     */
    public function index(ManageContactRequest $request)
    {
        //dd($this->answers->getForDataTable());
        return view('backend.general.contacts.answers.index');
    }

    /**
     * @param ManageContactRequest $request
     *
     * @return mixed
     */
    public function create($id, ManageContactRequest $request)
    {
        $contact = $this->contacts->find($id);
        return view('backend.general.contacts.answers.create', compact('contact'));
    }

    /**
     * @param StoreContactRequest $request
     *
     * @return mixed
     */
    public function store(StoreContactRequest $request)
    {
        $this->answers->create(['data' => $request->all(), 'contact' => $this->contacts->find($request->get('contact_id'))]);

        return redirect()->route('admin.general.contact.index')->withFlashSuccess(trans('alerts.backend.contacts.answers.created'));
    }

    /**
     * @param Answer               $contact
     * @param ManageContactRequest $request
     *
     * @return mixed
     */
    public function show($id, ManageContactRequest $request)
    {
        $contact = $this->contacts->find($id);
        return view('backend.general.contacts.answers.show', compact('contact'));
    }
}