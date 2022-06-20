@php
    $nav_class_col = "";
    if (isset($pageColour)) {
        if ($pageColour == "orange") {
            $nav_class_col = "is-page-orange";
        }
    }
@endphp

<nav class="nav" id="navigation">
    <div class="nav-wrapper">
        <div class="item-wrapper {{ $nav_class_col }} {{ activeClass((Route::is('frontend.variant') || Route::is('frontend.product*')), 'active') }}">
            <a href="{{ route('frontend.variant') }}">Varian</a>
        </div>
        <div class="item-wrapper {{ $nav_class_col }} {{ activeClass(Route::is('frontend.about'), 'active') }}">
            <a href="{{ route('frontend.about') }}">Tentang MilkLife</a>
        </div>
        <a href="{{ route('frontend.index') }}">
            <img src="{{ asset('img/logo.png') }}" alt="" width="125">
        </a>
        <div class="item-wrapper {{ $nav_class_col }} {{ activeClass(Route::is('frontend.explore'), 'active') }}">
            <a href="{{ route('frontend.explore') }}">Dunia Milklife</a>
        </div>
        <div class="item-wrapper {{ $nav_class_col }} {{ activeClass(Route::is('frontend.article'), 'active') }}">
            <a href="{{ route('frontend.article') }}">Artikel & Resep</a>
        </div>
    </div>

    <div class="toggler-nav-close">
        <div class="w-11 rounded-b-sm mx-auto text-white text-center cursor-pointer">
            <i class="fas fa-chevron-circle-up"></i>
        </div>
    </div>
</nav>

<nav class="toggler-nav-badge">
    <div class="w-11 bg-black bg-opacity-30 rounded-b-sm mx-auto text-white text-center">
        <i class="fas fa-chevron-circle-down"></i>
    </div>
</nav>
