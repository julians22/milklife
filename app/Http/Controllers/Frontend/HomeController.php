<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\ProductVariant;
use App\Services\Frontend\ProductService;
use Illuminate\Contracts\View\View;
use Request;

/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * $productService.
     */
    protected $productService;

    /**
     * HomeController constructor.
     * @param ProductService  $productService
     */

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     *
     * @return View
     */
    public function index()
    {
        $pageColour = "";
        $posts = Post::orderBy('created_at', 'desc')->latest()->take(3)->get();
        $products = $this->productService->getAllPaginated();
        return view('frontend.index', compact('pageColour', 'posts', 'products'));
    }

    /**
     *
     * @return View
     */
    public function about()
    {
        $pageColour = "";
        return view('frontend.pages.about', compact('pageColour'));
    }

    /**
     * @return View
     */
    public function variant()
    {
        $variants = ProductVariant::with('products')->get();
        $pageColour = "blue";
        return view('frontend.pages.variant', compact('pageColour', 'variants'));
    }

    /**
     * @return View
     */
    public function product(Request $request, $slug)
    {
        $pageColour = "";
        $product = $this->productService->getBySlug($slug);
        $relatedProducts = $this->productService->getRelatedProducts($product, 3);

        $metas = [
            'title' => $product->name,
            'meta_description' => $product->description,
        ];

        return view('frontend.products.show', compact('pageColour', 'product', 'metas', 'relatedProducts'));
    }

    /**
     * @return View
     */
    public function article()
    {
        $pageColour = "orange";
        $content = [
            'articles' => Post::article()->take(5)->orderBy('post_date', 'desc')->get(),
            'recipes' => Post::recipe()->take(5)->orderBy('post_date', 'desc')->get(),
        ];
        return view('frontend.pages.article', compact('pageColour', 'content'));
    }

    /**
     * @param String $article
     * @return View
     */
    public function article_show($slug){

        $article = Post::where('slug', $slug)->first();
        $pageColour = "blue";
        if ($article->post_type == POST::TYPE_ARTICLE) {
            return view('frontend.articles.article_show', compact('article', 'pageColour'));
        }elseif ($article->post_type == POST::TYPE_RECIPE) {
            return view('frontend.articles.recipe_show', compact('article', 'pageColour'));
        }else{
            return abort(404);
        }
    }

    /**
     * @return View
     */
    public function explore()
    {
        $pageColour = "blue";
        return view('frontend.pages.explore', compact('pageColour'));
    }

}
