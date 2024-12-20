@extends('frontend.layouts.app')

@section('title', config('milklife.meta.title'))
@section('meta_description', config('milklife.meta.meta_description'))

@push('after-styles')
    <link rel="stylesheet" href="{{ mix('css/pagepiling.css') }}">
@endpush

@section('content')

    <div id="main">
        {{-- Banner --}}
        <x-frontend.home.banner :promotions="$promotions"></x-frontend.home.banner>

        {{-- About --}}
        <div class="section">

            <section class="about-section relative" style="background-image: url('{{ asset('img/bg/gray_yellbg.jpg') }}')"
                data-splide-hash="about">
                {{-- top right doodle --}}
                <div class="absolute top-0 right-0 md:w-44 w-40">
                    <img src="{{ asset('img/doodle/bottom_about.png') }}" alt="" class="rotate-180 w-full">
                </div>
                {{-- bottom left doodle --}}
                <div class="absolute bottom-0 left-0 md:w-36 w-40">
                    <img src="{{ asset('img/doodle/bottom_about.png') }}" alt="" class="w-full">
                </div>

                {{-- bug doodle --}}
                <div class="absolute md:top-40 top-24 left-24 md:w-24 w-20">
                    <img src="{{ asset('img/doodle/bug_1.png') }}" alt="" class="w-full">
                </div>

                {{-- flower right bottom --}}
                <div class="absolute bottom-0 right-0 md:w-28 w-20">
                    <img src="{{ asset('img/doodle/flower.png') }}" alt="" class="w-full">
                </div>

                <div class="about-content w-full h-full relative">
                    <h2 class="page-title" style="text-shadow: 6px 6px 0 #22619F;">Mengapa MilkLife?</h2>

                    <div class="about-grid w-full h-full">
                        <div class="flex items-start md:items-center justify-center h-full">
                            <div class="grid grid-cols-2 grid-rows-2 relative mt-32 md:mt-0">
                                {{-- doodle stright right --}}
                                <div class="absolute right-[-2em] top-[50%] -translate-y-1/2 w-12">
                                    <img src="{{ asset('img/doodle/staright_right.png') }}" alt=""
                                        class="w-full anim-fade-in">
                                </div>

                                {{-- doodle stright left --}}
                                <div class="absolute left-[-2em] top-[50%] -translate-y-1/2 w-12">
                                    <img src="{{ asset('img/doodle/staright_left.png') }}" alt=""
                                        class="w-full anim-fade-in">
                                </div>


                                {{-- bottom-left --}}
                                <div class="z-[4] grid-instax row-start-2">
                                    <img class="max-w-[160px] md:max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[350px] absolute bottom-0 left-0 hover:translate-y-8 hover:-translate-x-4 anim-fade-in"
                                    src="{{ asset('img/thumbnail/home/Photo 1.png') }}" alt="">
                                    <div class="about-textbox bottom-1 w-[350px] right-[120%]">
                                        <p class="font-koara-bold text-milklife-orange leading-none text-[30px] mb-2">Kualitas Konsisten</p>
                                        <p class="text-milklife-orange font-gotham-black leading-none ">Pengawasan ekstra tanpa henti dalam<br>
                                            satu kawasan,  memastikan kualitas<br>
                                            MilkLife terus terjaga</p>
                                        <img src="{{ asset('img/doodle/arrow_about_bottom_l.png') }}" alt="" class="absolute top-[-3rem] left-[90%] w-[60px]">
                                    </div>
                                </div>
                                {{-- top-left --}}
                                <div class="z-[3] grid-instax row-start-1">
                                    <img class="max-w-[160px] md:max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[350px] absolute top-0 left-0 hover:-translate-y-8 hover:-translate-x-4 anim-fade-in"
                                    src="{{ asset('img/thumbnail/home/Photo 2.png') }}" alt="">
                                    <div class="about-textbox top-1 w-[350px] right-full">
                                        <p class="font-koara-bold text-milklife-orange leading-none text-[30px] mb-2">Kesegaran Murni</p>
                                        <p class="text-milklife-orange font-gotham-black leading-none ">Langsung dari peternakan, kesegaran susu<br>
                                            selalu terjaga dengan ekstra sampai<br>
                                            ke meja makan anda</p>
                                        <img src="{{ asset('img/doodle/arrow_about_top_l.png') }}" alt="" class="absolute top-[-15px] left-[90%] w-[85px]">
                                    </div>
                                </div>
                                {{-- bottom-right --}}
                                <div class="z-[2] grid-instax row-start-2">
                                    <img class="max-w-[160px] md:max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[350px] absolute right-0 bottom-0 hover:translate-y-8 hover:translate-x-4 anim-fade-in"
                                    src="{{ asset('img/thumbnail/home/Photo 3.png') }}" alt="">
                                    <div class="about-textbox bottom-1 w-[350px] left-[120%]">
                                        <p class="font-koara-bold text-milklife-orange leading-none text-[30px] mb-2">Rasa yang Luar Biasa</p>
                                        <p class="text-milklife-orange font-gotham-black leading-none ">Penuh dengan kenikmatan dan kesegaran<br>
                                            ekstra, dapat langsung diminum atau<br>
                                            menjadi bahan dasar makanan</p>
                                        <img src="{{ asset('img/doodle/arrow_about_bottom_r.png') }}" alt="" class="absolute -bottom-3 right-full w-[85px]">
                                    </div>
                                </div>
                                {{-- top-right --}}
                                <div class="z-[1] grid-instax row-start-1">
                                    <img class="max-w-[160px] md:max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[350px] absolute right-0 top-0 hover:-translate-y-8 hover:translate-x-4 anim-fade-in"
                                        src="{{ asset('img/thumbnail/home/Photo 4.png') }}" alt="">
                                        <div class="about-textbox top-1 w-[320px] left-[120%]">
                                            <p class="font-koara-bold text-milklife-orange leading-none text-[30px] mb-2">Nutrisi <br> Lengkap & Seimbang</p>
                                            <p class="text-milklife-orange font-gotham-black leading-none ">Dari sapi -  sapi bahagia yang diberikan<br>
                                                perhatian ekstra oleh Milk People,<br>
                                                24 jam tanpa henti </p>
                                            <img src="{{ asset('img/doodle/arrow_about_top_r.png') }}" alt="" class="absolute -bottom-1 right-full w-[60px]">
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- Variants --}}
        <div class="section">

            <section class="variant-section" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')"
                data-splide-hash="variant">

                {{-- top right doodle straight --}}
                <div class="absolute top-40 md:top-12 -right-3 md:w-36 w-40">
                    <img src="{{ asset('img/doodle/straight1.png') }}" alt="" class="w-full">
                </div>

                {{-- top left doodle rocket --}}
                <div class="absolute -top-12 left-40 md:w-36 w-40">
                    <img src="{{ asset('img/doodle/rocket.png') }}" alt="" class="w-full">
                </div>

                {{-- left doodle --}}
                <div class="absolute left-0 top-1/4 md:w-36 w-40">
                    <img src="{{ asset('img/doodle/doodle_left_bottom_1.png') }}" alt="" class="w-full">
                </div>

                <div class="variant-content w-full">
                    <h2 class="page-title mb-10">Varian MilkLife</h2>
                    <div class="max-w-4xl lg:max-w-5xl 2xl:max-w-7xl mx-auto mb-3 2xl:mt-24">
                        <div class="splide" id="variant__splide">
                            <div class="splide__track">
                                <div class="splide__list">
                                    @foreach ($products as $product)
                                        <div class="splide__slide">
                                            <div class="variant-item">
                                                <img src="{{ $product->image }}" alt="{{ $product->name }}"
                                                    class="variant-img">
                                                <h3 class="variant-title px-2">{{ $product->name }} <br> {{ volumeConversion($product->size) }}</h3>
                                                <a href="{{ route('frontend.product.show', ['slug' => $product->slug]) }}"
                                                    class="btn btn btn-doodle btn-doodle-basic btn-sm">
                                                    Beli Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('frontend.product.index') }}" class="btn btn-doodle text-shadow">Eksplor Lebih</a>
                    </div>
                </div>
            </section>
        </div>

        {{-- Artikel --}}
        <div class="section">
            <section class="article-section" style="background-image: url('{{ asset('img/bg/orangebg.jpg') }}')"
                data-splide-hash="artikel">
                {{-- planet top right --}}
                <div class="absolute md:-top-10 top-0 right-4 md:right-28 md:w-40 w-24">
                    <img src="{{ asset('img/doodle/Planet.png') }}" alt="" class="w-full">
                </div>

                {{-- moon top left --}}
                <div class="absolute top-4 left-4 md:-top-16 md:left-40 md:w-32 w-24">
                    <img src="{{ asset('img/doodle/Moon.png') }}" alt="" class="w-full">
                </div>

                {{-- doodle cloud left --}}
                <div class="absolute left-20 top-[80%] md:top-[20%] md:w-32 w-40">
                    <img src="{{ asset('img/doodle/Cloud.png') }}" alt="" class="w-full">
                </div>

                {{-- doodle right --}}
                <div class="absolute right-0 top-1/4 md:w-32 w-40">
                    <img src="{{ asset('img/doodle/doodle_left_bottom_1.png') }}" alt="" class="w-full -scale-100">
                </div>


                {{-- doodle love --}}
                <div class="absolute right-[30%] top-24 md:w-10 w-3">
                    <img src="{{ asset('img/doodle/love.png') }}" alt="" class="w-full">
                </div>

                {{-- doodle star --}}
                <div class="absolute right-[35%] bottom-24 md:w-16 w-3">
                    <img src="{{ asset('img/doodle/star_orange.png') }}" alt="" class="w-full">
                </div>


                <div class="article-content h-full">
                    <h2 class="page-title relative">Artikel & Resep</h2>

                    <div
                        class="max-w-4xl lg:max-w-5xl 2xl:max-w-7xl 3xl:max-w-screen-2xl mx-auto flex-col justify-center mt-12 md:mt-32 2xl:mt-40 3xl:mt-48 hidden md:flex">
                        <div class="flex flex-row flex-wrap md:flex-nowrap justify-center space-x-10 space-y-5 items-baseline">
                            @foreach ($posts as $post)
                                <div class="article-box ">
                                    <div class="article-image-wrapper">
                                        <a href="{{ route('frontend.article.show', $post->slug) }}">
                                            <img src="{{ $post->image ?? asset('img/dummy-milklife.jpg') }}" onerror="this.url = '{{asset('img/dummy-milklife.jpg')}}'" alt="{{ $post->title }}"
                                                class="article-image">
                                        </a>
                                    </div>
                                    <div class="text-xl text-white text-center font-koara-bold">
                                        <h2>{{ $post->title }}</h2>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="w-full md:hidden block mt-12">
                        <div class="splide" id="article__splide">
                            <div class="splide__track">
                                <div class="splide__list">
                                    @foreach ($posts as $post)
                                        <div class="splide__slide">
                                            <div class="article-box ">
                                                <div class="article-image-wrapper">
                                                    <a href="{{ route('frontend.article.show', $post->slug) }}">
                                                        <img src="{{ $post->image ?? asset('img/dummy-milklife.jpg') }}" onerror="this.url = '{{ asset('img/dummy-milklife.jpg') }}'" alt="{{ $post->title }}"
                                                            class="article-image">
                                                    </a>
                                                </div>
                                                <div class="text-xl text-white text-center font-koara-bold">
                                                    <h2>{{ $post->title }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center relative">
                        <a href="{{ route('frontend.article') }}"
                            class="btn btn-doodle btn-doodle-blue text-shadow">Eksplor Lebih</a>
                    </div>
                </div>


            </section>
        </div>

        {{-- Explore --}}
        <div class="section">
            <section class="explore-section" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')"
                data-splide-hash="explore">
                {{-- top right doodle --}}
                <div class="absolute top-0 left-0 md:w-40 w-40">
                    <img src="{{ asset('img/doodle/orange_bottom_rdoodle.png') }}" alt=""
                        class="rotate-180 w-full">
                </div>
                {{-- bottom right doodle --}}
                <div class="absolute bottom-0 right-0 md:w-40 w-40">
                    <img src="{{ asset('img/doodle/orange_bottom_rdoodle.png') }}" alt="" class="w-full">
                </div>
                {{-- flower left --}}
                <div class="absolute left-0 bottom-[20%] md:w-20 w-40">
                    <img src="{{ asset('img/doodle/flower.png') }}" alt="" class="w-full -scale-x-100">
                </div>

                {{-- butterfly top --}}
                <div class="absolute top-[20%] md:-top-[5%] left-[5%] md:left-[20%] md:w-20 w-40">
                    <img src="{{ asset('img/doodle/bug_1.png') }}" alt="" class="w-full">
                </div>

                <div class="explore-content">
                    <h2 class="page-title page-title-lg explore-title mb-8 2xl:mb-20">#DuniaMilkLife</h2>
                    <div class="max-w-full lg:max-w-[60%] text-center text-white mx-auto hidden">
                        <h4 class="text-2xl 2xl:text-4xl font-koara-bold mb-4">Semua Tentang MilkLife</h4>
                        <p class="font-gotham-light text-lg 2xl:text-xl">Beragam informasi dan kegiatan seru MilkLife
                            sehari-hari. Kenali
                            MilkLife lebih dekat dengan mengunjungi Instagram @milklife.id.
                            Jangan lupa, pakai hashtag #TentangMilkLife untuk tampil
                            bersama kita, Milk People.
                        </p>
                    </div>
                </div>

                <div class="explore-rope-image hidden">
                    <img src="{{ asset('img/rope.png') }}" alt="" class="w-full absolute inset-x-0 bottom-[85%]">
                    <div class="flex items-center space-x-12 justify-center">
                        <div class="relative thumb-wrapper">
                            <img src="{{ asset('img/thumbnail/home/6 Januari 2022dml.jpg') }}" alt=""
                                class="img-thumbnail -translate-y-7 rotate-12">
                        </div>
                        <div class="relative thumb-wrapper">
                            <img src="{{ asset('img/thumbnail/home/8 maret 2022 feeddml.jpg') }}" alt=""
                                class="img-thumbnail rotate-6">
                        </div>
                        <div class="relative thumb-wrapper">
                            <img src="{{ asset('img/thumbnail/home/21 maret 2022 revdml.jpg') }}" alt=""
                                class="img-thumbnail -rotate-6">
                        </div>
                        <div class="relative thumb-wrapper">
                            <img src="{{ asset('img/thumbnail/home/23 Maret 2022dml.jpg') }}" alt=""
                                class="img-thumbnail -translate-y-7 -rotate-12">
                        </div>
                    </div>
                </div>

                <div class="max-w-4xl lg:max-w-5xl 2xl:max-w-7xl 3xl:max-w-screen-2xl mx-auto w-full">
                    <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
                </div>

                <div class="text-center relative">
                    <a href="{{ route('frontend.explore') }}" class="btn btn-doodle text-shadow">Eksplor Lebih</a>
                </div>
            </section>
        </div>

        {{-- Contact --}}
        <div class="section">
            <div class="contact-section" style="background-image: url('{{ asset('img/bg/gray_yellbg.jpg') }}')"
                data-splide-hash="contact">


                <div class="flex w-full h-screen justify-center items-center relative">
                    {{-- line left doodle --}}
                    <div class="absolute bottom-28 lg:bottom-16 left-0 w-20 lg:w-40">
                        <img src="{{ asset('img/doodle/doodle_orange.png') }}" alt="" class="w-full">
                    </div>
                    {{-- line right doodle --}}
                    <div class="absolute top-28 lg:top-16 right-0 w-20 lg:w-40">
                        <img src="{{ asset('img/doodle/doodle_orange.png') }}" alt="" class="w-full -scale-100">
                    </div>

                    {{-- star top left doodle --}}
                    <div class="absolute -top-[10%] left-[20%] md:w-16 w-6">
                        <img src="{{ asset('img/doodle/star_2.png') }}" alt="" class="w-full">
                    </div>

                    {{-- star top right doodle --}}
                    <div class="absolute -top-[8%] right-[20%] md:w-16 w-6">
                        <img src="{{ asset('img/doodle/star.png') }}" alt="" class="w-full">
                    </div>

                    {{-- love right doodle --}}
                    <div class="absolute right-[10%] top-32 lg:w-16 w-3">
                        <img src="{{ asset('img/doodle/love_doodle.png') }}" alt="" class="w-full -scale-x-100">
                    </div>

                    {{-- star left doodle --}}
                    <div class="absolute left-[10%] top-36 lg:w-16 w-3">
                        <img src="{{ asset('img/doodle/star.png') }}" alt="" class="w-full -scale-x-100">
                    </div>

                    {{-- star bottom doodle --}}
                    <div class="absolute bottom-0 left-[20%] lg:w-24 w-3">
                        <img src="{{ asset('img/doodle/star_fall.png') }}" alt="" class="w-full">
                    </div>

                    <div class="the-content max-w-screen-md w-full text-center">
                        <h3 class="text-3xl lg:text-5xl font-koara-bold text-center text-milklife-orange mb-5">Promo ekstra
                            untuk kamu yang berdedikasi ekstra</h3>

                        <a href="https://bit.ly/HaloMilkLifee"
                            target="_blank"
                            class="btn btn-whatsapp shadow-sm hover:shadow-3 focus:shadow-3 translate-y-0 focus:-translate-y-1 hover:-translate-y-1 transition-all ease-in-out duration-500">
                            <span>MilkLife Careline</span>
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>

                    <footer class="absolute bottom-0 inset-x-0 flex flex-col space-y-2 py-3 items-center">
                        <div class="link-icons-wrapper flex items-center space-x-4">
                            <a href="https://www.instagram.com/milklife.id/" target="_blank" class="link-icon-items "
                                style="background-image: url('{{ asset('img/icons/insta.png') }}')"></a>
                            <a href="https://www.tiktok.com/@milklife_id" target="_blank" class="link-icon-items "
                                style="background-image: url('{{ asset('img/icons/tiktok.png') }}')"></a>
                            <a href="https://twitter.com/MilkLife_ID" target="_blank" class="link-icon-items "
                                style="background-image: url('{{ asset('img/icons/twitter.png') }}')"></a>
                            <a href="https://www.facebook.com/milklifedairyID/" target="_blank" class="link-icon-items "
                                style="background-image: url('{{ asset('img/icons/facebook.png') }}')"></a>
                            <a href="https://www.youtube.com/channel/UCNGNoT-SKbax1nsJwc5SkZA" target="_blank" class="link-icon-items "
                                style="background-image: url('{{ asset('img/icons/youtube.png') }}')"></a>
                        </div>

                        <div class="copyright-wrapper">
                            <h4 class="text-lg font-gotham-black text-milklife-orange">Copyright &copy; {{ date('Y') }} Member of Savoria Group, All Rights Reserved.</h4>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function() {
            document.body.classList.add('index-page');
            $('#main').pagepiling({
                menu: null,
                direction: 'vertical',
                verticalCentered: false,
                sectionsColor: [],
                anchors: [
                    'beranda', 'tentang-milklife', 'varian', 'artikel', 'dunia-milklife', 'kontak'
                ],
                scrollingSpeed: 500,
                easing: 'linear',
                loopBottom: false,
                loopTop: false,
                css3: true,
                navigation: {
                    'textColor': '#000',
                    'bulletsColor': '#000',
                    'position': 'right',
                    'tooltips': ['Beranda', 'Tentang MilkLife', 'Varian', 'Artikel', 'DuniaMilkLife', 'Kontak']
                },
                // normalScrollElements: '.splide__slide, #curator-feed-default-feed-layout',
                normalScrollElementTouchThreshold: 10,
                touchSensitivity: 5,
                keyboardScrolling: true,
                sectionSelector: '.section',
                animateAnchor: true,

                //events
                onLeave: function(index, nextIndex, direction){
                    // console.log(index);
                },
                afterLoad: function(anchorLink, index){
                    // console.log('afterLoad' + index);
                    navigationListen(index);

                    // if (index == 5) {
                    //     /* curator-feed-default-feed-layout */

                    // }
                },
                afterRender: function(){
                    navigationListen(0)
                },
            });
        });

        const navigationListen = (index) => {
            if (index > 1){
                document.getElementById("navigation").classList.add('down');
                document.getElementById("navigation").classList.remove('open-badge');
                navBadge.classList.remove('down');
            }else{
                document.getElementById("navigation").classList.remove('down');
                navBadge.classList.add('down');
            }
        }


        const navBadge = document.querySelector('.toggler-nav-badge');

        document.addEventListener('DOMContentLoaded', function() {
            scrollFunction();

            /* curator-feed-default-feed-layout */
            (function(){
            var i,e,d=document,s="script";i=d.createElement("script");i.async=1;i.charset="UTF-8";
            i.src="https://cdn.curator.io/published/5ee16c2a-3104-4d9e-90fb-7109b5958e62.js";
            e=d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
            })();

            const navCloseBagde = document.querySelector('.toggler-nav-close');

            var bannerSplide = new Splide('#banner__splide', {
                type: 'fade',
                speed: 2000,
                arrows: false,
                autoplay: true,
                lazyLoad: 'nearby',
            });

            bannerSplide.on('active', function(e) {
                const bannerProduct = document.querySelectorAll('.banner-product');
                const bannerText = document.querySelectorAll('.banner-text');
                bannerProduct[e.index].classList.add('animate__animated', 'animate__fadeInRightBig');
                bannerText[e.index].classList.add('animate__animated', 'animate__fadeInLeftBig');
            });

            bannerSplide.on('inactive', function(e) {
                const bannerProduct = document.querySelectorAll('.banner-product');
                const bannerText = document.querySelectorAll('.banner-text');
                bannerProduct[e.index].classList.remove('animate__animated', 'animate__fadeInRightBig');
                bannerText[e.index].classList.remove('animate__animated', 'animate__fadeInLeftBig');
            });

            bannerSplide.mount();


            var pageNav = document.querySelectorAll('.page-nav-item');


            pageNav.forEach(element => {
                element.addEventListener('click', function(e) {
                    e.preventDefault();
                    const index = Number(this.getAttribute('data-target'));
                    pageSplide.go(index);
                });
            });

            // pageSplide.mount( { URLHash } );

            navBadge.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById("navigation").classList.remove('down');
                document.getElementById("navigation").classList.add('open-badge');
                navBadge.classList.add('down');
            });

            navCloseBagde.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById("navigation").classList.add('down');
                document.getElementById("navigation").classList.remove('open-badge');
                navBadge.classList.remove('down');
            });

            const variantSplide = new Splide('#variant__splide', {
                pagination: false,
                speed: 1500,
                perPage: 4,
                arrows: true,
                breakpoints: {
                    // Mobile.
                    640: {
                        perPage: 1,
                    },
                    1024: {
                        perPage: 3,
                    },
                }
            });

            const articleSplide = new Splide('#article__splide', {
                pagination: false,
                speed: 1500,
                perPage: 1,
                gap: 15,
            });

            articleSplide.mount();

            variantSplide.mount();
        });
    </script>
@endpush
