@extends('frontend.layouts.app')

@section('title', 'Artikel & Resep')

@section('meta_description', 'halaman Artikel & Resep')

@section('content')
    <div class="article-section page" style="background-image: url('{{ asset('img/bg/orangebg.jpg') }}')">

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
                <div class="article-post-container w-full">
                    <div class="flex justify-center space-x-10 space-y-5 items-baseline flex-wrap">
                    @foreach ($content['articles'] as $article)
                        <div class="article-box">
                            <div class="article-image-wrapper">
                                <a href="{{ route('frontend.article.show', $article->slug) }}">
                                    <img src="{{ $article->image_thumb ?? '' }}" alt="{{ $article->title }}" class="article-image">
                                </a>
                            </div>
                            <div class="text-xl text-white text-center font-koara-bold">
                                <h2>{{ $article->title }}</h2>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="article-body pb-10" v-cloak v-show="articleShow == 'recipe'">
                <div class="article-post-container">
                    <div class="flex justify-center space-x-10 space-y-5 items-baseline flex-wrap">
                    @foreach ($content['recipes'] as $article)
                        <div class="article-box">
                            <div class="article-image-wrapper">
                                <a href="{{ route('frontend.article.show', $article->slug) }}">
                                    <img src="{{ $article->image_thumb}}" alt="{{ $article->title }}" class="article-image">
                                </a>
                            </div>
                            <div class="text-xl text-white text-center font-koara-bold">
                                <h2>{{ $article->title }}</h2>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
