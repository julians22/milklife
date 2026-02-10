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

            <section class="relative bg-milklife-blue-banner about-section"
                data-splide-hash="about">

                <div class="relative w-full h-full about-content">
                    <h2 class="page-title">Mengapa MilkLife?</h2>

                    <div class="about-grid w-full h-full">
                        <div class="flex justify-center items-start md:items-center h-full">
                            <div class="relative grid grid-cols-2 grid-rows-2 mt-32 md:mt-0">
                                {{-- doodle stright right --}}
                                <div class="top-[50%] right-[-2em] absolute w-12 -translate-y-1/2">
                                    <img src="{{ asset('img/doodle/staright_right.png') }}" alt=""
                                        class="w-full anim-fade-in">
                                </div>

                                {{-- doodle stright left --}}
                                <div class="top-[50%] left-[-2em] absolute w-12 -translate-y-1/2">
                                    <img src="{{ asset('img/doodle/staright_left.png') }}" alt=""
                                        class="w-full anim-fade-in">
                                </div>


                                {{-- bottom-left --}}
                                <div class="z-[4] grid-instax row-start-2">
                                    <img class="bottom-0 left-0 absolute max-w-[160px] md:max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[350px] hover:-translate-x-4 hover:translate-y-8 anim-fade-in"
                                    src="{{ asset('img/thumbnail/home/Photo 1.png') }}" alt="">
                                    <div class="right-[120%] bottom-1 w-[350px] about-textbox">
                                        <p class="mb-2 font-geologica font-bold text-[30px] text-white leading-none">Kualitas Konsisten</p>
                                        <p class="font-geologica font-black text-white leading-none">Pengawasan ekstra tanpa henti dalam<br>
                                            satu kawasan,  memastikan kualitas<br>
                                            MilkLife terus terjaga</p>
                                        <img src="{{ asset('img/doodle/arrow_about_bottom_l.png') }}" alt="" class="top-[-3rem] left-[90%] absolute w-[60px]">
                                    </div>
                                </div>
                                {{-- top-left --}}
                                <div class="z-[3] grid-instax row-start-1">
                                    <img class="top-0 left-0 absolute max-w-[160px] md:max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[350px] hover:-translate-x-4 hover:-translate-y-8 anim-fade-in"
                                    src="{{ asset('img/thumbnail/home/Photo 2.png') }}" alt="">
                                    <div class="top-1 right-full w-[350px] about-textbox">
                                        <p class="mb-2 font-geologica font-bold text-[30px] text-white leading-none">Kesegaran Murni</p>
                                        <p class="font-geologica font-black text-white leading-none">Langsung dari peternakan, kesegaran susu<br>
                                            selalu terjaga dengan ekstra sampai<br>
                                            ke meja makan anda</p>
                                        <img src="{{ asset('img/doodle/arrow_about_top_l.png') }}" alt="" class="top-[-15px] left-[90%] absolute w-[85px]">
                                    </div>
                                </div>
                                {{-- bottom-right --}}
                                <div class="z-[2] grid-instax row-start-2">
                                    <img class="right-0 bottom-0 absolute max-w-[160px] md:max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[350px] hover:translate-x-4 hover:translate-y-8 anim-fade-in"
                                    src="{{ asset('img/thumbnail/home/Photo 3.png') }}" alt="">
                                    <div class="bottom-1 left-[120%] w-[350px] about-textbox">
                                        <p class="mb-2 font-geologica font-bold text-[30px] text-white leading-none">Rasa yang Luar Biasa</p>
                                        <p class="font-geologica font-black text-white leading-none">Penuh dengan kenikmatan dan kesegaran<br>
                                            ekstra, dapat langsung diminum atau<br>
                                            menjadi bahan dasar makanan</p>
                                        <img src="{{ asset('img/doodle/arrow_about_bottom_r.png') }}" alt="" class="right-full -bottom-3 absolute w-[85px]">
                                    </div>
                                </div>
                                {{-- top-right --}}
                                <div class="z-[1] grid-instax row-start-1">
                                    <img class="top-0 right-0 absolute max-w-[160px] md:max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[350px] hover:-translate-y-8 hover:translate-x-4 anim-fade-in"
                                        src="{{ asset('img/thumbnail/home/Photo 4.png') }}" alt="">
                                        <div class="top-1 left-[120%] w-[320px] about-textbox">
                                            <p class="mb-2 font-geologica font-bold text-[30px] text-white leading-none">Nutrisi <br> Lengkap & Seimbang</p>
                                            <p class="font-geologica font-black text-white leading-none">Dari sapi -  sapi bahagia yang diberikan<br>
                                                perhatian ekstra oleh Milk People,<br>
                                                24 jam tanpa henti </p>
                                            <img src="{{ asset('img/doodle/arrow_about_top_r.png') }}" alt="" class="right-full -bottom-1 absolute w-[60px]">
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

            <section class="bg-milklife-blue-banner variant-section"
                data-splide-hash="variant">

                <div class="flex flex-col justify-between items-center pb-10 w-full h-full variant-content">
                    <h2 class="page-title">Varian MilkLife</h2>
                    <div class="max-w-4xl 2xl:max-w-7xl">
                        <div class="splide" id="variant__splide">
                            <div class="splide__track">
                                <div class="splide__list">
                                    @foreach ($products as $product)
                                        <div class="splide__slide">
                                            <div class="variant-item">
                                                <img
                                                    src="{{ $product->image }}?cache={{$product->updated_at}}"
                                                    alt="{{ $product->name }}"
                                                    class="variant-img">
                                                <h3 class="px-2 variant-title">{{ $product->name }} <br> {{ volumeConversion($product->size) }}</h3>
                                                <a href="{{ route('frontend.product.show', ['slug' => $product->slug]) }}"
                                                    class="btn btn-pill">
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
                        <a href="{{ route('frontend.product.index') }}" class="text-shadow btn btn-pill">Eksplor Lebih</a>
                    </div>
                </div>
            </section>
        </div>

        {{-- Artikel --}}
        <div class="section">
            <section class="bg-milklife-blue-banner article-section"
                data-splide-hash="artikel">


                <div class="flex flex-col justify-between items-center pb-10 h-full article-content">
                    <h2 class="relative page-title">Artikel & Resep</h2>

                    <div
                        class="hidden md:flex flex-col justify-center mx-auto 3xl:max-w-screen-2xl max-w-4xl lg:max-w-5xl 2xl:max-w-7xl">
                        <div class="flex flex-row flex-wrap md:flex-nowrap justify-center items-baseline space-x-10 space-y-5">
                            @foreach ($posts as $post)
                                <div class="article-box">
                                    <div class="article-image-wrapper">
                                        <a href="{{ route('frontend.article.show', $post->slug) }}">
                                            <img
                                                src="{{ $post->image ? $post->image . '?cache=' . $post->updated_at : asset('img/dummy-milklife.jpg') }}"
                                                onerror="this.url = '{{asset('img/dummy-milklife.jpg')}}'"
                                                alt="{{ $post->title }}"
                                                class="article-image">
                                        </a>
                                    </div>
                                    <div class="font-geologica font-bold text-white text-xl text-center">
                                        <h2>{{ $post->title }}</h2>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="md:hidden block mt-12 w-full">
                        <div class="splide" id="article__splide">
                            <div class="splide__track">
                                <div class="splide__list">
                                    @foreach ($posts as $post)
                                        <div class="splide__slide">
                                            <div class="article-box">
                                                <div class="article-image-wrapper">
                                                    <a href="{{ route('frontend.article.show', $post->slug) }}">
                                                        <img
                                                            src="{{ $post->image ? $post->image . '?cache=' . $post->updated_at : asset('img/dummy-milklife.jpg') }}"
                                                            onerror="this.url = '{{ asset('img/dummy-milklife.jpg') }}'"
                                                            alt="{{ $post->title }}"
                                                            class="article-image">
                                                    </a>
                                                </div>
                                                <div class="font-geologica font-bold text-white text-xl text-center">
                                                    <h2>{{ $post->title }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative text-center">
                        <a href="{{ route('frontend.article') }}"
                            class="btn btn-pill">Eksplor Lebih</a>
                    </div>
                </div>


            </section>
        </div>

        {{-- Explore --}}
        <div class="section">
            <section class="flex flex-col justify-between items-center bg-milklife-blue-banner pb-10 h-full explore-section"
                data-splide-hash="explore">

                <div class="explore-content">
                    <h2 class="mb-8 2xl:mb-20 page-title page-title-lg explore-title">#DuniaMilkLife</h2>
                    <div class="hidden mx-auto max-w-full lg:max-w-[60%] text-white text-center">
                        <h4 class="mb-4 font-geologica font-bold text-2xl 2xl:text-4xl">Semua Tentang MilkLife</h4>
                        <p class="font-geologica font-light text-lg 2xl:text-xl">Beragam informasi dan kegiatan seru MilkLife
                            sehari-hari. Kenali
                            MilkLife lebih dekat dengan mengunjungi Instagram @milklife.id.
                            Jangan lupa, pakai hashtag #TentangMilkLife untuk tampil
                            bersama kita, Milk People.
                        </p>
                    </div>
                </div>

                <div class="mx-auto w-full 3xl:max-w-screen-2xl max-w-4xl lg:max-w-5xl 2xl:max-w-7xl">
                    <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
                </div>

                <div class="relative text-center">
                    <a href="{{ route('frontend.explore') }}" class="btn btn-pill">Eksplor Lebih</a>
                </div>
            </section>
        </div>

        {{-- Contact --}}
        <div class="section">
            <div class="bg-milklife-blue-banner contact-section"
                data-splide-hash="contact">


                <div class="relative flex justify-center items-center w-full h-screen">

                    <div class="w-full max-w-screen-md text-center the-content">
                        <h3 class="mb-5 font-geologica font-bold text-white text-3xl lg:text-5xl text-center">Promo ekstra
                            untuk kamu yang berdedikasi ekstra</h3>

                        <a href="https://bit.ly/HaloMilkLifee"
                            target="_blank"
                            class="shadow-sm hover:shadow-3 focus:shadow-3 transition-all translate-y-0 hover:-translate-y-1 focus:-translate-y-1 duration-500 ease-in-out btn btn-whatsapp">
                            <span>MilkLife Careline</span>
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>

                    <footer class="bottom-0 absolute inset-x-0 flex flex-col items-center space-y-2 py-3">
                        <div class="flex items-center space-x-4 link-icons-wrapper">
                            <a href="https://www.instagram.com/milklife.id/" target="_blank" class="link-icon-items"
                                style="background-image: url('{{ asset('img/icons/insta.png') }}')"></a>
                            <a href="https://www.tiktok.com/@milklife_id" target="_blank" class="link-icon-items"
                                style="background-image: url('{{ asset('img/icons/tiktok.png') }}')"></a>
                            <a href="https://twitter.com/MilkLife_ID" target="_blank" class="link-icon-items"
                                style="background-image: url('{{ asset('img/icons/twitter.png') }}')"></a>
                            <a href="https://www.facebook.com/milklifedairyID/" target="_blank" class="link-icon-items"
                                style="background-image: url('{{ asset('img/icons/facebook.png') }}')"></a>
                            <a href="https://www.youtube.com/channel/UCNGNoT-SKbax1nsJwc5SkZA" target="_blank" class="link-icon-items"
                                style="background-image: url('{{ asset('img/icons/youtube.png') }}')"></a>
                        </div>

                        <div class="copyright-wrapper">
                            <h4 class="font-geologica font-black text-white text-lg">Copyright &copy; {{ date('Y') }} Member of Savoria Group, All Rights Reserved.</h4>
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

            $('#contact-link').click(function(e){
                console.log(e);
                $.fn.pagepiling.moveTo('kontak');
                mobileNav();
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
