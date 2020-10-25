<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women in Business #Strong</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Woman in Business
                </a>
            <a class="nav-link" href="/home">Home</a>
            @auth
                <a class="nav-link" href="/expenses">Expenses</a>
                <a class="nav-link" href="/investors">Investors</a>
                <a class="nav-link" href="/networking">Networking</a>
                <a class="nav-link" href="/aboutus">About Us</a>
                <div class="dropdown">
                    <a class="nav-link" href="#dropdown">More</a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="/profile">View Profile</a>
                            <a class="dropdown-item" href="/editprofile">Edit Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                </div>  
            @endauth

            @guest
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @endguest
        </nav>
    
    <div class="py-4">
            @yield('content')
    </div>
    
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>