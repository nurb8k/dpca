<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- CSS files -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/var.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <!-- start navbar -->
    <nav class="navbar">
        <div class="navbar__head">
            <a href="{{url('/')}}" class="navbar__head--logo">
                <img src="{{asset('images/logo.png')}}" alt="dpca logo">
            </a>
            <div class="navbar__head--links">
                <a class="navbar__head--link" href="#">Заявки DOI</a>
                <a class="navbar__head--link" href="#">Ресурсы</a>
                <a class="navbar__head--link" href="#">Новости</a>
                <a class="navbar__head--link" href="#">Научные журналы</a>
                <a class="navbar__head--link" href="#">Контакты</a>
            </div>
            <div class="navbar__head--contact">
                <div class="navbar__head--contact--phone">
                    <img class="navbar__head--contact--icon" src="{{asset('images/tel.png')}}" alt="phone">
                    <a class="navbar__head--contact--text" href="tel:+77273231300"> Связаться с нами </a>
                </div>
            </div>
        </div>
        <div class="navbar__end">
            <div class="navbar__end--languages">
                <a href="#">KZ</a>
                <a href="#">RU</a>
                <a href="#">EN</a>
            </div>
            <div class="navbar__end--links">
                <div class="navbar__end--vl"></div>
                <a href="{{route('help.index')}}" class="navbar__end--link">Как мы помогаем</a>
                <div class="navbar__end--vl"></div>
                <a href="{{route('advantage')}}" class="navbar__end--link">Преимущество</a>
                <div class="navbar__end--vl"></div>
                <a href="{{route('developing')}}" class="navbar__end--link">Разработка под ключ</a>
                <div class="navbar__end--vl"></div>
                <a href="{{route('pricing')}}" class="navbar__end--link">Стоимость</a>

                <div class="navbar__end--search">
                    <form class="search--form" action="#">
                        <input type="text" class="search--input" placeholder="Поиск по всем журналам.." name="search">
                        <button class="search--button" type="submit">
                            <img class="search--icon" src="{{asset('images/search_icon.png')}}" alt="">
                        </button>
                    </form>
                </div>

                <a href="#" class="navbar__end--link">Регистрация</a>
                <div class="navbar__end--login">
                    <img class="navbar__end--login--logo" src="{{asset('images/img.png')}}" alt="login">
                    <a href="#" class="navbar__end--link">Вход</a>
                </div>

            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <main>
        @yield('content')
    </main>
    {{-- start footer  --}}
        <footer>
            <div class="footer__head">
                <img class="footer__head--logo footer__element" src="{{asset('images/logo.png')}}" alt="dpca logo">
                <ul class="footer__head--links footer__element">
                   <li> <a class="footer__head--link" href="#">Главная</a> </li>
                   <li> <a class="footer__head--link" href="#">Как мы помогаем</a> </li>
                   <li> <a class="footer__head--link" href="#">Преимущества</a> </li>
                   <li> <a class="footer__head--link" href="#">Разработка под ключ</a> </li>
                   <li> <a class="footer__head--link" href="#">Стоимость</a> </li>
                   <li> <a class="footer__head--link" href="#">Заявка DOI</a> </li>
                </ul>
                <div class="footer__head--contact footer__element">
                    <div class="footer__head--contact--phone">
                        <img class="footer__head--contact--icon" src="{{asset('images/tel.png')}}" alt="phone">
                        <div class="footer__head--contacts">
                            <p>+7 727 323 1 300</p>
                            <br>
                            <p>+7 727 323 1 333</p>
                        </div>
                    </div>
                    <div class="footer__head--contact--email">
                        <img class="footer__head--email--icon" src="{{asset('images/email_logo.png')}}" alt="phone">
                        <div class="footer__head--contacts">
                            <p>info@dpca.kz</p>
                            <br>
                            <p>help@dpca.kz</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__end">
                <p>Все права защищены {{\Carbon\Carbon::now()->format("Y")}}</p>
            </div>
        </footer>
    {{-- end footer --}}
    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>