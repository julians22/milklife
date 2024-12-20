@extends('frontend.layouts.app')

@section('title', $article->title)

@section('meta_description', $article->meta_description ?? "")

@section('content')
    <div class="article-section page bg-milklife-blue-banner">
        <div class="article-content text-center pb-10">
            <h1 class="article-title text-white font-koara-bold text-4xl my-10 text-center">{{ $article->title }}</h1>

            <img src="{{ $article->image }}?cache={{$article->updated_at}}"
                alt="{{ $article->title }}"
                class="max-w-2xl mx-auto mb-10 border-x-8 border-y-[10px] -rotate-3 shadow-md">

            <div class="text-left text-white 2xl:text-lg">
                {!! $article->body !!}
            </div>
        </div>
    </div>
@endsection
