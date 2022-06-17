@extends('frontend.layouts.app')

@section('title', $article->title)

@section('meta_description', $article->meta_description ?? "")

@section('content')
    <div class="article-section page" style="background-image: url('{{ asset('img/bg/blue.jpg') }}')">
        <div class="article-content text-center pb-10">
            <h1 class="article-title text-white font-koara-bold text-4xl my-10 text-center">{{ $article->title }}</h1>

            <img src="{{ $article->image_url }}" alt="" class="max-w-2xl mx-auto mb-10">

            <div class="text-left text-white">
                {!! $article->body !!}
            </div>
        </div>
    </div>
@endsection
