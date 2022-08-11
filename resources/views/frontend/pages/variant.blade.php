@extends('frontend.layouts.app')

@section('title', 'Varian MilkLife')

@section('meta_description', 'Ragam Rasa MilkLife')

@section('content')
    <div class="variant-section page h-screen flex overflow-x-hidden" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')">

        <div class="absolute bottom-0 inset-x-0 h-56 2xl:h-[350px] z-0">
            <img src="{{ asset('img/bg/tables.jpg') }}" alt="" class="w-full h-full">
        </div>

        {{-- right doodle --}}
        <div class="absolute top-[15%] right-0 w-28">
            <img src="{{ asset('img/doodle/straight1.png') }}" alt="" class="w-full">
        </div>

        {{-- right doodle 2 --}}
        <div class="absolute top-[30%] -right-[20px] w-28">
            <img src="{{ asset('img/doodle/doodle_left_bottom_1.png') }}" alt="" class="w-full -scale-x-100">
        </div>

        {{-- left round doodle --}}
        <div class="absolute top-[20%] -left-[40px] w-28">
            <img src="{{ asset('img/doodle/round.png') }}" alt="" class="w-full rotate-6">
        </div>

        {{-- star doodle --}}
        <div class="absolute top-[30%] left-[10%] w-16">
            <img src="{{ asset('img/doodle/star.png') }}" alt="" class="w-full">
        </div>



        <div class="variant-content mt-auto z-10 w-full h-full overflow-hidden flex flex-col items-stretch justify-end">
            <div class="title font-koara-bold text-4xl 2xl:text-5xl text-center text-white">Ragam Rasa MilkLife untuk Jelajahi Dunia</div>
            <product-component :products="{{ $variants }}"></product-component>
        </div>
    </div>
@endsection
