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
                    <a href="{{route('profile')}}">Общая информация</a>
                </li>
                <li class="cabinet-menu-item">
                    <a href="">Смена пароля</a>
                </li>
                <li class="cabinet-menu-item">
                    <a href="">История заказов</a>
                </li>
                <li class="cabinet-menu-item">
                    <a href="">Бухгалтерские документы</a>
                </li>
                <li class="cabinet-menu-item">
                    <a href="../cabinet-materials/ojs.html">Полезные материалы</a>
                </li>
                <li class="cabinet-menu-item">
                    <a href="">Выход</a>
                </li>
            </ul>

        </div>

        <!-- Личный кабинет - Общая информация -->
        <section class="cabinet-info cabinet-section">
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
    </main>

@endsection