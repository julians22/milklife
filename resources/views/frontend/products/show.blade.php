@extends('frontend.layouts.app')

@section('title', $metas['title'])
@section('meta_description', $metas['meta_description'])

@section('content')
    <div class="variant-section page min-h-max pb-8 antialiased" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')">
        <div class="variant-content">
            {{-- product showcase --}}
            <div class="product-show-case mt-5">
                <div class="product-intro">
                    <h1 class="text-4xl font-koara-bold mb-6">{{ $product->name }}</h1>
                    <p class="description text-lg">{{ $product->slogan }}</p>
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
                <h4 class="text-3xl font-koara-bold mb-4">Tersedia di:</h4>
                <div class="flex flex-row flex-no-wrap items-stretch space-x-2 justify-center">
                    <a class="shop-link" href="#"><img src="{{ asset('img/brand/Tokped.png') }}"></a>
                    <a class="shop-link" href="#"><img src="{{ asset('img/brand/Blibli.png') }}"></a>
                    <a class="shop-link" href="#"><img src="{{ asset('img/brand/Shopee.png') }}"></a>
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
        <div class="absolute w-full bottom-0 2xl:-bottom-8">
            <img src="{{ asset('img/milk.png') }}" alt="" class="w-full">
        </div>
        <div class="variant-content z-10 relative">
            {{-- product misc (nutrition & compotition) --}}
            <div class="product-misc">
                <div class="product-image w-[170px]">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full">
                </div>
                <div class="product-misc-content">
                    <div class="nav-misc-wrapper">
                        <div class="nav-misc" v-bind:class="{ active : miscShow == 'komposisi' }" v-on:click.prevent="showMisc('komposisi')">
                            <span href="#" class="font-gotham-black text-2xl text-center">Komposisi</span>
                        </div>
                        <div class="nav-misc" v-bind:class="{ active : miscShow == 'nutrisi' }" v-on:click.prevent="showMisc('nutrisi')">
                            <span href="#" class="font-gotham-black text-2xl text-center">Informasi Nilai Gizi</span>
                        </div>
                    </div>
                    <div class="misc-body pb-10" v-cloak v-show="miscShow == 'komposisi'">

                    </div>
                    <div class="misc-body pb-10" v-cloak v-show="miscShow == 'nutrisi'">
                        <img src="{{ $product->nutrition }}" alt="" class="w-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
