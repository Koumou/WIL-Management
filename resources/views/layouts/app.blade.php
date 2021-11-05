<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



    <!-- Bootstrap CSS Style -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="/css/index.css" rel="stylesheet">


</head>

<body>
    <div>

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
            <div class="container"> <a class="navbar-brand d-flex align-items-center" href="/">

                    <span class="ml-3 font-weight-bold"><b>WIL</b></apan>
                </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbar4">

                    <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                        @guest
                        <li class="nav-item px-lg-2 {{Request::is ('/') ? 'active' : ''}}">
                            <a class="nav-link" href="/"> <span class="d-inline-block d-lg-none icon-width"><i class="fa fa-home"></i></span>Home</a>
                        </li>
                        <li class="nav-item px-lg-2 {{Request::is ('faq') ? 'active' : ''}}">
                            <a class="nav-link" href="/faq"><span class="d-inline-block d-lg-none icon-width"><i class="fa fa-hashtag"></i></span>FAQ</a>
                        </li>
                        <li class="nav-item px-lg-2 {{Request::is ('about') ? 'active' : ''}}">
                            <a class="nav-link" href="/about"><span class="d-inline-block d-lg-none icon-width"><i class="fa fa-info"></i></span>About</a>
                        </li>
                        <li class="nav-item px-lg-2 {{Request::is ('contact') ? 'active' : ''}}">
                            <a class="nav-link" href="/contact"><span class="d-inline-block d-lg-none icon-width"><i class="fa fa-envelope"></i></span>Contact</a>
                        </li>
                        <li class="nav-item px-lg-2 py-1 {{Request::is ('contact') ? 'dashboard' : ''}}">
                            <a href="/login" class="btn btn-lg btn-outline-dark mx-1 btn-sm">Login</a>
                        </li>
                        <li class="nav-item px-lg-2 py-1 {{Request::is ('contact') ? 'dashboard' : ''}}">
                            <a href="/register" class="btn btn-lg btn-dark mx-1 btn-sm">Register</a>
                        </li>
                        @else
                        <li class="nav-item px-lg-2 {{Request::is ('/') ? 'active' : ''}}">
                            <a class="nav-link" href="/"> <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>Home</a>
                        </li>
                        <li class="nav-item px-lg-2 {{Request::is ('faq') ? 'active' : ''}}">
                            <a class="nav-link" href="/faq"><span class="d-inline-block d-lg-none icon-width"><i class="fa fa-hashtag"></i></span>FAQ</a>
                        </li>
                        <li class="nav-item px-lg-2 {{Request::is ('about') ? 'active' : ''}}">
                            <a class="nav-link" href="/about"><span class="d-inline-block d-lg-none icon-width"><i class="fa fa-info"></i></span>About</a>
                        </li>
                        <li class="nav-item px-lg-2 {{Request::is ('contact') ? 'active' : ''}}">
                            <a class="nav-link" href="/contact"><span class="d-inline-block d-lg-none icon-width"><i class="fa fa-envelope"></i></span>Contact</a>
                        </li>
                        <li class="nav-item px-lg-2 {{Request::is ('register') ? 'active' : ''}}">
                            <a href="/register" class="btn btn-lg btn-dark mx-1 btn-sm">{{\Illuminate\Support\Str::limit(Auth::user()->name ?? '', 8)}}</a>
                        </li>
                        <li class="nav-item px-lg-2 py-1">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="d-inline-block d-lg-none icon-width"><i class="fa fa-power-off"></i></span>
                                {{ __('Log out') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endguest

                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
                if ($(window).width() > 991) {
                    $('.navbar-light .d-menu').hover(function() {
                        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
                    }, function() {
                        $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
                    });
                }
            });
        </script>


        <!-- Footer -->
        <footer class="bg-light text-center text-lg-start ">
            <!-- Grid container -->
            <div class="container p-4">



                <section class="mb-4">
                    <p>
                        The placement of final year Diploma students in an Industry is referred to as a 'work-integrated-learning' placement. Previously, it was also referred to as 'in-service training' or 'cooperative learning' .
                        The placement of final year Diploma students in an Industry is referred to as a 'work-integrated-learning' placement. Previously, it was also referred to as 'in-service training' or 'cooperative learning' .
                    </p>
                </section>


            </div>

            <div class="text-center p-3 bg-light">
                © {{ now()->year }} Copyright:
                <a class="text-dark" href="/">WIL</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>
</body>

</html>