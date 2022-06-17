@extends('frontend.layouts.app')

@section('title', 'Variant')

@section('meta_description', 'Variant Page')

@section('content')
    <div class="variant-section page h-screen flex" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')">
        <div class="absolute bottom-0 inset-x-0 h-56 2xl:h-[350px] z-0">
            <img src="{{ asset('img/bg/tables.jpg') }}" alt="" class="w-full h-full">
        </div>
        <div class="variant-content mb-28 2xl:mb-48 mt-auto z-10 w-full">
            <div class="title font-koara-bold text-4xl text-center mb-12 text-white">Ragam Rasa MilkLife untuk Jelajahi Dunia</div>
            <product-component :products='@json($variants)'></product-component>
        </div>
    </div>
@endsection
