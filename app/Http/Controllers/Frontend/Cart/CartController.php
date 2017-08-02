<?php

namespace Snaketec\Http\Controllers\Frontend\Cart;

use Snaketec\Http\Controllers\Controller;
use Snaketec\Repositories\Frontend\Catalog\Budget\CartRepository;

/**
 * Class CartController.
 */
class CartController extends Controller
{
    /**
     * @var CartRepository
     */
    protected $cart;

    /**
     * @param CartRepository $cart
     */
    public function __construct(CartRepository $cart)
    {
        $this->cart = $cart;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.cart.cart');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function store($id)
    {
        $this->cart->create($id);
        return redirect()->route('frontend.cart');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function destroy($id)
    {
        $this->cart->remove($id);
        return redirect()->route('frontend.cart');
    }
}
