<?php

namespace Snaketec\Http\Controllers\Backend\Catalog\Budget;

use Snaketec\Http\Requests\Backend\Catalog\Budget\ManageBudgetRequest;
use Snaketec\Http\Requests\Backend\Catalog\Budget\StoreBudgetRequest;
use Snaketec\Http\Requests\Backend\Catalog\Budget\UpdateBudgetRequest;
use Snaketec\Http\Controllers\Controller;
use Snaketec\Models\Catalog\Category\Category;
use Snaketec\Repositories\Backend\Catalog\Budget\BudgetRepository;

/**
 * Class BudgetController.
 */
class BudgetController extends Controller
{
    /**
     * @var BudgetRepository
     */
    protected $budgets;

    /**
     * @param BudgetRepository $budgets
     */
    public function __construct(BudgetRepository $budgets)
    {
        $this->budgets = $budgets;
    }

    /**
     * @param ManageBudgetRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageBudgetRequest $request)
    {
        return view('backend.catalog.budgets.index');
    }
}
