@extends('frontend.layouts.app')

@section('title', $article->title)

@section('meta_description', $article->meta_description ?? "")

@section('content')
    <div class="article-section page" style="background-image: url('{{ asset('img/bg/blue_recipe.jpg') }}'); background-repeat-y: repeat; background-size: 100%">
        <div class="article-content text-center pb-10">
            <h1 class="article-title text-white font-koara-bold text-4xl my-10 text-center">{{ $article->title }}</h1>

            <img src="{{ $article->image ?? asset('img/dummy-milklife.jpg') }}" onerror="this.url = {{ asset('img/dummy-milklife.jpg') }}" alt="" class="w-full max-w-2xl mx-auto mb-10 border-x-8 border-y-[10px] -rotate-3 shadow-md">

            <div class="article-text">
                <article class="prose lg:prose-xl prose-white">
                    {!! $article->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script>
        $(document).ready(function() {
            // $('.article-text img').addClass('w-full mb-2 max-w-md mx-auto');

            $('.article-text img').each(function() {
                $(this).on('error', function() {
                    $(this).attr('src', '{{ asset('img/dummy-milklife.jpg') }}');
                });
            });

        });
    </script>
@endpush
