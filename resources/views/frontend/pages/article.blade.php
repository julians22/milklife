@extends('frontend.layouts.app')

@section('title', 'Artikel & Resep')

@section('meta_description', 'halaman Artikel & Resep')

@section('content')
    <div class="article-section page bg-milklife-blue-banner">

        <div class="article-content pb-20">
            <h1 class="article-title text-white font-koara-bold text-3xl mt-10 text-center">Cari Tahu yang Kamu Mau!</h1>

            <div class="nav-artikel-wrapper">
                <div class="nav-artikel" v-bind:class="{ active : articleShow == 'article' }" v-on:click.prevent="showArticle('article')">
                    <span href="#" class="font-gotham-bold text-2xl text-center">Artikel</span>
                </div>
                <div class="nav-artikel" v-bind:class="{ active : articleShow == 'recipe' }" v-on:click.prevent="showArticle('recipe')">
                    <span href="#" class="font-gotham-bold text-2xl text-center">Resep</span>
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
