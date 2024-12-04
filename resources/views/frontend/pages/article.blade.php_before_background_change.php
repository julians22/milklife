@extends('frontend.layouts.app')

@section('title', 'Artikel & Resep')

@section('meta_description', 'halaman Artikel & Resep')

@section('content')
    <div class="article-section page" style="background-image: url('{{ asset('img/bg/orangebg.jpg') }}')">

        {{-- doodle rounds right --}}
        <div class="absolute right-0 top-[150px] w-28">
            <img src="{{ asset('img/doodle/doodle_left_bottom_1.png') }}" alt="" class="-scale-x-100 w-full">
        </div>

        {{-- doodle bug --}}
        <div class="absolute left-[10%] top-[150px] w-20">
            <img src="{{ asset('img/doodle/bug_2.png') }}" alt="" class="w-full">
        </div>

        {{-- doodle love --}}
        <div class="absolute left-[30%] top-[225px] w-14">
            <img src="{{ asset('img/doodle/love.png') }}" alt="" class="w-full">
        </div>

        {{-- doodle flower --}}
        <div class="absolute left-0 bottom-[10%] w-20">
            <img src="{{ asset('img/doodle/flower.png') }}" alt="" class="w-full -scale-x-100">
        </div>

        {{-- doodle cloud --}}
        <div class="absolute left-[40%] bottom-0 w-20">
            <img src="{{ asset('img/doodle/Cloud.png') }}" alt="" class="w-full">
        </div>

        <div class="article-content pb-20">
            <h1 class="article-title text-white font-koara-bold text-3xl mt-10 text-center">Cari Tahu yang Kamu Mau!</h1>

            <div class="nav-artikel-wrapper">
                <div class="nav-artikel" v-bind:class="{ active : articleShow == 'article' }" v-on:click.prevent="showArticle('article')">
                    <span href="#" class="font-gotham-black text-2xl text-center">Artikel</span>
                </div>
                <div class="nav-artikel" v-bind:class="{ active : articleShow == 'recipe' }" v-on:click.prevent="showArticle('recipe')">
                    <span href="#" class="font-gotham-black text-2xl text-center">Resep</span>
                </div>
            </div>

            <div class="article-body pb-10" v-cloak v-show="articleShow == 'article'">
               @livewire('frontend.post-component', ['post_type' => 'article'], key('articles-lists'))
            </div>
            <div class="article-body pb-10" v-cloak v-show="articleShow == 'recipe'">
                @livewire('frontend.post-component', ['post_type' => 'recipe'], key('recipes-lists'))
            </div>
        </div>

    </div>
@endsection
