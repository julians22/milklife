<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Resources\Frontend\VariantResources;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Promotion;
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


        /* Updated at 2024-11-18 */
        /* Update by Julian */
        // $promotions = Promotion::orderBy('order', 'asc')->get();
        $promotions = [
            [
                'pack_image' => asset('campaign/img/2024/milkshake-pack.png'),
                'text_image' => asset('campaign/img/2024/milkshake-text.png'),
                'text' => "<p>". "<img src='".asset('campaign/img/2024/milkshake-text.png')."' alt=''>" ."</p>",
                "allow_text" => true,
                "allow_text_image" => false,
                'url' => 'https://www.blibli.com/brand/savoria-official-store?promoTab=false&excludeProductList=false&bc=Exclusive%20Launching%20MilkShake%20%21&sort=7'
            ],
            [
                'pack_image' => asset('campaign/img/2024/uht_teens-pack.png'),
                'text_image' => asset('campaign/img/2024/real_milk.png'),
                'text' => "
                    Real Life itu... <br>
                    Tetep Jalan Meski <br>
                    Semesta Menghadang
                ",
                "allow_text" => true,
                "allow_text_image" => true,
                'url' => 'https://www.blibli.com/brand/savoria-official-store?promoTab=false&excludeProductList=false&brand=MilkLife&sort=7'
            ],
            [
                'pack_image' => asset('campaign/img/2024/fresh_milk-pack.png'),
                'text_image' => asset('campaign/img/2024/real_milk.png'),
                'text' => "
                    Real Life itu... <br>
                    Harus Bisa <br>
                    Ini-Itu Sekaligus
                ",
                "allow_text" => true,
                "allow_text_image" => true,
                'url' => 'https://www.blibli.com/brand/savoria-official-store?promoTab=false&excludeProductList=false&brand=MilkLife&sort=7'
            ],
            [
                'pack_image' => asset('campaign/img/2024/fresh_milk_2-pack.png'),
                'text_image' => asset('campaign/img/2024/real_milk.png'),
                'text' => "
                    Real Life itu... <br>
                    Gak Mual & Mules <br>
                    Pas Minum Susu di Mana Aja
                ",
                "allow_text" => true,
                "allow_text_image" => true,
                'url' => 'https://www.blibli.com/brand/savoria-official-store?promoTab=false&excludeProductList=false&brand=MilkLife&sort=7'
            ],
        ];

        return view('frontend.index', compact('pageColour', 'posts', 'products', 'promotions'));
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
        $variants = ProductVariant::with('products_size_desc')->get();
        $variants = VariantResources::collection($variants);
        $variants = json_encode($variants, JSON_NUMERIC_CHECK);
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
        if (!$product) {
            abort(402, 'Product not found');
        }

        $specialProducts = [
            "susu-uht-choco-macchiato", "susu-uht-cookies-cream", "susu-uht-strawberry-cheesecake"
        ];

        if (in_array($product->slug, $specialProducts)) {

            // remove $slug from $specialProducts
            $key = array_search($product->slug, $specialProducts);
            unset($specialProducts[$key]);
            $relatedProducts = Product::whereIn('slug', $specialProducts)->get();
        }else{
            $relatedProducts = $this->productService->getRelatedProducts($product, 3);
        }



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
        // $content = [
        //     'articles' => Post::article()->take(5)->orderBy('post_date', 'desc')->get(),
        //     'recipes' => Post::recipe()->take(5)->orderBy('post_date', 'desc')->get(),
        // ];
        return view('frontend.pages.article', compact('pageColour'));
    }

    /**
     * @param String $article
     * @return View
     */
    public function article_show($slug){

        $article = Post::where('slug', $slug)->first();
        if (!$article) {
            abort(402, 'Article not found');
        }
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
