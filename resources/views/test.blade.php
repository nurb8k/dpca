<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Модальное окно</title>

    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/var.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>

</head>
<body style="min-height: 2500px;">

<div class="modal-login-container js-modal-container" onclick="closeModal(event)">

    <!-- Reg -->
    <div class="modal-login js-modal" id="modal-reg">
        <div class="modal-login-title">Регистрация</div>
        <form action="" class="modal-login-form">

            <label class="modal-login-label-text">Название организации</label>
            <input type="text" class="ui-input modal-login-input" placeholder="Напишите название организации">

            <label class="modal-login-label-text">Контактное лицо</label>
            <input type="text" class="ui-input modal-login-input" placeholder="ФИО контактного лица">

            <label class="modal-login-label-text">Стационарный телефон</label>
            <input type="tel" class="ui-input modal-login-input js-modal-phone" placeholder="+7 (___)-___-__-__">

            <label class="modal-login-label-text">Мобильный телефон</label>
            <input type="tel" class="ui-input modal-login-input js-modal-phone" placeholder="+7 (___)-___-__-__">

            <label class="modal-login-label-text">E-mail</label>
            <input type="text" class="ui-input modal-login-input" placeholder="Напишите вашу почту">

            <label class="modal-login-label-text">Пароль</label>
            <div class="modal-login-input-block">
                <input class="ui-input modal-login-input" type="password" id="new-password" name="new-password" placeholder="Установите пароль" required>
                <div class="modal-login-input-show" onclick='togglePasswordVisibility("new-password")'></div>
            </div>

            <div class="modal-login-checkbox-block">
                <input type="checkbox" class="ui-checkbox" id="send-news">
                <label class="modal-login-label-checkbox" for="send-news">Согласен получать новостную рассылку</label>
            </div>

            <div class="modal-recaptcha">
                <img src="./google.png" alt="">
                <!-- GOOGLE RECAPTCHA -->
            </div>

            <input type="submit" class="ui-btn modal-login-btn" value="Зарегистрироваться">
        </form>
        <div class="modal-login-link">Фактом регистрации вы соглашаетеся с условиями <a href="">пользовательского соглашения</a></div>
        <div class="modal-login-link">Уже есть аккаунт? <a href="" onclick="openModal('modal-login');return false;">Войти</a></div>
    </div>

    <!-- Login -->
    <div class="modal-login js-modal" id="modal-login">
        <div class="modal-login-title">Вход в систему</div>
        <form action="" class="modal-login-form">

            <label class="modal-login-label-text">E-mail</label>
            <input type="text" class="ui-input modal-login-input" placeholder="Напишите вашу почту">

            <label class="modal-login-label-text">Пароль</label>
            <div class="modal-login-input-block">
                <input class="ui-input modal-login-input" type="password" id="new-password" name="new-password" placeholder="Установите пароль" required>
                <div class="modal-login-input-show" onclick='togglePasswordVisibility("new-password")'></div>
            </div>

            <div class="modal-login-checkbox-block">
                <input type="checkbox" class="ui-checkbox" id="remember-me">
                <label class="modal-login-label-checkbox" for="remember-me">Запомнить меня</label>
                <div class="modal-login-remember-pass" onclick="openModal('modal-send-pass');return false;">Забыли пароль?</div>
            </div>

            <div class="modal-recaptcha">
                <img src="./google.png" alt="">
                <!-- GOOGLE RECAPTCHA -->
            </div>

            <input type="submit" class="ui-btn modal-login-btn" value="Войти">
        </form>
        <div class="modal-login-link">Еще нет учетной записи? <a href="" onclick="openModal('modal-reg');return false;">Регистрация</a></div>
    </div>

    <!-- Password -->
    <div class="modal-login js-modal" id="modal-send-pass">
        <div class="modal-login-title">Восстановление пароля</div>
        <div class="modal-login-description">Введите адрес электронной почты, и мы вышлем вам инструкцию по сбросу пароля.</div>
        <form action="" class="modal-login-form">

            <label class="modal-login-label-text">E-mail</label>
            <input type="text" class="ui-input modal-login-input" placeholder="Напишите вашу почту">

            <div class="modal-recaptcha">
                <img src="./google.png" alt="">
                <!-- GOOGLE RECAPTCHA -->
            </div>

            <input type="submit" class="ui-btn modal-login-btn" value="Восстановить пароль">
        </form>
        <div class="modal-login-link">Еще нет учетной записи? <a href="" onclick="openModal('modal-reg');return false;">Регистрация</a></div>
    </div>

</div>

<main class="container">
    <div onclick="openModal('modal-reg')">Open registration</div>
    <div onclick="openModal('modal-login')">Open login</div>
    <div onclick="openModal('modal-send-pass')">Send password</div>
</main>

<script src="{{asset('js/main.js')}}"></script>
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
</body>
</html>