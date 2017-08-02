<?php

namespace Snaketec\Http\Controllers\Frontend\User;

use Illuminate\Support\Facades\Session;
use Snaketec\Repositories\Backend\Catalog\Budget\BudgetRepository;
use Snaketec\Http\Controllers\Controller;

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
     * BudgetController constructor.
     *
     * @param BudgetRepository $budgets
     */
    public function __construct(BudgetRepository $budgets)
    {
        $this->budgets = $budgets;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id)
    {
        $budget = $this->budgets->find($id);
        return view('frontend.user.budget', compact('budget'));
    }
}
