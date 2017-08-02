<?php

namespace Snaketec\Http\Controllers\Backend\Catalog\Budget;

use Snaketec\Http\Requests\Backend\Catalog\Budget\ManageBudgetAnswerRequest;
use Snaketec\Http\Requests\Backend\Catalog\Budget\StoreBudgetAnswerRequest;
use Snaketec\Http\Requests\Backend\Catalog\Budget\UpdateBudgetAnswerRequest;
use Snaketec\Http\Controllers\Controller;
use Snaketec\Models\Catalog\Budget\Budget;
use Snaketec\Repositories\Backend\Catalog\Budget\BudgetRepository;
use Snaketec\Repositories\Backend\Catalog\Budget\BudgetAnswerRepository;

/**
 * Class BudgetAnswerController.
 */
class BudgetAnswerController extends Controller
{
    /**
     * @var BudgetRepository
     */
    protected $budgets;

    /**
     * @var BudgetAnswerRepository
     */
    protected $answers;

    /**
     * @param BudgetRepository $budgets
     * @param BudgetAnswerRepository $answers
     */
    public function __construct(BudgetRepository $budgets, BudgetAnswerRepository $answers)
    {
        $this->budgets = $budgets;
        $this->answers = $answers;
    }

    /**
     * @param ManageBudgetAnswerRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageBudgetAnswerRequest $request)
    {
        return view('backend.catalog.budgets.answers.index');
    }

    /**
     * @param ManageBudgetAnswerRequest $request
     *
     * @return mixed
     */
    public function create($id, ManageBudgetAnswerRequest $request)
    {
        $budget = $this->budgets->find($id);
        return view('backend.catalog.budgets.answers.create', compact('budget'));
    }

    /**
     * @param StoreBudgetAnswerRequest $request
     *
     * @return mixed
     */
    public function store(StoreBudgetAnswerRequest $request)
    {
        $this->answers->create($request->all());
        return redirect()->route('admin.catalog.budget.index')->withFlashSuccess(trans('alerts.backend.budgets.answers.responded'));
    }

    /**
     * @param ManageBudgetAnswerRequest $request
     *
     * @return mixed
     */
    public function show($id, $answerId, ManageBudgetAnswerRequest $request)
    {
        $budget = $this->budgets->find($id);
        return view('backend.catalog.budgets.answers.show', compact('budget'));
    }
}
