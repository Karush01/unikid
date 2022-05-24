<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="{{ asset('/assets/front/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/front/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/front/css/media.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <header id="header">
        <div class="wrp">
            <a href="/" class="header-logo">
                <img src="{{ asset('/assets/front/') }}/img/logo.svg" alt="logo">
                Unikid
            </a>
            <input id="menu__toggle" type="radio"/>
            <label class="menu__btn" for="menu__toggle">
                <div>
                    <span></span>
                </div>
            </label>
            <ul class="header-menu">
                <li><a href="#">Преподаватели</a></li>
                <li><a href="#">Стоимость</a></li>
                <li><a href="#">Программа курса</a></li>
                <li><a href="#">Новости</a></li>
            </ul>
            <div class="header-in">
                <a href="{{ URL::route('login') }}" class="header-in__entry">Войти</a>
                <a href="{{ URL::route('register') }}" class="header-in__reg">Регистрация</a>
            </div>
        </div>
    </header>

    @yield('content')

    <footer id="footer">
        <div class="wrp">
            <a href="#">Пользовательское соглашение</a>
            <a href="#">Политика конфиденциальности</a>
            <a href="#">Политика использования файлов cookie</a>
            <p>© Uni-kid.ru</p>
        </div>
    </footer>
    <script src="{{ asset('/assets/front/js/main.js') }}"></script>
</div>
</body>
</html>
