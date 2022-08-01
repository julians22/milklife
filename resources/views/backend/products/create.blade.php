@extends('backend.layouts.app')

@section('title', __('Create New Product'))

@section('content')
    <x-forms.post :action="route('admin.product.store')">
        <x-backend.card class="mb-0">
            <x-slot name="header">
                @lang('Add New Product')
            </x-slot>
        </x-backend.card>

        <div class="row">
            <div class="col-md-8">
                <x-backend.card>
                    <x-slot name="body">
                        <div class="form-group row">
                            <label for="name" class="col-form-label col-md-2">@lang('Name')</label>
                            <div class="col-md-10">
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="falvour" class="col-form-label col-md-2">@lang('Flavour')</label>
                            <div class="col-md-10">
                                <input type="text" name="flavor" id="flavor" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slogan" class="col-form-label col-md-2">@lang('Description')</label>
                            <div class="col-md-10">
                                <textarea name="slogan" id="slogan" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="excelences" class="col-form-label col-md-2">@lang('Excelences')</label>
                            <div class="col-md-10">
                                <product-excelenece-component/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="excelences" class="col-form-label col-md-2">@lang('Compotitions')</label>
                            <div class="col-md-10">
                                <product-compotition-component/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="links" class="col-form-label col-md-2">@lang('Links')</label>
                            <div class="col-md-10">
                                <ul class="list-group mb-3">
                                @foreach ($product_links as $link)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="form-group row w-100">
                                            <label for="" class="col-md-3 col-form-label">{{ $link['name'] }}</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="links[{{ $link['name'] }}]" value="{{ $link['url'] ?? '' }}">
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                </ul>
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
                                    <option value="{{ $variant->id }}">{{ $variant->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="size">Size</label>
                            <select name="size" id="size" class="form-control">
                                @foreach ($sizes as $size)
                                    <option value="{{$size['size']}}"> {{ $size['size'] }} {{ $size['unit'] }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="image">@lang('Image')</label>
                            <div class="input-group mb-2">
                                <input value="" readonly type="text" name="image" id="image" class="form-control" placeholder="Image" aria-label="Select Image" aria-describedby="button-select-image">
                                <div class="input-group-append">
                                    <button data-input="image" data-preview="image-holder" class="btn btn-secondary" data-defaultPath={{ 'variants'}} type="button" id="button-select-image">@lang('Select Image')</button>
                                </div>
                            </div>
                            <div id="image-holder" style="max-width: 100px">
                                <img src="" class="img-thumbnail">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nutrition">Nutrition</label>
                            <div class="input-group mb-2">
                                <input value="" readonly type="text" name="nutrition" id="nutrition" class="form-control" placeholder="Select Nutrition Image" aria-label="Select Image" aria-describedby="button-select-nutrition">
                                <div class="input-group-append">
                                    <button data-input="nutrition" data-preview="nutrition-holder" class="btn btn-secondary" type="button" id="button-select-nutrition">@lang('Select Image')</button>
                                </div>
                            </div>
                            <div id="nutrition-holder">
                                <img src="" class="img-thumbnail img-thumbnail-orange">
                            </div>
                        </div>
                    </x-slot>

                    <x-slot name="footer">
                        <button type="submit" class="btn btn-primary">@lang('Create')</button>
                    </x-slot>
                </x-backend.card>
            </div>

        </div> <!-- row -->
    </x-forms.post>
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
