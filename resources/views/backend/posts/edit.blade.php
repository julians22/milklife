@inject('postModel', '\App\Models\Post')

@extends('backend.layouts.app')

@section('title', __('Update Post'))

@section('content')
    <x-forms.patch :action="route('admin.post.update', $post)" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" />
                                </div>

                                <div class="form-group">
                                    <label for="slug">@lang('Slug')</label>
                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}" data-slugable data-id="{{ $post->id }}" data-reference="#title"/>
                                    <span class="error text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label for="post_type">@lang('Post Type')</label>
                                    <select class="form-control" id="post_type" name="post_type">
                                        <option value="post" {{ $post->post_type == $postModel::TYPE_ARTICLE ? 'selected' : '' }}>@lang('Article')</option>
                                        <option value="recipe" {{ $post->post_type == $postModel::TYPE_RECIPE ? 'selected' : '' }}>@lang('Recipe')</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="content">@lang('Content')</label>
                                    <textarea class="form-control" id="body" name="body">{{ $post->body }}</textarea>
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
                            <label for="thumbnail">@lang('Post Image')</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" />
                                <label class="custom-file-label" for="image">@lang('Choose Image')</label>
                            </div>

                            @if ($post->hasImage())
                                <div class="mt-2 mx-auto" style="max-width: 300px;">
                                    <img src="{{ $post->image_url }}" alt="{{ $post->image_name }}" class="img-thumbnail">
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label for="thumbnail">@lang('Thumbnail')</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail" />
                                <label class="custom-file-label" for="thumbnail">@lang('Choose Image')</label>
                            </div>

                            @if ($post->hasThumbnail())
                                <div class="mt-2 mx-auto" style="max-width: 300px;">
                                    <img src="{{ $post->image_thumb_url }}" alt="{{ $post->image_thumb_name }}" class="img-thumbnail">
                                </div>
                            @endif

                        </div>

                        <button class="btn btn-primary" type="submit">@lang('Update Post')</button>
                    </x-slot>
                </x-backend.card>
            </div> <!-- col-md-4 -->

        </div> <!-- row -->
    </x-forms.patch>
@endsection

@push('after-scripts')
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
            const id = slugable.dataset.id;

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
