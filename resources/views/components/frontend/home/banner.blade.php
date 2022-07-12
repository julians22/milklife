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
            <div class="splide w-full" id="banner-splide">
                <div class="splide__track">
                    <div class="splide__list">
                        @for ($i = 0; $i < 3; $i++)
                        <div class="banner-item w-full relative flex justify-between items-start splide__slide">
                            <div class="banner-text max-w-md md:space-y-4 text-center md:text-left">
                                <h2 class="text-4xl md:text-6xl 2xl:text-7xl text-white font-koara-bold mb-3">Susu Bebas Laktosa</h2>
                                <p class="text-white font-gotham-light text-lg 2xl:text-3xl mb-3 md:block hidden">Diformulasikan khusus untuk
                                    para penderita intoleransi laktosa.</p>
                                <img src="{{ asset('img/product/product_1.png') }}" alt="" class="block md:hidden max-w-full w-4/5 mx-auto">
                                <a href="#" class="btn btn-doodle text-shadow mb-[80px] md:mb-0">Beli Sekarang</a>
                            </div>

                            <div class="banner-product max-w-xs xl:max-w-sm 2xl:max-w-lg hidden md:block">
                                <img src="{{ asset('img/product/product_1.png') }}" alt="">
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
