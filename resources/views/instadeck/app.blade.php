<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/fontawesome-513/css/all.css')}}">

    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/instadeck.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm" id="dhs_navbar">
            <div class="container">
                <div id="dhs_navbar-brand"><a class="navbar-brand" href="/instadeck">InstaDeck</a></div>
                @guest
                    <div class="navbar-nav ml-auto">
                        @if (Route::currentRouteName() == 'instadeck.login')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('instadeck.register') }}">{{ __('Register') }}</a>
                            </li>
                        @elseif (Route::currentRouteName() == 'instadeck.register')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('instadeck.login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item d-flex">
                                <a class="nav-link" href="{{ route('instadeck.login') }}">{{ __('Login') }}</a>
                                <a class="nav-link" href="{{ route('instadeck.register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    </div>
                @else
                    <div class="navbar-nav ml-auto" id="dhs_navbar-dropdown">
                        <div class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                                {{ Auth::user()->id }}
                            </a>
                            <div class="dropdown-menu" id="dhs_dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item dhs_dropdown-item" href="/instadeck">
                                    <i class="fas fa-fw fa-home mr-3"></i>{{ __('Home') }}
                                </a>
                                <!-- <a class="dropdown-item dhs_dropdown-item" href="/instadeck/post/browse">
                                    <i class="fas fa-fw fa-search mr-3"></i>{{ __('Browse') }}
                                </a> -->
                                <a class="dropdown-item dhs_dropdown-item" href="/instadeck/profile/{{ Auth::user()->id }}">
                                    <i class="fas fa-fw fa-user mr-3"></i>{{ __('Profile') }}
                                </a>
                                <a class="dropdown-item dhs_dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-fw fa-power-off mr-3"></i>{{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-nav ml-auto" id="dhs_navbar-nav">
                        <div class="dropdown" id="dhs_dropdown">{{ Auth::user()->id }}</div>
                    </div>
                @endguest
            </div>
        </nav>

        <main class="dhs_main-page pb-5 mb-5">
            @yield('content')
        </main>

        @if (Auth::user(['id']))
            <div class="shadow-lg" id="dhs_mobile-button">
                <div class="col text-center">
                    <a href="/instadeck" class="dhs_mobile-link-dark {{ Route::currentRouteName() == 'instadeck.home' ? 'active' : '' }}" title="Home">
                        <i class="fas fa-fw fa-home"></i>
                    </a>
                </div>
                <!-- <div class="col text-center">
                    <a href="/instadeck/post/browse" class="dhs_mobile-link-dark {{ Route::currentRouteName() == 'post.browse' ? 'active' : '' }}" title="Browse">
                        <i class="fas fa-fw fa-search"></i>
                    </a>
                </div> -->
                <div class="col text-center">
                    <a href="/instadeck/post/create" class="dhs_mobile-link-dark {{ Route::currentRouteName() == 'post.create' ? 'active' : '' }}" title="Create New Post">
                        <i class="fas fa-fw fa-plus-square"></i>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="/instadeck/profile/{{ Auth::user()->id }}" title="Profile">
                        <img src="{{ Auth::user()->profile->profileImage() }}" class="rounded-circle dhs_mobile-nav {{ Request::segment(3) == Auth::user()->id && Route::currentRouteName() == 'profile.show' ? 'active' : '' }}">
                    </a>
                </div>
                <div class="col text-center">
                    <a href="{{ route('logout') }}" class="dhs_mobile-link-dark" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-fw fa-power-off"></i>
                    </a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        @endif
    </div>
</body>
</html>