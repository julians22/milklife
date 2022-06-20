@extends('frontend.layouts.app')

@section('title', '#DuniaMilkLife')

@section('meta_description', '#DuniaMilkLife')

@section('content')
    <div class="explore-section page" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')">

        <div class="explore-content">
            <h4 class="text-white text-xl mt-10 text-center font-gotham-light max-w-4xl mx-auto">Ragam potret seru MilkLife di duniamu. Gunakan hashtag <b>#DuniaMilkLife</b> untuk tampil bersama #MilkLife.</h4>

            <div class="feed-container max-w-7xl mx-auto mt-10">
                <!-- Place <div> tag where you want the feed to appear -->
                <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
            </div>
        </div>


    </div>
@endsection

@push('after-scripts')
    <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
    <script type="text/javascript">
        /* curator-feed-default-feed-layout */
        (function(){
        var i,e,d=document,s="script";i=d.createElement("script");i.async=1;i.charset="UTF-8";
        i.src="https://cdn.curator.io/published/b04875f5-494c-40e1-b9ce-fd12246756c9.js";
        e=d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
        })();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            alert('Halaman ini masih dalam pengembangan. Feed instagram yang ditampilkan tidak 100% sesuai dengan feed Instagram yang ada di DuniaMilkLife Feed ini menggunakan Currator.io dengan referensi feed pernsonal developer. Mohon maaf atas ketidaknyamanan ini.');
        })
    </script>
@endpush
