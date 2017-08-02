<?php

namespace Snaketec\Http\Controllers\Backend\General\Contact;

use Snaketec\Http\Controllers\Controller;
use Snaketec\Http\Requests\Backend\General\Contact\ManageContactRequest;
use Snaketec\Repositories\Backend\General\Contact\ContactRepository;
use Yajra\Datatables\Facades\Datatables;

/**
 * Class AnswerTableController.
 */
class AnswerTableController extends Controller
{
    /**
     * @var ContactRepository
     */
    protected $answers;

    /**
     * @param ContactRepository $answers
     */
    public function __construct(ContactRepository $answers)
    {
        $this->answers = $answers;
    }

    /**
     * @param ManageContactRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageContactRequest $request)
    {
        return Datatables::of($this->answers->getForDataTable(0))
            ->addColumn('actions', function ($contact) {
                return $contact->action_buttons;
            })
            ->make(true);
    }
}
