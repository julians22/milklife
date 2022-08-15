<?php

namespace App\Services\Frontend;

use App\Models\Product;
use App\Services\BaseService;
use PhpCsFixer\Preg;

class ProductService extends BaseService
{

    /**
     * ProductService constructor.
     *
     * @param  Product  $product
     */

    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    /**
     * Get By Slug
     *
     * @param  string  $slug
     */
    public function getBySlug(string $slug)
    {
        return $this->model::where('slug', $slug)->with('productLinks')->first();
    }

    /**
     * Get all paginated products.
     * @param  int  $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAllPaginated(int $perPage = 10){
        return $this->model::paginate($perPage);
    }

    /**
     * Get related products
     * @param  Product $product
     * @param  int  $perPage
     */
    public function getRelatedProducts(Product $product, int $perPage = 10){
        $products = Product::where('id', '!=', $product->id)->where('product_variant_id', $product->product_variant_id)->where('size', $product->size )->take($perPage)->get();
        return $products;
    }
}
