<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('assets/image/new_logo.png')}}" type="image/x-icon">

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/sisstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
    <link rel="stylesheet"  href="{{ asset('assets/css/stylecustom.css') }}" />
    <link rel="stylesheet"  href="{{ asset('assets/css/custom.css') }}" />
    <!-- <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet"> -->


    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/scriptsi.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr.custom.79639.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.ba-cond.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.slitslider.js') }}"></script>

    
</head>

<body>
    <div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
    {{ config('app.name', 'Ihouse.am') }}
</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav me-auto">

                    </ul>

                    
                    <ul class="navbar-nav ms-auto">
                      
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Մուտք') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Ռեգիստրացիյա') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
        @include('layouts.inc.frontend-navbar')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.inc.frontend-footer')
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
    <script>
    
        function openMenu() {
            var button = document.querySelector('.navbar-toggle');
            var menu = document.querySelector('.navbar-collapse');

            if (!menu.classList.contains('in')) {
                button.click();
            }
        }

        function closeMenu() {
            var button = document.querySelector('.navbar-toggle');
            var menu = document.querySelector('.navbar-collapse');

            if (menu.classList.contains('in')) {
                button.click();
            }
        }

        openMenu();  
        setTimeout(closeMenu, 2000);  



    </script>
</body>

</html>