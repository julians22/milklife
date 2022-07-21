@extends('backend.layouts.app')

@section('title', __('Edit Product'))

@section('content')
    <x-forms.patch :action="route('admin.product.update', $product)">
        <x-backend.card class="mb-0">
            <x-slot name="header">
                @lang('Edit Product')
            </x-slot>

            @if ($next)
                <x-slot name="headerActions">
                    <x-utils.link
                        icon="fas fa-arrow-right"
                        class="card-header-action"
                        :href="route('admin.product.edit', ['product' => $next])"
                        :text="__('Edit Next Product')"
                    />
                </x-slot>
            @endif
        </x-backend.card>

        <div class="row">
            <div class="col-md-8">
                <x-backend.card>
                    <x-slot name="body">
                        <div class="form-group row">
                            <label for="name" class="col-form-label col-md-2">@lang('Name')</label>
                            <div class="col-md-10">
                                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="falvour" class="col-form-label col-md-2">@lang('Flavour')</label>
                            <div class="col-md-10">
                                <input type="text" name="flavor" id="flavor" class="form-control" value="{{ $product->flavor }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slogan" class="col-form-label col-md-2">@lang('Description')</label>
                            <div class="col-md-10">
                                <textarea name="slogan" id="slogan" class="form-control" rows="3">{{ $product->slogan }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="excelences" class="col-form-label col-md-2">@lang('Excelences')</label>
                            <div class="col-md-10">
                                @livewire('backend.products.edit-product-excelence-component', ['product' => $product], key($product->id))
                            </div>
                        </div>

                    </x-slot>
                </x-backend.card>
            </div> <!-- col-md-8 -->

            <div class="col-md-4 pl-0">
                <x-backend.card>
                    <x-slot name="body">
                        <div class="form-group">
                            <label for="variant">@lang('Variant')</label>
                            <select name="product_variant_id" id="variant" class="form-control">
                                @foreach ($product_variants as $variant)
                                    <option value="{{ $variant->id }}" {{ $variant->id == $product->product_variant_id ? 'selected' : '' }} >{{ $variant->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="size">Size</label>
                            <select name="size" id="size" class="form-control">
                                @foreach ($sizes as $size)
                                    <option
                                        {{ $size['size'] == $product->size ? 'selected' : '' }}
                                        value="{{$size['size']}}">
                                    {{ $size['size'] }} {{ $size['unit'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">@lang('Image')</label>
                            <div class="input-group mb-2">
                                <input value="{{ $product->image }}" readonly type="text" name="image" id="image" class="form-control" placeholder="Image" aria-label="Select Image" aria-describedby="button-select-image">
                                <div class="input-group-append">
                                    <button data-input="image" data-preview="image-holder" class="btn btn-secondary" data-defaultPath={{ 'variants'}} type="button" id="button-select-image">@lang('Select Image')</button>
                                </div>
                            </div>
                            <div id="image-holder" style="max-width: 100px">
                                <img src="{{ $product->image }}" class="img-thumbnail">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nutrition">Nutrition</label>
                            <div class="input-group mb-2">
                                <input value="{{ $product->nutrition }}" readonly type="text" name="nutrition" id="nutrition" class="form-control" placeholder="Select Nutrition Image" aria-label="Select Image" aria-describedby="button-select-nutrition">
                                <div class="input-group-append">
                                    <button data-input="nutrition" data-preview="nutrition-holder" class="btn btn-secondary" type="button" id="button-select-nutrition">@lang('Select Image')</button>
                                </div>
                            </div>
                            <div id="nutrition-holder">
                                <img src="{{ $product->nutrition }}" class="img-thumbnail img-thumbnail-orange">
                            </div>
                        </div>
                    </x-slot>

                    <x-slot name="footer">
                        <button type="submit" class="btn btn-primary">@lang('Update')</button>
                    </x-slot>
                </x-backend.card>
            </div>

        </div> <!-- row -->
    </x-forms.patch>
@endsection

@push('after-scripts')
    <script>
        const route_prefix = "{{ config('app.url') }}/admin/laravel-filemanager";
        $('#button-select-image').filemanager('image', {prefix: route_prefix});
        $('#image').change(function(){
            let value = this.value;
            // remove domain from value
            let url = new URL(value);
            $(this).val(url.pathname)
        });

        $('#button-select-nutrition').filemanager('image', {prefix: route_prefix});
        $('#nutrition').change(function(){
            let value = this.value;
            // remove domain from value
            let url = new URL(value);
            $(this).val(url.pathname)
        });


    </script>
@endpush
