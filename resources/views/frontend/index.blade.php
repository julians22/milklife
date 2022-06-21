@extends('frontend.layouts.app')

@section('title', __('MilkLife'))

@section('content')

<div class="splide" id="page-splide">
    <div class="splide__track">
        <div class="splide__list">
            {{-- Banner --}}
            <section class="splide__slide banner-section" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')" >
                {{-- top left doodle --}}
                <div class="absolute top-0 right-0 md:w-28 w-6">
                    <img src="{{ asset('img/white_top_rdoodle.png') }}" alt="">
                </div>
                {{-- bottom right doodle --}}
                <div class="absolute bottom-0 right-0 md:w-36 w-6">
                    <img src="{{ asset('img/orange_bottom_rdoodle.png') }}" alt="">
                </div>
                {{-- left bottom orange --}}
                <div class="absolute bottom-1/4 left-0 md:w-36 w-6">
                    <img src="{{ asset('img/doodle_left_bottom_1.png') }}" alt="">
                </div>
                {{-- bottom --}}
                <div class="absolute bottom-0 left-1/3 md:w-36 w-6">
                    <img src="{{ asset('img/doodle_bottom_left.png') }}" alt="">
                </div>

                <div class="banner-content">
                    <div class="splide w-full" id="banner-splide">
                        <div class="splide__track">
                            <div class="splide__list">
                                @for ($i = 0; $i < 3; $i++)
                                <div class="banner-item w-full relative flex justify-between items-start splide__slide">
                                    <div class="banner-text max-w-md space-y-4">
                                        <h2 class="text-6xl 2xl:text-7xl text-white font-koara-bold mb-3">Susu Bebas Laktosa</h2>
                                        <p class="text-white font-gotham-light text-lg 2xl:text-3xl mb-3">Diformulasikan khusus untuk
                                            para penderita intoleransi laktosa.</p>
                                        <a href="#" class="btn btn-doodle text-shadow">Beli Sekarang</a>
                                    </div>

                                    <div class="banner-product max-w-md 2xl:max-w-lg">
                                        <img src="{{ asset('img/product/product_1.png') }}" alt="">
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- About --}}
            <section class="about-section splide__slide" style="background-image: url('{{ asset('img/bg/gray_yellbg.jpg') }}')" data-splide-hash="about">
                {{-- top right doodle --}}
                <div class="absolute top-0 right-0 md:w-44 w-6">
                    <img src="{{ asset('img/bottom_about.png') }}" alt="" class="rotate-180">
                </div>
                {{-- bottom left doodle --}}
                <div class="absolute bottom-0 left-0 md:w-36 w-6">
                    <img src="{{ asset('img/bottom_about.png') }}" alt="">
                </div>

                {{-- bug doodle --}}
                <div class="absolute top-40 left-24 md:w-36 w-6">
                    <img src="{{ asset('img/bug_1.png') }}" alt="">
                </div>

                {{-- flower right bottom --}}
                <div class="absolute bottom-0 right-0 md:w-28 w-6">
                    <img src="{{ asset('img/flower.png') }}" alt="">
                </div>

                <div class="about-content w-full">
                    <h2 class="page-title" style="text-shadow: 6px 6px 0 #22619F;">Mengapa MilkLife?</h2>

                    <div class="about-content w-full h-full">
                        <div class="flex items-center justify-center h-[600px] 2xl:mt-24 3xl:mt-48">
                            <div class="grid grid-cols-2 grid-rows-2 relative">
                                {{-- doodle stright right --}}
                                <div class="absolute right-[-2em] top-[50%] -translate-y-1/2 w-12">
                                    <img src="{{ asset('img/staright_right.png') }}" alt="" class="w-full anim-fade-in">
                                </div>

                                {{-- doodle stright left --}}
                                <div class="absolute left-[-2em] top-[50%] -translate-y-1/2 w-12">
                                    <img src="{{ asset('img/staright_left.png') }}" alt="" class="w-full anim-fade-in">
                                </div>


                                <div class="z-[4] grid-instax row-start-2">
                                    <img class="max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[450px] absolute bottom-0 left-0 hover:translate-y-8 hover:-translate-x-4 anim-fade-in" src="{{ asset('img/thumbnail/home/Photo 1.png') }}" alt="">
                                </div>
                                <div class="z-[3] grid-instax row-start-1">
                                    <img class="max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[450px] absolute top-0 left-0 hover:-translate-y-8 hover:-translate-x-4 anim-fade-in" src="{{ asset('img/thumbnail/home/Photo 2.png') }}" alt="">
                                </div>
                                <div class="z-[2] grid-instax row-start-2">
                                    <img class="max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[450px] absolute right-0 bottom-0 hover:translate-y-8 hover:translate-x-4 anim-fade-in" src="{{ asset('img/thumbnail/home/Photo 3.png') }}" alt="">
                                </div>
                                <div class="z-[1] grid-instax row-start-1">
                                    <img class="max-w-[240px] 2xl:max-w-[300px] 3xl:max-w-[450px] absolute right-0 top-0 hover:-translate-y-8 hover:translate-x-4 anim-fade-in" src="{{ asset('img/thumbnail/home/Photo 4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Variants --}}
            <section class="variant-section splide__slide" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')" data-splide-hash="variant">

                {{-- top right doodle straight--}}
                <div class="absolute top-12 -right-3 md:w-36 w-6">
                    <img src="{{ asset('img/straight1.png') }}" alt="">
                </div>

                {{-- top left doodle rocket --}}
                <div class="absolute -top-12 left-40 md:w-36 w-6">
                    <img src="{{ asset('img/rocket.png') }}" alt="">
                </div>

                {{-- left doodle --}}
                <div class="absolute left-0 top-1/4 md:w-36 w-6">
                    <img src="{{ asset('img/doodle_left_bottom_1.png') }}" alt="">
                </div>

                <div class="variant-content w-full h-full">
                    <h2 class="page-title mb-10" >Variant MilkLife</h2>
                    <div class="max-w-4xl lg:max-w-5xl 2xl:max-w-7xl mx-auto mb-3 2xl:mt-24">

                        <div class="splide " id="variant-splide">
                            <div class="splide__track">
                                <div class="splide__list">
                                    @foreach ($products as $product)
                                        <div class="splide__slide">
                                            <div class="variant-item">
                                                <img src="{{$product->image}}" alt="{{ $product->name }}" class="variant-img">
                                                <h3 class="variant-title px-2">{{ $product->name }}</h3>
                                                <a href="{{ route('frontend.product.show', ['slug'=>$product->slug]) }}" class="btn btn btn-doodle btn-doodle-basic btn-sm">Beli Sekarang</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('frontend.variant') }}" class="btn btn-doodle text-shadow">Eksplor Lebih</a>
                    </div>
                </div>
            </section>

            {{-- Artikel --}}
            <section class="article-section splide__slide" style="background-image: url('{{ asset('img/bg/orangebg.jpg') }}')" data-splide-hash="artikel">
                {{-- planet top right --}}
                <div class="absolute -top-10 right-28 md:w-40 w-10">
                    <img src="{{ asset('img/Planet.png') }}" alt="">
                </div>

                {{-- moon top left --}}
                <div class="absolute -top-16 left-40 md:w-32 w-6">
                    <img src="{{ asset('img/Moon.png') }}" alt="">
                </div>

                {{-- doodle cloud left --}}
                <div class="absolute left-20 top-[20%] md:w-32 w-6">
                    <img src="{{ asset('img/Cloud.png') }}" alt="">
                </div>

                {{-- doodle right --}}
                <div class="absolute right-0 top-1/4 md:w-32 w-6">
                    <img src="{{ asset('img/doodle_left_bottom_1.png') }}" alt="" class="w-full -scale-100">
                </div>


                {{-- doodle love --}}
                <div class="absolute right-[30%] top-24 md:w-10 w-3">
                    <img src="{{ asset('img/love.png') }}" alt="" class="w-full">
                </div>

                {{-- doodle star --}}
                <div class="absolute right-[35%] bottom-24 md:w-16 w-3">
                    <img src="{{ asset('img/star_orange.png') }}" alt="" class="w-full">
                </div>


                <div class="article-content h-full">
                    <h2 class="page-title relative">Artikel & Resep</h2>

                    <div class="max-w-4xl lg:max-w-5xl 2xl:max-w-7xl 3xl:max-w-screen-2xl mx-auto flex flex-col justify-center mt-32 2xl:mt-40 3xl:mt-48">
                        <div class="flex justify-center space-x-10 space-y-5 items-baseline">
                            @foreach ($posts as $post)
                                <div class="article-box ">
                                    <div class="article-image-wrapper">
                                        <a href="{{ route('frontend.article.show', $post->slug) }}">
                                            <img src="{{ $post->image_thumb_url ?? '' }}" alt="{{ $post->title }}" class="article-image">
                                        </a>
                                    </div>
                                    <div class="text-xl text-white text-center font-koara-bold">
                                        <h2>{{ $post->title }}</h2>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('frontend.article') }}" class="btn btn-doodle btn-doodle-blue text-shadow">Eksplor Lebih</a>
                    </div>
                </div>


            </section>

            {{-- Explore --}}
            <section class="explore-section splide__slide" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')" data-splide-hash="explore">
                {{-- top right doodle --}}
                <div class="absolute top-0 left-0 md:w-40 w-6">
                    <img src="{{ asset('img/orange_bottom_rdoodle.png') }}" alt="" class="rotate-180">
                </div>
                {{-- bottom right doodle --}}
                <div class="absolute bottom-0 right-0 md:w-40 w-6">
                    <img src="{{ asset('img/orange_bottom_rdoodle.png') }}" alt="">
                </div>
                {{-- flower left --}}
                <div class="absolute left-0 bottom-[20%] md:w-20 w-6">
                    <img src="{{ asset('img/flower.png') }}" alt="" class="w-full -scale-x-100">
                </div>

                {{-- butterfly top --}}
                <div class="absolute -top-[5%] left-[20%] md:w-20 w-6">
                    <img src="{{ asset('img/bug_1.png') }}" alt="" class="w-full">
                </div>

                <div class="explore-content">
                    <h2 class="page-title page-title-lg explore-title mb-8 2xl:mb-20">#DuniaMilkLife</h2>
                    <div class="max-w-[60%] text-center text-white mx-auto">
                        <h4 class="text-2xl 2xl:text-4xl font-koara-bold mb-4">Semua Tentang MilkLife</h4>
                        <p class="font-gotham-light text-lg 2xl:text-xl">Beragam informasi dan kegiatan seru MilkLife sehari-hari. Kenali
                            MilkLife lebih dekat dengan mengunjungi Instagram @milklife.id.
                            Jangan lupa, pakai hashtag #TentangMilkLife untuk tampil
                            bersama kita, Milk People.
                        </p>
                    </div>
                </div>

                <div class="explore-rope-image">
                    <img src="{{ asset('img/rope.png') }}" alt="" class="w-full absolute inset-x-0 bottom-[85%]">
                    <div class="flex items-center space-x-12 justify-center">
                        <div class="relative thumb-wrapper">
                            <img src="{{ asset('img/thumbnail/home/6 Januari 2022dml.jpg') }}" alt="" class="img-thumbnail -translate-y-7 rotate-12">
                        </div>
                        <div class="relative thumb-wrapper">
                            <img src="{{ asset('img/thumbnail/home/8 maret 2022 feeddml.jpg') }}" alt="" class="img-thumbnail rotate-6">
                        </div>
                        <div class="relative thumb-wrapper">
                            <img src="{{ asset('img/thumbnail/home/21 maret 2022 revdml.jpg') }}" alt="" class="img-thumbnail -rotate-6">
                        </div>
                        <div class="relative thumb-wrapper">
                            <img src="{{ asset('img/thumbnail/home/23 Maret 2022dml.jpg') }}" alt="" class="img-thumbnail -translate-y-7 -rotate-12">
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('frontend.explore') }}" class="btn btn-doodle text-shadow">Eksplor Lebih</a>
                </div>
            </section>

            {{-- Contact --}}
            <section class="contact-section splide__slide" style="background-image: url('{{ asset('img/bg/gray_yellbg.jpg') }}')" data-splide-hash="contact">


                <div class="flex w-full h-full justify-center items-center relative">
                    {{-- line left doodle --}}
                    <div class="absolute bottom-28 lg:bottom-16 left-0 w-20 lg:w-40">
                        <img src="{{ asset('img/doodle_orange.png') }}" alt="" class="w-full">
                    </div>
                    {{-- line right doodle --}}
                    <div class="absolute top-28 lg:top-16 right-0 w-20 lg:w-40">
                        <img src="{{ asset('img/doodle_orange.png') }}" alt="" class="w-full -scale-100">
                    </div>

                    {{-- star top left doodle --}}
                    <div class="absolute -top-[10%] left-[20%] md:w-16 w-6">
                        <img src="{{ asset('img/star_2.png') }}" alt="" class="w-full">
                    </div>

                    {{-- star top right doodle --}}
                    <div class="absolute -top-[8%] right-[20%] md:w-16 w-6">
                        <img src="{{ asset('img/star.png') }}" alt="" class="w-full">
                    </div>

                    {{-- love right doodle --}}
                    <div class="absolute right-[10%] top-32 lg:w-16 w-3">
                        <img src="{{ asset('img/love_doodle.png') }}" alt="" class="w-full -scale-x-100">
                    </div>

                    {{-- star left doodle --}}
                    <div class="absolute left-[10%] top-36 lg:w-16 w-3">
                        <img src="{{ asset('img/star.png') }}" alt="" class="w-full -scale-x-100">
                    </div>

                    {{-- star bottom doodle --}}
                    <div class="absolute bottom-0 left-[20%] lg:w-24 w-3">
                        <img src="{{ asset('img/star_fall.png') }}" alt="" class="w-full">
                    </div>

                    <div class="the-content max-w-screen-md w-full text-center">
                        <h3 class="text-3xl lg:text-5xl font-koara-bold text-center text-milklife-orange mb-5">Promo ekstra untuk kamu yang berdedikasi ekstra</h3>

                        <a href="#" class="btn btn-whatsapp shadow-sm hover:shadow-3 focus:shadow-3 translate-y-0 focus:-translate-y-1 hover:-translate-y-1 transition-all ease-in-out duration-500">
                            <span>START CHAT</span>
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>

                    <footer class="absolute bottom-0 inset-x-0 flex flex-col space-y-2 py-3 items-center">
                        <div class="link-icons-wrapper flex items-center space-x-4">
                            <a href="#" class="link-icon-items " style="background-image: url('{{ asset('img/icons/insta.png') }}')"></a>
                            <a href="#" class="link-icon-items " style="background-image: url('{{ asset('img/icons/tiktok.png') }}')"></a>
                            <a href="#" class="link-icon-items " style="background-image: url('{{ asset('img/icons/twitter.png') }}')"></a>
                            <a href="#" class="link-icon-items " style="background-image: url('{{ asset('img/icons/facebook.png') }}')"></a>
                            <a href="#" class="link-icon-items " style="background-image: url('{{ asset('img/icons/youtube.png') }}')"></a>
                        </div>

                        <div class="copyright-wrapper">
                            <h4 class="text-lg font-gotham-black text-milklife-orange">Copyright PT Global Dairi Alami 2022</h4>
                        </div>
                    </footer>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="page-nav absolute right-5 top-1/2 bottom-1/2">
    <div class="bg-white rounded-full p-2 flex flex-col justify-center space-y-2">
        <a href="#" class="page-nav-item active" data-target="0"></a>
        <a href="#" class="page-nav-item" data-target="1"></a>
        <a href="#" class="page-nav-item" data-target="2"></a>
        <a href="#" class="page-nav-item" data-target="3"></a>
        <a href="#" class="page-nav-item" data-target="4"></a>
        <a href="#" class="page-nav-item" data-target="5"></a>
    </div>
