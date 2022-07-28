@extends('backend.layouts.app')

@section('title', __('Promotion'))

@section('content')

    <x-backend.card>
        <x-slot name="header">
            @lang('Promotion')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link
                :href="route('admin.promotion.create')"
                icon="c-icon cil-plus"
                class="card-header-action"
                :text="__('Create New')" />
        </x-slot>

        <x-slot name="body">
            @livewire('backend.promotions.promotion-list', key($user->id))
        </x-slot>

    </x-backend.card>

@endsection
