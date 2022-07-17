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
                    @livewire('backend.post-table')
                </div>
            </div>
        </x-slot>
    </x-backend.card>
@endsection
