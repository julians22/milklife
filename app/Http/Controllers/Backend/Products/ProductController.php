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
        $product->with('productExcelences', 'productCompotition', 'productLinks');

        $collections = $product->all(); // collection of all products
        $next = $collections->where('id', '>', $product->id)->first(); // get next item in collection

        $availableLinks = config('milklife.product_links'); // get available links from config
        $sizes = config('milklife.size_avaliable'); // get sizes from config file

        $product_links = collect($availableLinks)->map(function ($item) use ($product) {
            $product_link = $product->productLinks->where('name', $item['name'])->first();
            if ($product_link) {
                $item['url'] = $product_link->url;
            }
            return $item;
        });

        // dd($product_links);


        return view('backend.products.edit', compact('product', 'product_variants', 'next', 'sizes', 'product_links'));
    }

    public function update(Request $request, Product $product)
    {

        $product->update([
            'product_variant_id' => $request->product_variant_id,
            'name' => $request->name,
            'slogan' => $request->slogan,
            'flavor' => $request->flavor,
            'size' => $request->size,
            'image' => $request->image,
            'nutrition' => $request->nutrition
        ]);

        $product_links = $request->links;
        $product->productLinks()->delete();
        foreach ($product_links as $key => $value) {
            $product->productLinks()->updateOrCreate(['name' => $key, 'product_id' => $product->id], [
                'url' => $value,
            ]);
        }

        $excelences = collect($request->excelence);
        $excelences->each(function ($item) use ($product) {
            foreach ($item as $key => $value) {
                if ($key === 'new') {
                    $product->productExcelences()->create([
                        'name' => $value,
                        'order' => 0,
                    ]);
                }else{
                    $product->productExcelences()->where('id', $key)->update([
                        'name' => $value,
                    ]);
                }
            }
        });

        return redirect()->route('admin.product.edit', $product)->withFlashSuccess(__('Product updated successfully.'));
    }

    public function create()
    {
        $product_variants = ProductVariant::orderBy('name', 'asc')->get();

        return view('backend.products.create', compact('product_variants'));
    }
}