</div>


@endsection

@push('after-scripts')
    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
            scrollFunction();

            const navBadge = document.querySelector('.toggler-nav-badge');
            const navCloseBagde = document.querySelector('.toggler-nav-close');

            var bannerSplide = new Splide( '#banner-splide' ,{
                type: 'fade',
                speed: 2000,
                arrows: false
            });

            bannerSplide.on( 'active', function(e) {
                const bannerProduct = document.querySelectorAll('.banner-product');
                const bannerText = document.querySelectorAll('.banner-text');
                bannerProduct[e.index].classList.add('animate__animated', 'animate__fadeInRightBig');
                bannerText[e.index].classList.add('animate__animated', 'animate__fadeInLeftBig');
            });

            bannerSplide.on( 'inactive', function(e) {
                const bannerProduct = document.querySelectorAll('.banner-product');
                const bannerText = document.querySelectorAll('.banner-text');
                bannerProduct[e.index].classList.remove('animate__animated', 'animate__fadeInRightBig');
                bannerText[e.index].classList.remove('animate__animated', 'animate__fadeInLeftBig');
            });

            bannerSplide.mount();

            var pageSplide = new Splide( '#page-splide' ,{
                perPage: 1,
                speed: 1000,
                pagination: false,
                arrows: false,
                direction: 'ttb',
                height   : '100vh',
                drag: false,
                wheel: true,
                waitForTransition: true,
                breakpoints: {
                    1024: {
                        drag: true,
                    }
                }
            });
            var pageNav = document.querySelectorAll('.page-nav-item');

            pageSplide.on( 'active', function(e) {
                const index = e.index;
                if (index > 0){
                    document.getElementById("navigation").style.top = "-500px";
                    document.getElementById("navigation").classList.remove('open-badge');
                    navBadge.style.top = "0px";
                }else{
                    document.getElementById("navigation").style.top = "0";
                    navBadge.style.top = "-500px";
                }

                document.querySelector('.page-nav-item.active').classList.remove('active');
                pageNav[index].classList.add('active');
            });

            pageSplide.on('move', (index) => {
                if (index == 2) {
                    console.log(pageSplide);
                }
            })


            pageNav.forEach(element => {
                element.addEventListener('click', function(e){
                    e.preventDefault();
                    const index = Number(this.getAttribute('data-target'));
                    pageSplide.go(index);
                });
            });

            pageSplide.mount( { URLHash } );

            var variantSplide = new Splide( '#variant-splide' ,{
                perPage: 4,
                pagination: false,
                type: 'loop',
                speed: 1500
            });

            variantSplide.mount();

            navBadge.addEventListener('click', function(e){
                e.preventDefault();
                document.getElementById("navigation").style.top = "0";
                document.getElementById("navigation").classList.add('open-badge');
                navBadge.style.top = "-500px";
            });

            navCloseBagde.addEventListener('click', function(e){
                e.preventDefault();
                document.getElementById("navigation").style.top = "-500px";
                document.getElementById("navigation").classList.remove('open-badge');
                navBadge.style.top = "0px";
            });
        });

    </script>
@endpush

