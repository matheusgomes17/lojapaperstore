<?php

namespace Snaketec\Http\Controllers\Frontend\Cart;

use Snaketec\Http\Controllers\Controller;
use Snaketec\Repositories\Frontend\Catalog\Budget\BudgetRepository;
use Snaketec\Http\Requests\Frontend\Cart\ManageCheckoutRequest;

/**
 * Class CartController.
 */
class CheckoutController extends Controller
{
    /**
     * @var BudgetRepository
     */
    protected $budgets;

    /**
     * FrontendController constructor.
     * @param BudgetRepository $budgets
     */
    public function __construct(BudgetRepository $budgets)
    {
        $this->budgets = $budgets;
    }

    public function store(ManageCheckoutRequest $request)
    {
        if (auth()->user()->budgets->where('status', '=', 1)->count() == 0) {
            
            $budget = $this->budgets->create($request->all());

            return redirect()->route('frontend.cart.checkout.view', $budget->id);
        }

        return redirect()->route('frontend.cart')->withFlashError(trans('alerts.backend.budgets.pending'));
    }

    public function show($id)
    {
        $budget = $this->budgets->find($id);

        if ($budget->status > 0) {
            return view('frontend.cart.checkout', compact('budget'));
        }

        return view('frontend.cart.finish-checkout', compact('budget'));
    }
}