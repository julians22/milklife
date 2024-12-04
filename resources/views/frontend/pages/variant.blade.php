@extends('frontend.layouts.app')

@section('title', 'Varian MilkLife')

@section('meta_description', 'Ragam Rasa MilkLife')

@section('content')
    <div class="variant-section page flex h-screen overflow-x-hidden bg-milklife-blue-banner">

        <div class="absolute inset-x-0 bottom-0 z-0 h-56 2xl:h-[350px] bg-milklife-blue-banner-lighter">
            {{-- <img class="h-full w-full" src="{{ asset('img/bg/tables.jpg') }}" alt=""> --}}
        </div>

        <div class="variant-content z-0 mt-auto flex h-full w-full flex-col items-stretch justify-end overflow-hidden md:gap-y-0 gap-y-20">
            <div class="title text-center font-koara-bold tracking-widest text-4xl text-white drop-shadow-md 2xl:text-5xl">Ragam Rasa
                MilkLife
                untuk Jelajahi Dunia</div>
            <product-component :products="{{ $variants }}"></product-component>
        </div>
    </div>
@endsection
