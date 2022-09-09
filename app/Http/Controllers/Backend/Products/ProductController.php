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
        $product->with('productExcelences', 'productCompotitions', 'productLinks');

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

        return view('backend.products.edit', compact('product', 'product_variants', 'next', 'sizes', 'product_links'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_variant_id' => 'required',
            'name' => 'required',
            'slogan' => 'required',
            'flavor' => 'required',
            'size' => 'required',
            'image' => 'required',
            'nutrition' => 'sometimes',
        ]);

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
        $product->productExcelences->each(function ($item){
            $item->delete();
        });
        $excelences->each(function ($item) use ($product) {
            foreach ($item as $key => $value) {
                if ($key !== 'deleted') {
                    $product->productExcelences()->create([
                        'name' => $value,
                        'order' => 0,
                    ]);
                }
            }
        });

        $compotitions = collect($request->compotition);
        $product->productCompotitions->each(function($item){
            $item->delete();
        });
        $compotitions->each(function ($item) use ($product) {
            foreach ($item as $key => $value) {
                if ($key !== 'deleted') {
                    $product->productCompotitions()->create([
                        'name' => $value,
                        'order' => 0,
                    ]);
                }
            }
        });

        return redirect()->route('admin.product.edit', $product)->withFlashSuccess(__('Product updated successfully.'));
    }

    public function create()
    {
        $product_variants = ProductVariant::orderBy('name', 'asc')->get();
        $availableLinks = config('milklife.product_links'); // get available links from config
        $sizes = config('milklife.size_avaliable'); // get sizes from config file

        $product_links = collect($availableLinks)->map(function ($item){
            return $item;
        });

        return view('backend.products.create', compact('product_variants', 'sizes', 'product_links'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_variant_id' => 'required',
            'name' => 'required',
            'slogan' => 'required',
            'flavor' => 'required',
            'size' => 'required',
            'image' => 'required',
            'nutrition' => 'sometimes'
        ]);

        $product = Product::create([
            'product_variant_id' => $request->product_variant_id,
            'name' => $request->name,
            'slogan' => $request->slogan,
            'flavor' => $request->flavor,
            'size' => $request->size,
            'image' => $request->image,
            'nutrition' => $request->nutrition
        ]);

        $product_links = $request->links;
        foreach ($product_links as $key => $value) {
            $product->productLinks()->create([
                'name' => $key,
                'url' => $value,
            ]);
        }

        $excelences = collect($request->excelence);
        $excelences->each(function ($item) use ($product) {
            foreach ($item as $key => $value) {
                if ($key !== 'deleted') {
                    $product->productExcelences()->create([
                        'name' => $value,
                        'order' => 0,
                    ]);
                }
            }
        });

        $compotitions = collect($request->compotition);
        $compotitions->each(function ($item) use ($product) {
            foreach ($item as $key => $value) {
                if ($key !== 'deleted') {
                    $product->productCompotitions()->create([
                        'name' => $value,
                        'order' => 0,
                    ]);
                }
            }
        });

        return redirect()->route('admin.product.edit', $product)->withFlashSuccess(__('Product created successfully.'));
    }
}
