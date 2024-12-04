@extends('frontend.layouts.app')

@section('title', 'Varian MilkLife')

@section('meta_description', 'Ragam Rasa MilkLife')

@section('content')
    <div class="variant-section page flex h-screen overflow-x-hidden"
        style="background-image: url('{{ asset('img/bg/blue.jpg') }}')">

        <div class="absolute inset-x-0 bottom-0 z-0 h-56 2xl:h-[350px]">
            <img class="h-full w-full" src="{{ asset('img/bg/tables.jpg') }}" alt="">
        </div>

        {{-- right doodle --}}
        <div class="absolute right-0 top-[10%] w-28 md:top-[15%]">
            <img class="w-full" src="{{ asset('img/doodle/straight1.png') }}" alt="">
        </div>

        {{-- right doodle 2 --}}
        <div class="absolute -right-10 bottom-[30%] top-auto w-28 md:-right-[20px] md:bottom-auto md:top-[30%]">
            <img class="w-full -scale-x-100" src="{{ asset('img/doodle/doodle_left_bottom_1.png') }}" alt="">
        </div>

        {{-- left round doodle --}}
        <div class="absolute left-[5px] top-[5px] w-28 md:-left-[40px] md:top-[20%]">
            <img class="w-full rotate-6" src="{{ asset('img/doodle/round.png') }}" alt="">
        </div>

        {{-- star doodle --}}
        <div class="absolute bottom-[30%] left-[10%] top-auto w-16 md:bottom-auto md:top-[30%]">
            <img class="w-full" src="{{ asset('img/doodle/star.png') }}" alt="">
        </div>



        <div class="variant-content z-0 mt-auto flex h-full w-full flex-col items-stretch justify-end overflow-hidden md:gap-y-0 gap-y-20">
            <div class="title text-center font-koara-bold tracking-widest text-4xl text-white drop-shadow-md 2xl:text-5xl">Ragam Rasa
                MilkLife
                untuk Jelajahi Dunia</div>
            <product-component :products="{{ $variants }}"></product-component>
        </div>
    </div>
@endsection
