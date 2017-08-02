<?php

namespace Snaketec\Http\Controllers\Backend\Catalog\Budget;

use Snaketec\Http\Controllers\Controller;
use Snaketec\Http\Requests\Backend\Catalog\Budget\ManageBudgetRequest;
use Snaketec\Repositories\Backend\Catalog\Budget\BudgetRepository;
use Yajra\Datatables\Facades\Datatables;

/**
 * Class BudgetAnswerTableController.
 */
class BudgetAnswerTableController extends Controller
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
     * @return mixed
     */
    public function __invoke(ManageBudgetRequest $request)
    {
        return Datatables::of($this->budgets->getForDataTableAnswer())
            ->addColumn('code', function ($budget) {
                return '#' . $budget->id;
            })
            ->addColumn('products', function ($budget) {
                return $budget->list_items;
            })
            ->addColumn('users', function ($budget) {
                return $budget->users->name;
            })
            ->addColumn('actions', function ($budget) {
                return $budget->action_buttons;
            })
            ->make(true);
    }
}
