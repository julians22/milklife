<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @if ($is_edit)
        <div class="input-group mb-3" x-cloak>
            <input type="text" class="form-control" wire:model="edit_product_excellence" placeholder="Update Product Exceence" aria-label="Product Excelence">
            <div class="input-group-append">
                <button class="btn btn-success" type="button" wire:click="save({{$product_execelence_id}})">Update</button>
                <button class="btn btn-danger" type="button" wire:click="cancelEdit">Cancel</button>
            </div>
        </div>
        @else
        <div class="input-group mb-3" x-cloak>
            <input type="text" class="form-control" wire:model="new_product_excellence" placeholder="Insert Product Exceence" aria-label="Product Excelence" aria-describedby="button-add-prod-exce">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-add-prod-exce" wire:click="save">Add</button>
            </div>
        </div>
    @endif

    <div x-cloak>
        <ul class="list-group">
            @if ($product_excellence->count() > 0)
                @foreach ($product_excellence as $productExcelence)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $productExcelence->name }}
                    <div>
                        <button @if ($is_edit)
                            {{'disabled'}}
                        @endif type="button" class="btn btn-sm btn-success" wire:click="editAction({{$productExcelence->id}}, '{{$productExcelence->name}}')"><i class="fas fa-edit"></i></button>
                        <button @if ($is_edit)
                            {{'disabled'}}
                        @endif type="button" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </div>
                </li>
                @endforeach
            @else
                <li class="list-group-item disabled">Product excelence not available for this product you can add by filling the form</li>
            @endif
        </ul>
    </div>
</div>
