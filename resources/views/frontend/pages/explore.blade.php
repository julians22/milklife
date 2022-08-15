@extends('frontend.layouts.app')

@section('title', '#DuniaMilkLife')

@section('meta_description', '#DuniaMilkLife')

@section('content')
    <div class="explore-section page" style="background-image: url('{{ asset('img/bg/blue.jpg') }}'); min-height: 100vh;">

        <div class="explore-content pb-20">

            {{-- top left bug_2 doodle --}}
            <div class="absolute top-[12%] left-[10%] md:w-20 w-6">
                <img src="{{ asset('img/doodle/bug_2.png') }}" alt="" class="w-full">
            </div>

            {{-- bottom left fflower doodle --}}
            <div class="absolute top-[50%] left-0 md:w-20 w-6">
                <img src="{{ asset('img/doodle/flower.png') }}" alt="" class="w-full -scale-x-100">
            </div>

            {{-- bottom right lightning doodle --}}
            <div class="absolute bottom-0 right-0 w-28">
                <img src="{{ asset('img/doodle/orange_bottom_rdoodle.png') }}" alt="" class="w-full">
            </div>

            <h4 class="text-white text-xl mt-10 text-center font-gotham-bold max-w-4xl mx-auto">Ragam potret seru MilkLife di duniamu. Gunakan hashtag <b>#DuniaMilkLife</b> untuk tampil bersama #MilkLife.</h4>

            <div class="feed-container mt-5">
                <!-- Place <div> tag where you want the feed to appear -->
                <div id="curator-feed-galery-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
            </div>
        </div>


    </div>
@endsection

@push('after-scripts')
    <script type="text/javascript">
    /* curator-feed-galery-layout */
    (function(){
    var i,e,d=document,s="script";i=d.createElement("script");i.async=1;i.charset="UTF-8";
    i.src="https://cdn.curator.io/published/b6395837-d7e0-4257-9e44-cb74948724a8.js";
    e=d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
    })();
    </script>
@endpush
