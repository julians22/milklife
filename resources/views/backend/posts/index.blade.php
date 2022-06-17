@extends('backend.layouts.app')

@section('title', __('Posts Management'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Posts Management')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                icon="c-icon cil-plus"
                class="card-header-action"
                :href="route('admin.post.create')"
                :text="__('Create Post')"
            />
        </x-slot>


        <x-slot name="body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="25%">Title</th>
                                <th width="25%">Slug</th>
                                <th>Type</th>
                                <th>Last Update</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->slug }}</td>
                                    <td>{{ $post->post_type }}</td>
                                    <td>@displayDate($post->updated_at, 'Y-m-d')</td>
                                    <td>
                                        @include('backend.posts.includes.actions', ['post' => $post])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </x-slot>
    </x-backend.card>
@endsection
