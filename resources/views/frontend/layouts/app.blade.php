<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    @stack('before-styles')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ mix('css/frontend.css') }}" rel="stylesheet">
    <link href="{{ mix('css/tailwind.css') }}" rel="stylesheet">
    <livewire:styles />
    @stack('after-styles')

    <style>
        body[data-loading="true"] {
            overflow: hidden;
        }
    </style>
</head>
<body>
    {{-- Loading  --}}

    <div id="loading" class="fixed inset-0 bg-milklife-blue" style="z-index: 99999">
        <div class="flex items-center justify-center h-full w-full">
            <div class="loading-item flex flex-col space-y-4 items-center text-center">
                <img src="{{ asset('img/logo.png') }}" alt="" class="max-w-xs">
                <div class="ldBar" data-value="0" data-type="stroke" data-stroke-trail="#256a8f" data-stroke="#efefef" data-stroke-width="5" data-stroke-trail-width="8">
                </div>
            </div>
        </div>
    </div>

    {{-- @include('includes.partials.read-only') --}}
    {{-- @include('includes.partials.logged-in-as') --}}
    {{-- @include('includes.partials.announcements') --}}

    <div id="app">
        @include('frontend.includes.nav')
        @include('includes.partials.messages')

        @yield('content')
    </div><!--app-->



    @stack('before-scripts')
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/frontend.js') }}"></script>
    <livewire:scripts />
    @stack('after-scripts')

    <script>
        // loading method
        document.addEventListener( 'DOMContentLoaded', function() {
            const bar = new ldBar('#loading .ldBar');
            let barLength = 0;
            const startBar = () => {
                bar.set(50);
                setTimeout(() => {
                    bar.set(100);
                }, 500);
            };

            const removeLoading = () => {
                document.body.removeAttribute('data-loading');
                document.getElementById('loading').remove();
            };

            startBar();
            setTimeout(() => {
                removeLoading();
            }, 3000);
        });

        //window scroll event
        window.onscroll = function() {
            scrollFunction()
        };

        const scrollFunction = () => {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("navigation").classList.add('scroll');
            } else {
                document.getElementById("navigation").classList.remove('scroll');
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            scrollFunction()
        })

        const mobileNav = () => {
            const x = document.getElementById("navigation");
            const xx = document.getElementById('hamburger');
            x.classList.toggle("open-mobile");
            xx.classList.toggle("open");
        }
    </script>
</body>
</html>
