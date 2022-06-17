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
</nav>
