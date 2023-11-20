@extends('layouts.layout')
@section('content')
    <main class="container cabinet-container">
        <h1 class="cabinet-page-title">Личный кабинет</h1>

        <!-- Навигация в личном кабинете -->
        <div class="cabinet-menu-block">

            <div class="cabinet-menu-mobile js-cabinet-menu-btn">
                <div class="cabinet-menu-mobile-x"></div>
            </div>

            <ul class="cabinet-menu js-cabinet-menu">
                <li class="cabinet-menu-item cabinet-menu-item__active">
                    <a href="{{route('profile')}}" data-tab="acc_info">Общая информация</a>
                </li>
                <li class="cabinet-menu-item">
                    <a href="#" data-tab="change_pw" >Смена пароля</a>
                </li>
                <li class="cabinet-menu-item">
                    <a href="#" data-tab="order_ht">История заказов</a>
                </li>
                <li class="cabinet-menu-item">
                    <a href="#" data-tab="acc_docs">Бухгалтерские документы</a>
                </li>
                <li class="cabinet-menu-item">
                    <a href="#" data-tab="materials">Полезные материалы</a>
                </li>
                <li class="cabinet-menu-item">
                    <a href="#">Выход</a>
                </li>
            </ul>

        </div>

        <!-- Личный кабинет - Общая информация -->
        <section id="acc_info" class="cabinet-info cabinet-section">
            <h2 class="cabinet-section-title">Общая информация</h2>
            <div class="cabinet-info-block">

                <div class="cabinet-info-personal">
                    <div class='cabinet-info-title'>Ваши персональные данные</div>
                    <ul class="cabinet-info-personal-ul">
                        <li class="cabinet-info-personal-li">
                            <span>ФИО</span>
                            <span>{{Auth::user()->full_name}}</span>
                        </li>
                        <li class="cabinet-info-personal-li">
                            <span>E-mail</span>
                            <span>{{Auth::user()->email}}</span>
                        </li>
                        <li class="cabinet-info-personal-li">
                            <span>Телефон</span>
                            <span>{{Auth::user()->landline_phone}}</span>
                        </li>
                        <li class="cabinet-info-personal-li">
                            <span>Мобильный телефон</span>
                            <span>{{Auth::user()->mobile_phone}}</span>
                        </li>
                        <li class="cabinet-info-personal-li">
                            <span>Город</span>
                            <span>{{Auth::user()->city ?? 'Нет даты'}}</span>
                        </li>
                        <li class="cabinet-info-personal-li">
                            <span>Организация</span>
                            <span>{{Auth::user()->org_name}}</span>
                        </li>
                    </ul>
                </div>

                <div class="cabinet-personal-manager">
                    <div class="cabinet-info-title">Ваш персональный менеджер</div>
                    <div class="cabinet-personal-manager-block">
                        <img src="{{asset('images/logos/manager.png')}}" alt="Фото менеджера" class='cabinet-personal-manager-img'>
                        <div class="cabinet-personal-manager-info">
                            <div class="cabinet-personal-manager-info-item">
                                <span>ФИО</span>
                                <span>Самат Неписбаев</span>
                            </div>
                            <div class="cabinet-personal-manager-info-item">
                                <span>E-mail</span>
                                <span>ceoqala@gmail.com</span>
                            </div>
                            <div class="cabinet-personal-manager-info-item">
                                <span>Телефон</span>
                                <span>+7 727 323 1 300</span>
                            </div>
                            <a href="tel:+77273231300" class="ui-btn cabinet-personal-manager-contact">Связаться</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="change_pw" class="cabinet-info cabinet-section">
            <h2 class="cabinet-section-title">Смена парола</h2>
            <form action="change-password-form" class='change-password-form'>
                <label for="current-password">Пароль</label>
                <div class="change-password-input">
                    <input class="ui-input" type="password" id="current-password" name="current-password" required>
                    <div class="change-password-show" onclick='togglePasswordVisibility("current-password")'></div>
                </div>

                <label for="new-password">Новый пароль</label>
                <div class="change-password-input">
                    <input class="ui-input" type="password" id="new-password" name="new-password" required>
                    <div class="change-password-show" onclick='togglePasswordVisibility("new-password")'></div>
                </div>

                <label for="confirm-password">Подтвердить пароль</label>
                <div class="change-password-input">
                    <input class="ui-input" type="password" id="confirm-password" name="confirm-password" required>
                    <div class="change-password-show" onclick='togglePasswordVisibility("confirm-password")'></div>
                </div>

                <input type="submit" value="Изменить пароль" class='ui-btn change-password-submit'>
            </form></section>
        <section id="order_ht" class="cabinet-info cabinet-section"> </section>
        <section id="acc_docs" class="cabinet-info cabinet-section"> </section>
        <section id="materials" class="cabinet-info cabinet-section"> </section>

    </main>
    <script>
        const tabs = document.querySelectorAll(".cabinet-menu-item a");
        const tabContents = document.querySelectorAll(".tab-content");

        tabs.forEach(tab => {
            tab.addEventListener("click", e => {
                e.preventDefault();

                tabs.forEach(t => t.parentElement.classList.remove("cabinet-menu-item__active"));
                tab.parentElement.classList.add("cabinet-menu-item__active");

                const targetTab = tab.getAttribute("data-tab");

                tabContents.forEach(content => {
                    if (content.id === targetTab) {
                        content.classList.remove("d-none");

                        content.classList.add("d-block");
                    } else {
                        content.classList.remove("d-block");
                        content.classList.add("d-none");
                    }
                });
            });
        });
    </script>
@endsection