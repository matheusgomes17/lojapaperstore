<?php

namespace Snaketec\Repositories\Frontend\Catalog\Budget;

use Illuminate\Support\Facades\DB;
use Snaketec\Repositories\Repository;
use Snaketec\Repositories\Backend\Catalog\Product\ProductRepository;
use Snaketec\Events\Frontend\Catalog\Budget\BudgetCreated;

/**
 * Class CartRepository.
 */
class CartRepository extends Repository
{

    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
    }

    /**
     * @param $id
     *
     * @return static
     */
    public function create($id)
    {
        $cart = getCart();

        DB::transaction(function () use ($cart, $id) {

            $product = $this->products->find($id);
            $image = $product->getImageUrl('thumbnail');

            $cart->add($id, $product->name, $product->code, $image);

            session()->set('cart', $cart);

        });

        return $cart;
    }

    /**
     * @param $id
     *
     * @return static
     */
    public function remove($id)
    {
        $cart = getCart();
        $cart->delete($id);
        session()->set('cart', $cart);

        return $cart;

    }
}