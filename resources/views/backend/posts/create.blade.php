@inject('postModel', '\App\Models\Post')

@extends('backend.layouts.app')

@section('title', __('Update Post'))

@section('content')
    <x-forms.post :action="route('admin.post.store')" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                <x-backend.card>
                    <x-slot name="header">
                        @lang('Update Post')
                    </x-slot>

                    <x-slot name="headerActions">
                        <x-utils.link class="card-header-action" :href="route('admin.post.index')" :text="__('Cancel')" />
                    </x-slot>

                    <x-slot name="body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">@lang('Title')</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
                                </div>

                                <div class="form-group">
                                    <label for="slug">@lang('Slug')</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}" data-slugable data-id="0" data-reference="#title"/>
                                    <span class="error text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label for="post_type">@lang('Post Type')</label>
                                    <select class="form-control" id="post_type" name="post_type">
                                        <option value="{{$postModel::TYPE_ARTICLE}}">@lang('Article')</option>
                                        <option value="{{$postModel::TYPE_RECIPE}}">@lang('Recipe')</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="content">@lang('Content')</label>
                                    <textarea class="form-control" id="body" name="body">{{ old('body') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </x-slot>
                </x-backend.card>
            </div> <!-- col-md-8 -->

            <div class="col-md-4">
                <x-backend.card>
                    <x-slot name="body">
                        <div class="form-group">
                            <label for="image">@lang('Post Image')</label>
                            <div class="input-group">
                                <input type="text" name="image" id="image_input" value="{{ old('image') }}" class="form-control" placeholder="@lang('Post Image')" aria-label="@lang('Post Image')" aria-describedby="button-image">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" data-preview="image-holder" type="button" data-input="image_input" id="image">@lang('Select')</button>
                                </div>
                            </div>
                            <div class="mt-2 mx-auto" id="image-holder" style="max-width: 300px;">
                                <img src="{{ asset(old('image')) }}" alt="Select Post Image" class="img-thumbnail w-100">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="thumbnail">@lang('Thumbnail')</label>
                            <div class="input-group">
                                <input type="text" name="image_thumb" value="{{ old('image_thumb') }}" id="image_thumb_input" class="form-control" placeholder="@lang('Post Thumbnail')" aria-label="@lang('Post Thumbnail')" aria-describedby="button-image">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" data-preview="image-thumb-holder" type="button" data-input="image_thumb_input" id="image-thumb">@lang('Select')</button>
                                </div>
                            </div>
                            <div class="mt-2 mx-auto" id="image-thumb-holder" style="max-width: 300px;">
                                <img src="{{ asset(old('image_thumb')) }}" alt="Select Post Image Thumbnail" class="img-thumbnail w-100">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="post_date">@lang('Post Date')</label>
                            <input type="date" class="form-control" id="post_date" name="post_date" value="{{ old('post_date') }}" />
                        </div>

                        <button class="btn btn-primary" type="submit">@lang('Update Post')</button>
                    </x-slot>
                </x-backend.card>
            </div> <!-- col-md-4 -->

        </div> <!-- row -->
    </x-forms.post>


    <x-backend.card>
        <x-slot name="header">
            @lang('All Posts')
        </x-slot>

        <x-slot name="body">
            <div class="row">
                <div class="col-md-12">
            @livewire('backend.post-table')
                </div>
            </div>
        </x-slot>
    </x-backend.card>
@endsection

@push('after-scripts')
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>

    <script>
        const route_prefix = "{{ config('app.url') }}/admin/laravel-filemanager";
        $('#image').filemanager('image', {prefix: route_prefix, preview_class: "img-thumbnail w-100"});
        $('#image_input').change(function(){
            let value = this.value;
            // remove domain from value
            let url = new URL(value);
            $(this).val(url.pathname)
        });

        $('#image-thumb').filemanager('image', {prefix: route_prefix, preview_class: "img-thumbnail w-100"});
        $('#image_thumb_input').change(function(){
            let value = this.value;
            // remove domain from value
            let url = new URL(value);
            $(this).val(url.pathname)
        });
    </script>

    <script>
        'use strict';
        const slugable = document.querySelector('[data-slugable]');

        document.addEventListener('DOMContentLoaded', function () {
            tinymce.init({
                selector: 'textarea#body',
                height: 500,
                plugins: ['paste', 'link', 'autoresize', 'media', 'fullpage', 'image', 'imagetools'],
                toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat| help',
                content_css: [
                    '//fonts.googleapis.com/css?family=Nunito',
                    '{{ asset('css/backend.css') }}',
                ],
                skin: 'oxide',
                skin_url: '{{ asset('vendor/tinymce/skins/ui/oxide') }}',
            });

            slugable.addEventListener('keyup', delay(function (e) {
                checkSlug();
            }, 500));
            const title = document.querySelector(slugable.dataset.reference);
            title.addEventListener('keyup', delay(function (e) {
                generateSlug();
            }, 500));
        });

        const checkSlug = (e) => {
            const slug = slugable.value;
            const id = slugable.dataset.id || 0;

            axios.get(`/admin/post/ajax/check-slug?slug=${slug}&id=${id}`)
                .then(function (response) {
                    if (response.data.exists) {
                        slugable.classList.add('is-invalid');
                        slugable.classList.remove('is-valid');
                        slugable.nextElementSibling.innerHTML = response.data.message;
                    } else {
                        slugable.classList.add('is-valid');
                        slugable.classList.remove('is-invalid');
                        slugable.nextElementSibling.innerHTML = "";
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        };

        const generateSlug = (e) => {
            const title = document.querySelector(slugable.dataset.reference).value;
            const id = slugable.dataset.id;
            axios.get(`/admin/post/ajax/generate-slug?title=${title}&id=${id}`)
                .then(function (response) {
                    slugable.value = response.data.slug;

                    checkSlug();
                })
                .catch(function (error) {
                    console.log(error);
                });
        }

        function delay(callback, ms) {
            var timer = 0;
            return function() {
                var context = this, args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function () {
                callback.apply(context, args);
                }, ms || 0);
            };
        }
    </script>
@endpush
