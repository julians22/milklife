<?php

namespace App\Http\Controllers\Backend\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('productVariant')->paginate(10);
        return view('backend.products.index', compact('products'));
    }

    public function edit(Product $product)
    {
        $product_variants = ProductVariant::orderBy('name', 'asc')->get();
        $product->with('productExcelences', 'productCompotition');

        $collections = $product->all(); // collection of all products
        $next = $collections->where('id', '>', $product->id)->first(); // get next item in collection

        $sizes = config('milklife.size_avaliable'); // get sizes from config file


        return view('backend.products.edit', compact('product', 'product_variants', 'next', 'sizes'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('admin.product.edit', $product)->withFlashSuccess(__('Product updated successfully.'));
    }
}
