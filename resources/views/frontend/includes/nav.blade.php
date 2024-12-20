@php
    $nav_class_col = "";
    if (isset($pageColour)) {
        if ($pageColour == "orange") {
            $nav_class_col = "is-page-orange";
        }
    }
@endphp

<nav class="nav bg-milklife-orange-darken md:bg-transparent" id="navigation">
    <div class="nav-wrapper">
        <a href="{{ route('frontend.index') }}" class="logo-mobile">
            <img src="{{ asset('img/logo.png') }}" alt="" width="125">
        </a>
        <div class="item-wrapper {{ $nav_class_col }} {{ activeClass((Route::is('frontend.variant') || Route::is('frontend.product*')), 'active') }}">
            <a href="{{ route('frontend.product.index') }}">Varian <br> MilkLife</a>
        </div>
        <div class="item-wrapper {{ $nav_class_col }} {{ activeClass(Route::is('frontend.about'), 'active') }}">
            <a href="{{ route('frontend.about') }}">Tentang <br> MilkLife</a>
        </div>
        <a href="{{ route('frontend.index') }}" class="hidden md:block">
            <img src="{{ asset('img/logo.png') }}" alt="" width="125">
        </a>
        <div class="item-wrapper {{ $nav_class_col }} {{ activeClass(Route::is('frontend.explore'), 'active') }}">
            <a href="{{ route('frontend.explore') }}">Dunia <br> MilkLife</a>
        </div>
        <div class="item-wrapper {{ $nav_class_col }} {{ activeClass(Route::is('frontend.article'), 'active') }}">
            <a href="{{ route('frontend.article') }}">Artikel & <br> Resep</a>
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

<nav class="toggler-nav-mobile">
    <div id="hamburger" onclick="mobileNav()">
		<svg width="50" height="50" viewBox="0 0 100 100">
			<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
			<path class="line line2" d="M 20,50 H 80" />
			<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
		</svg>
	</div>
</nav>
