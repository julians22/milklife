@extends('backend.layouts.app')

@section('title', __('Update Promotion'))

@section('content')

<x-forms.patch :action="route('admin.promotion.update', ['promotion' => $promotion])">
    <x-backend.card>
        <x-slot name="header">
            @lang('Update Promotion')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                :href="route('admin.promotion.index')"
                class="card-header-action"
                :text="__('Cancel')" />
        </x-slot>
    </x-backend.card>

    <div class="row">
        <div class="col-md-8">
            <x-backend.card>
                <x-slot name="body">
                    <div class="form-group row">
                        <label for="title" class="col-form-label col-md-3">@lang('Title')</label>
                        <div class="col-md-9">
                            <textarea name="title" id="title" class="form-control" rows="3">{{ $promotion->title }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exerpt" class="col-form-label col-md-3">@lang('Description')</label>
                        <div class="col-md-9">
                            <textarea name="exerpt" id="exerpt" class="form-control" rows="3">{{ $promotion->exerpt }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-form-label col-md-3">@lang('Url')</label>
                        <div class="col-md-9">
                            <input type="text" name="url" id="url" class="form-control" value="{{ $promotion->url }}">
                            <small>@lang('Copy & Paste the url into this form')</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="button_label" class="col-form-label col-md-3">@lang('Button Label')</label>
                        <div class="col-md-9">
                            <input type="text" name="button_label" id="button_label" class="form-control" value="{{ $promotion->button_label }}">
                        </div>
                    </div>

                </x-slot>

            </x-backend.card>
        </div>

        <div class="col">
            <x-backend.card>
                <x-slot name="body">
                    <div class="form-group">
                        <label for="image">@lang('Image')</label>
                        <div class="input-group mb-2">
                            <input value="{{ $promotion->image }}" readonly type="text" name="image" id="image" class="form-control" placeholder="Image" aria-label="Select Image" aria-describedby="button-select-image">
                            <div class="input-group-append">
                                <button data-input="image" data-preview="image-holder" class="btn btn-secondary" data-defaultPath={{ 'promotion'}} type="button" id="button-select-image">@lang('Select Image')</button>
                            </div>
                        </div>
                        <div id="image-holder" style="max-width: 100px">
                            <img src="{{ $promotion->image }}" class="img-thumbnail">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="c-switch c-switch-pill c-switch-success">
                            <label for="status">@lang('Status')</label>
                            <input type="checkbox" class="c-switch-input" name="status" value="1" @if ($promotion->status) checked @endif>
                            <span class="c-switch-slider"></span>
                        </label>
                    </div>
                </x-slot>

                <x-slot name="footer">
                    <button type="submit" class="btn btn-primary">@lang('Update')</button>
                </x-slot>
            </x-backend.card>
        </div>
    </div>
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
    </script>
@endpush
