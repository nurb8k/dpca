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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>

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
            <a class="navbar__head--link" href="{{route('news')}}">Новости</a>
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
            @guest
                <a href="#" onclick="openModal('modal-reg')" class="navbar__end--link">Регистрация</a>
                <div class="navbar__end--login">
                    <img class="navbar__end--login--logo" src="{{asset('images/img.png')}}" alt="login">
                    <a href="#" onclick="openModal('modal-login')" class="navbar__end--link">Вход</a>
                </div>
            @endguest
            @auth
                <div class="navbar__end--account">
                    <img class="navbar__end--account-logo" src="{{asset('images/logos/user.png')}}" alt="user">
                    <a href="{{route('profile')}}"  class="navbar__end--link">Аккаунт</a>
                </div>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="navbar__end--logout">
                        <button type="submit" style="background: none;border: none;cursor: pointer" class="navbar__end--link">Выход</button>
                        <img class="navbar__end--logout--logo" src="{{asset('images/logos/logout.png')}}" alt="logout">
                    </div>
                </form>
            @endauth

        </div>
    </div>
</nav>
<!-- end navbar -->
<main>
    @yield('content')
</main>
<div class="modal-login-container js-modal-container" onclick="closeModal(event)">
    {{-- register modal  --}}
    <div class="modal-login js-modal" id="modal-reg">
        <div class="modal-login-title">Регистрация</div>
        <form action="{{route('register')}}" class="modal-login-form" method="post">
            @csrf
            <label class="modal-login-label-text">Название организации</label>
            <input type="text" name="org_name" class="ui-input modal-login-input" placeholder="Напишите название организации">

            <label class="modal-login-label-text">Контактное лицо</label>
            <input name="full_name" type="text" class="ui-input modal-login-input" placeholder="ФИО контактного лица">

            <label class="modal-login-label-text">Стационарный телефон</label>
            <input name="landline_phone" type="tel" class="ui-input modal-login-input js-modal-phone" placeholder="+7 (___)-___-__-__">

            <label class="modal-login-label-text">Мобильный телефон</label>
            <input type="tel" name="mobile_phone" class="ui-input modal-login-input js-modal-phone" placeholder="+7 (___)-___-__-__">

            <label class="modal-login-label-text">E-mail</label>
            <input name="email" type="text" class="ui-input modal-login-input" placeholder="Напишите вашу почту">

            <label class="modal-login-label-text">Пароль</label>
            <div class="modal-login-input-block">
                <input name="password" class="ui-input modal-login-input" type="password" id="new-password"  placeholder="Установите пароль" required>
                <div class="modal-login-input-show" onclick='togglePasswordVisibility("new-password")'></div>
            </div>

            <div class="modal-login-checkbox-block">
                <input name="mailing_list" type="checkbox" class="ui-checkbox" id="send-news">
                <label class="modal-login-label-checkbox" for="send-news">Согласен получать новостную рассылку</label>
            </div>

            <div class="modal-recaptcha">
                GOOGLE RECAPTCHA
            </div>

            <input type="submit" class="ui-btn modal-login-btn" value="Зарегистрироваться">
        </form>
        <div class="modal-login-link">Фактом регистрации вы соглашаетеся с условиями <a href="">пользовательского соглашения</a></div>
        <div class="modal-login-link">Уже есть аккаунт? <a href="" onclick="openModal('modal-login');return false;">Войти</a></div>
    </div>

    {{--  login modal  --}}
    <div class="modal-login js-modal" id="modal-login">
        <div class="modal-login-title">Вход в систему</div>
        <form action="{{route('login')}}" method="post" class="modal-login-form">
            @csrf
            <label class="modal-login-label-text">E-mail</label>
            <input name="email" type="text" class="ui-input modal-login-input" placeholder="Напишите вашу почту">

            <label class="modal-login-label-text">Пароль</label>
            <div class="modal-login-input-block">
                <input class="ui-input modal-login-input" type="password" id="new-password" name="password" placeholder="Пароль" required>
                <div class="modal-login-input-show" onclick='togglePasswordVisibility("new-password")'></div>
            </div>

            <div class="modal-login-checkbox-block">
                <input type="checkbox" class="ui-checkbox" id="remember-me">
                <label class="modal-login-label-checkbox" for="remember-me">Запомнить меня</label>
                <div class="modal-login-remember-pass" onclick="openModal('modal-send-pass');return false;">Забыли пароль?</div>
            </div>

            <div class="modal-recaptcha">
                google captcha
            </div>

            <input type="submit" class="ui-btn modal-login-btn" value="Войти">
        </form>
        <div class="modal-login-link">Еще нет учетной записи? <a href="" onclick="openModal('modal-reg');return false;">Регистрация</a></div>
    </div>

    {{--  password  --}}
    <div class="modal-login js-modal" id="modal-send-pass">
        <div class="modal-login-title">Восстановление пароля</div>
        <div class="modal-login-description">Введите адрес электронной почты, и мы вышлем вам инструкцию по сбросу пароля.</div>
        <form action="" class="modal-login-form">

            <label class="modal-login-label-text">E-mail</label>
            <input type="text" class="ui-input modal-login-input" placeholder="Напишите вашу почту">

            <div class="modal-recaptcha">
                <!-- GOOGLE RECAPTCHA -->
            </div>

            <input type="submit" class="ui-btn modal-login-btn" value="Восстановить пароль">
        </form>
        <div class="modal-login-link">Еще нет учетной записи? <a href="" onclick="openModal('modal-reg');return false;">Регистрация</a></div>
    </div>
</div>

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
<script>
    // telephone placeholder
    $(document).ready(function($){
        $('.js-modal-phone').mask('+7 (999)-999-99-99', {placeholder:'+7 (___)-___-__-__'});
    });

    // open modal
    function openModal( target )
    {
        window.scrollTo(0, 0);

        let modalContainer = document.querySelector('.js-modal-container');
        if( !modalContainer.classList.contains('modal-login-container__active') )
        {
            modalContainer.classList.add('modal-login-container__active')
        }

        let modals = document.querySelectorAll('.js-modal');
        modals.forEach(function(modal)
        {
            modal.classList.remove('modal-login__active');
        });

        let modal = document.getElementById(target);
        modal.classList.add('modal-login__active')
    }

    function closeModal(event) {
        if( event.target.classList.contains('modal-login-container__active') )
        {
            document.querySelector('.js-modal-container').classList.remove('modal-login-container__active')

            document.querySelectorAll('.js-modal').forEach(function(modal)
            {
                modal.classList.remove('modal-login__active');
            });
        }
    }

</script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>