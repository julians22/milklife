@props(['promotions' => $promotions])
<div class="section">
    {{-- <section class="banner-section" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')" > --}}
    <section class="banner-section bg-milklife-blue-banner pt-0" >
        <video class="w-full h-full object-cover brightness-[.8]" autoplay muted loop playsinline>
            <source src="{{ asset('videos/banners-video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        {{-- top left doodle --}}
        {{-- <div class="absolute top-0 right-0 md:w-28 w-36">
            <img src="{{ asset('img/doodle/white_top_rdoodle.png') }}" alt="" class="w-full">
        </div> --}}
        {{-- bottom right doodle --}}
        {{-- <div class="absolute bottom-0 right-0 md:w-36 w-32">
            <img src="{{ asset('img/doodle/orange_bottom_rdoodle.png') }}" alt="" class="w-full">
        </div> --}}
        {{-- left bottom orange --}}
        {{-- <div class="absolute bottom-1/4 left-0 md:w-36 w-24">
            <img src="{{ asset('img/doodle/doodle_left_bottom_1.png') }}" alt="" class="w-full">
        </div> --}}
        {{-- bottom --}}
        {{-- <div class="absolute bottom-0 left-1/3 md:w-36 w-28">
            <img src="{{ asset('img/doodle/doodle_bottom_left.png') }}" alt="" class="w-full">
        </div> --}}

        {{-- <div class="banner-content">
            <div class="splide w-full" id="banner__splide">
                <div class="splide__track">
                    <div class="splide__list">
                        @foreach ($promotions as $promotion)
                            <div class="splide__slide">
                                <div class="banner-item w-full relative flex justify-between items-start ">
                                    <div class="banner-text flex-grow md:space-y-4 text-center md:text-left pr-2 lg:self-center">
                                        <div class="flex-1 flex-shrink-0 lg:space-y-4">
                                            @if ($promotion['allow_text'])
                                                <div class="banner-title">{!! $promotion['text'] !!}</div>
                                            @endif

                                            @if ($promotion['allow_text_image'])
                                                <img data-splide-lazy="{{ $promotion['text_image'] }}" alt="" class="max-w-[200px] lg:max-w-[350px] mx-auto">
                                            @endif

                                            <img data-splide-lazy="{{ $promotion['pack_image'] }}" alt="" class="block md:hidden max-w-full w-4/5 mx-auto" >
                                            <div class="text-center">
                                                <a href="{{ $promotion['url'] ?? '#' }}" target="_blank" class="btn btn-pill">{{ "Beli Sekarang" }}</a>
                                            </div>
                                        </div> --}}
                                        {{-- PROMOTION - TAKEOUT --}}
                                        {{-- <p class="text-white font-gotham-bold text-lg 2xl:text-3xl mb-3 md:block hidden">
                                            {!! nl2br($promotion->exerpt) !!}
                                        </p> --}}
                                        {{-- PROMOTION - TAKEOUT --}}
                                    {{-- </div>

                                    <div class="banner-product max-w-xs xl:max-w-[30rem] 2xl:max-w-[36rem] hidden md:block">
                                        <img data-splide-lazy="{{ $promotion['pack_image'] }}" width="640">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
</div>
