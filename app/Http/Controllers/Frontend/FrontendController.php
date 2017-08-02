<?php

namespace Snaketec\Http\Controllers\Frontend;

use Snaketec\Http\Controllers\Controller;
use Snaketec\Repositories\Backend\Catalog\Category\CategoryRepository;
use Snaketec\Repositories\Backend\Catalog\Product\ProductRepository;
use Snaketec\Http\Requests\Frontend\Search\SearchRequest;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @var CategoryRepository
     */
    protected $categories;

    /**
     * @var ProductRepository
     */
    protected $products;

    /**
     * FrontendController constructor.
     * @param CategoryRepository $categories
     * @param ProductRepository $products
     */
    public function __construct(CategoryRepository $categories, ProductRepository $products)
    {
        $this->categories = $categories;
        $this->products = $products;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $papelDeParede = $this->products->getAll()->where('category_mother_id', '1')->random(12);

        return view('frontend.index', compact('papelDeParede'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function product($id)
    {
        $product = $this->products->find($id);
        $related = $product->categories->products->random(8);

        return view('frontend.product', compact('product', 'related'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function category($id)
    {
        $cat = $this->categories->find($id);
        $category = $cat->products()->orderBy('name', 'asc')->paginate(12);

        return view('frontend.category', compact('cat', 'category'));
    }

    /**
     * @param SearchRequest $request
     * @return \Illuminate\View\View
     */
    public function search(SearchRequest $request)
    {
        $keyword = $request->input('search');
        $search = \Snaketec\Models\Catalog\Product\Product::search($request->input('search'), null, true)->get();

        return view('frontend.search', compact('keyword', 'search'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function about()
    {

        return view('frontend.about');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function faq()
    {

        return view('frontend.faq');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function privacy()
    {

        return view('frontend.privacy');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function howToApply()
    {

        return view('frontend.how-to-apply');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function terms()
    {

        return view('frontend.terms');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function delivery()
    {

        return view('frontend.delivery');
    }
}
