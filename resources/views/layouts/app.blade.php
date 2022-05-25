<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        body{
            font-family: 'Comfortaa'
        }
    </style>
</head>
<header>
    <div class='container py-3'>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">Maisonneuve 2195171</span>
        </a>
        @php $locale = session()->get('locale'); @endphp
        <nav class="navbar navbar-light navbar-expand-lg d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <div class="container">          
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none" href="{{ route('login')}}">{{ trans('lang.text_login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none" href="{{ route('registration')}}">{{ trans('lang.text_registration') }}</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none" href="{{ route('forum')}}">{{ trans('lang.text_forum') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none" href="{{ route('directory')}}">{{ trans('lang.text_directory') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none" href="{{ route('student')}}">{{ trans('lang.text_student') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none" href="{{ route('logout')}}">{{ trans('lang.text_logout') }}</a>
                        </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link me-3 py-2 text-dark text-decoration-none @if($locale=='en')bg-secondary text-light @endif" href="{{route('lang', 'en')}}"><img src="{{ asset('img/flag/en.png')}}" alt="English"> English</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  me-3 py-2 text-dark text-decoration-none @if($locale=='fr') bg-secondary text-light @endif" href="{{route('lang', 'fr')}}"><img src="{{ asset('img/flag/fr.png')}}" alt="Français"> Français</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<body>
    <div class='container py-3'>
        @yield('content')
    </div>
</body>
<footer class="py-3 my-4">
    <div class='container py-3'>
        <div class='border-bottom pb-3 mb-3'></div>
        <p class="text-center text-muted">© 2022 Maisonneuve 2195171, Inc</p>
    </div>
</footer>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>