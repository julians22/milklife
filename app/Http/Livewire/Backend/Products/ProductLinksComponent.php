<?php

namespace App\Http\Livewire\Backend\Products;

use Livewire\Component;

class ProductLinksComponent extends Component
{
    public $product;
    public $availableLinks = [];

    public $links = [];

    public $rules = [
        'links.*.name' => 'required',
        'links.*.url' => 'required|url',
    ];

    public function mount($product)
    {
        $this->product = $product;
        if (count($product->productLinks) == 0) {
            foreach (config('milklife.product_links') as $key => $value) {
                $product->productLinks()->create([
                    'name' => $value['name'],
                    'url' => $value['url'],
                ]);
            }
        }
        $this->availableLinks = $product->productLinks;
    }

    public function render()
    {
        $productLinks = $this->product->productLinks;
        return view('livewire.backend.products.product-links-component', ['productLinks' => $productLinks]);
    }


}
