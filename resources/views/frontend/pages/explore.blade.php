@extends('frontend.layouts.app')

@section('title', '#DuniaMilkLife')

@section('meta_description', '#DuniaMilkLife')

@section('content')
    <div class="explore-section page bg-milklife-blue-banner">

        <div class="explore-content pb-20">

            <h4 class="text-white text-xl mt-10 text-center font-geologica font-bold max-w-4xl mx-auto">Ragam potret seru MilkLife di duniamu. Gunakan hashtag <b>#DuniaMilkLife</b> untuk tampil bersama #MilkLife.</h4>

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
