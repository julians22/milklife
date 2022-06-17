@extends('backend.layouts.app')

@section('title', __('File Manager'))

@section('content')

<x-backend.card>
    <x-slot name="header">
        @lang('File Manager')
    </x-slot>

    <x-slot name="body">
        <iframe src="{{ url('admin/laravel-filemanager?type=image') }}" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
    </x-slot>
</x-backend.card>

@endsection
