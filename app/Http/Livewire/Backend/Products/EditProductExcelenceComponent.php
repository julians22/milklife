<?php

namespace App\Http\Livewire\Backend\Products;

use App\Models\Product;
use Livewire\Component;

class EditProductExcelenceComponent extends Component
{
    public $product;
    public $product_excellence;
    public $new_product_excellence = "";
    public $is_edit = false;
    public $edit_product_excellence = "";
    public $product_execelence_id = 0;

    public function mount($product)
    {
        $this->product = $product;
        $this->product_excellence = $this->product->productExcelences;
    }

    public function render()
    {
        return view('livewire.backend.products.edit-product-excelence-component');
    }

    public function save($id = 0){
        if ($id == 0) {
            $this->validate([
                'new_product_excellence' => 'required',
            ], [
                'new_product_excellence.required' => 'Please enter product excellence before adding or saving',
            ]);
            $this->product->productExcelences()->create([
                'name' => $this->new_product_excellence,
                'order' => 0
            ]);
        }else{
            $this->validate([
                'edit_product_excellence' => 'required',
            ], [
                'edit_product_excellence.required' => 'Please enter product excellence before adding or saving',
            ]);
            $this->product->productExcelences()->where('id', $id)->update([
                'name' => $this->edit_product_excellence,
            ]);
        }

        $this->productExcelenceSaved();
    }

    public function editAction($id, $name){
        $this->is_edit = true;
        $this->edit_product_excellence = $name;
        $this->product_execelence_id = $id;
    }

    public function deleteAction($id){
        $this->product->productExcelences()->where('id', $id)->delete();
        $this->productExcelenceSaved();
    }

    public function cancelEdit(){
        $this->is_edit = false;
        $this->edit_product_excellence = "";
        $this->product_execelence_id = 0;
    }

    public function productExcelenceSaved()
    {
        $product = Product::with('productExcelences')->find($this->product->id);
        $this->product = $product;
        $this->product_excellence = $product->productExcelences;
        $this->new_product_excellence = "";
        $this->is_edit = false;
        $this->edit_product_excellence = "";
    }


}
