{{-- <div> --}}
    <div class="article-post-container w-full">
        <div class="flex justify-center space-x-6 space-y-5 items-baseline flex-wrap">
        @foreach ($posts as $post)
            <div class="article-box">
                <div class="article-image-wrapper">
                    <a href="{{ route('frontend.article.show', $post->slug) }}">
                        <img
                            src="{{ $post->image_thumb ? $post->image_thumb . '?cache=' . $post->updated_at : asset('img/dummy-milklife.jpg') }}"
                            onerror="this.src = '{{ asset('img/dummy-milklife.jpg') }}'"
                            alt="{{ $post->title }}" class="article-image">
                    </a>
                </div>
                <div class="text-xl text-white text-center font-geologica font-bold">
                    <a href="{{ route('frontend.article.show', $post->slug) }}">
                        <h2>{{ $post->title }}</h2>
                    </a>
                </div>
            </div>
        @endforeach
        </div>

        <div class="text-center relative {{ $perPage < $posts->total() ?: 'hidden'  }}">
            <a href="#" wire:loading.remove wire:click.prevent="loadMore('{{$post_type}}')" class="btn btn-pill">Muat Lebih</a>
        </div>
    </div>
{{-- </div> --}}
