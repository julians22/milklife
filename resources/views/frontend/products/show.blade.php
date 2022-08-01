@extends('frontend.layouts.app')

@section('title', $metas['title'])
@section('meta_description', $metas['meta_description'])

@section('content')
    <div class="variant-section page min-h-max pb-8 antialiased overflow-hidden" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')">

        {{-- doodle right straight 1 --}}
        <div class="absolute top-[8%] right-0 w-28">
            <img src="{{ asset('img/doodle/straight1.png') }}" alt="" class="w-full">
        </div>

        {{-- doodle right rounds  --}}
        <div class="absolute top-[20%] -right-[20px] w-28">
            <img src="{{ asset('img/doodle/doodle_left_bottom_1.png') }}" alt="" class="w-full -scale-x-100">
        </div>

        {{-- doodle bug bottom right --}}
        <div class="absolute bottom-[20%] right-[40px] w-20">
            <img src="{{ asset('img/doodle/bug_1.png') }}" alt="" class="w-full -scale-x-100">
        </div>

        {{-- doodle rounds left --}}
        <div class="absolute bottom-[20%] -left-[40px] w-28">
            <img src="{{ asset('img/doodle/round.png') }}" alt="" class="w-full rotate-6">
        </div>

        {{-- doodle bug left --}}
        <div class="absolute bottom-[40%] left-[20%] w-28">
            <img src="{{ asset('img/doodle/bug_2.png') }}" alt="" class="w-full">
        </div>

        {{-- doodle flower bottom right --}}
        <div class="absolute -bottom-[3%] right-0 w-28">
            <img src="{{ asset('img/doodle/flower.png') }}" alt="" class="w-full">
        </div>

        {{-- doodle flower --}}
        <div class="absolute -bottom-[6%] left-[20%] w-28">
            <img src="{{ asset('img/doodle/flower_full.png') }}" alt="" class="w-full">
        </div>

        <div class="variant-content">
            {{-- product showcase --}}
            <div class="product-show-case mt-5">
                <div class="product-intro">
                    <h1 class="text-4xl font-koara-bold mb-6 mt-4 lg:mt-0 text-center lg:text-left">{{ $product->name }}</h1>
                    <p class="description text-xl lg:text-lg">{{ $product->slogan }}</p>
                </div>
                <div class="product-image w-[150px]">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full">
                </div>
                <div class="product-excelence">
                    @if ($product->productExcelences->count() > 0)
                    @foreach ($product->productExcelences as $productExcelence)
                    <div class="flex flex-row flex-no-wrap items-end space-x-5 space-y-4">
                        <span><img src="{{ asset('img/icons/bullet_y.png') }}" alt="" class="w-10"></span>
                        <span>{{ $productExcelence->name }}</span>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>

            {{-- product links --}}
            <div class="product-links text-center text-white mt-4">
                <h4 class="text-xl lg:text-3xl font-koara-bold mb-4">Tersedia di:</h4>
                <div class="flex flex-row flex-no-wrap items-stretch space-x-2 justify-center">
                    @if ($product->productLinks->count() > 0)
                        @foreach ($product->productLinks as $productLink)
                            @if ($productLink->url != null)
                                @if ($productLink->isTokopedia())
                                    <a class="shop-link" href="{{ $productLink->url }}" target="BLANK"><img src="{{ asset('img/brand/Tokped.png') }}"></a>
                                @elseif($productLink->isShopee())
                                    <a class="shop-link" href="{{ $productLink->url }}" target="BLANK"><img src="{{ asset('img/brand/Shopee.png') }}"></a>
                                @elseif($productLink->isBlibli())
                                    <a class="shop-link" href="{{ $productLink->url }}" target="BLANK"><img src="{{ asset('img/brand/Blibli.png') }}"></a>
                                @endif
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>

            {{-- product-related --}}
            <div class="product-related mt-10">
                <div class="flex flex-row flex-no-wrap items-end space-x-6 justify-center">
                    <div class="product-item w-20">
                        <a href="{{ route('frontend.product.show', $product->slug) }}" class="">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full">
                        </a>
                    </div>
                    @foreach ($relatedProducts as $relatedProduct)
                    <div class="product-item w-20">
                        <a href="{{ route('frontend.product.show', $relatedProduct->slug) }}" class="">
                            <img src="{{ asset($relatedProduct->image) }}" alt="{{ $relatedProduct->name }}" class="w-full opacity-80 hover:opacity-100 hover:-translate-y-4 transform transition">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="variant-section page py-8 2xl:py-14 min-h-max overflow-hidden" style="background-image: url('{{ asset('img/bg/orangebg.jpg') }}')">
        {{-- doodle flower top right --}}
        <div class="absolute -top-[19%] right-0 w-28">
            <img src="{{ asset('img/doodle/flower.png') }}" alt="" class="w-full">
        </div>

        {{-- doodle flower --}}
        <div class="absolute -top-[9%] left-[20%] w-28">
            <img src="{{ asset('img/doodle/flower_full.png') }}" alt="" class="w-full">
        </div>

        {{-- doodle right rounds  --}}
        <div class="absolute bottom-[20%] -right-[30px] w-28">
            <img src="{{ asset('img/doodle/doodle_left_bottom_1.png') }}" alt="" class="w-full -scale-x-100 h-28">
        </div>

        <div class="absolute w-full bottom-0 2xl:-bottom-8">
            <img src="{{ asset('img/milk.png') }}" alt="" class="w-full">
        </div>
        <div class="variant-content z-10 relative">
            {{-- product misc (nutrition & compotition) --}}
            <div class="product-misc">
                <div class="product-image hidden md:block w-[170px]">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full">
                </div>
                <div class="product-misc-content flex flex-col">
                    <div class="nav-misc-wrapper">
                        <div class="nav-misc" v-bind:class="{ active : miscShow == 'komposisi' }" v-on:click.prevent="showMisc('komposisi')">
                            <span href="#" class="font-gotham-black text-base lg:text-2xl text-center">Komposisi</span>
                        </div>
                        <div class="nav-misc" v-bind:class="{ active : miscShow == 'nutrisi' }" v-on:click.prevent="showMisc('nutrisi')">
                            <span href="#" class="font-gotham-black text-base lg:text-2xl text-center">Informasi Nilai Gizi</span>
                        </div>
                    </div>
                    <div class="misc-body mt-10 md:mt-0 pb-0 md:pb-10 flex-grow px-0 md:px-20" v-cloak v-show="miscShow == 'komposisi'">
                        <div class="flex flex-col h-full justify-end">
                            @foreach ($product->productCompotitions as $compotition)
                            <div class="flex flex-row flex-no-wrap items-end space-x-5 space-y-4 text-base lg:text-xl font-gotham-black text-white">
                                <span><img src="{{ asset('img/icons/bullet_y.png') }}" alt="" class="w-10"></span>
                                <span>{{ $compotition->name }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="misc-body mt-10 md:mt-0 pb-0 md:pb-10 flex-grow px-0 md:px-10" v-cloak v-show="miscShow == 'nutrisi'">
                        <img src="{{ $product->nutrition }}" alt="" class="w-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
