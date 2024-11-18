@props(['promotions' => $promotions])
<div class="section">

    <section class="banner-section" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')" >
        {{-- top left doodle --}}
        <div class="absolute top-0 right-0 md:w-28 w-36">
            <img src="{{ asset('img/doodle/white_top_rdoodle.png') }}" alt="" class="w-full">
        </div>
        {{-- bottom right doodle --}}
        <div class="absolute bottom-0 right-0 md:w-36 w-32">
            <img src="{{ asset('img/doodle/orange_bottom_rdoodle.png') }}" alt="" class="w-full">
        </div>
        {{-- left bottom orange --}}
        <div class="absolute bottom-1/4 left-0 md:w-36 w-24">
            <img src="{{ asset('img/doodle/doodle_left_bottom_1.png') }}" alt="" class="w-full">
        </div>
        {{-- bottom --}}
        <div class="absolute bottom-0 left-1/3 md:w-36 w-28">
            <img src="{{ asset('img/doodle/doodle_bottom_left.png') }}" alt="" class="w-full">
        </div>

        <div class="banner-content">
            <div class="splide w-full" id="banner__splide">
                <div class="splide__track">
                    <div class="splide__list">
                        @foreach ($promotions as $promotion)
                            <div class="splide__slide">
                                <div class="banner-item w-full relative flex justify-between items-start ">
                                    <div class="banner-text flex-grow md:space-y-4 text-center md:text-left pr-2 lg:self-center">
                                        <div class="max-w-none lg:max-w-2xl">
                                            <img data-splide-lazy="{{ asset('campaign/img/HL Milkshake white.png') }}" alt="" class="w-full">
                                            <img data-splide-lazy="{{ $promotion['image'] }}" alt="" class="block md:hidden max-w-full w-4/5 mx-auto" >
                                            <div class="text-center">
                                                <a href="{{ $promotion['url'] ?? '#' }}" target="_blank" class="btn btn-doodle text-shadow">{{ "Beli Sekarang" }}</a>
                                            </div>
                                        </div>
                                        {{-- <h2 class="text-4xl md:text-6xl 2xl:text-7xl text-white font-koara-bold mb-3">{!! nl2br($promotion->title) !!}</h2> --}}
                                        {{-- <p class="text-white font-gotham-bold text-lg 2xl:text-3xl mb-3 md:block hidden">
                                            {!! nl2br($promotion->exerpt) !!}
                                        </p> --}}
                                    </div>

                                    <div class="banner-product max-w-xs xl:max-w-[30rem] 2xl:max-w-[40rem] hidden md:block">
                                        <img data-splide-lazy="{{ $promotion['image'] }}" width="640">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
