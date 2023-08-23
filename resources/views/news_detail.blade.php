@extends('layouts.layout')
@section('content')

    <section class="page-title-block">
        <img class="page-title-img" src="{{asset('images/news_details_images/title.png')}}" alt="">
        <h1 class="page-title">Новости</h1>
    </section>
    <main class="container news-container">

        <section class="news-detail">
            <div class="news-detail-title">OJS становится все более популярным среди научных журналов в Центральной Азии </div>
            <div class="news-detail-links">
                <a class="news-detail-link">
                    <img src="{{asset('images/news_details_images/facebook.png')}}" alt="">
                </a>
                <a class="news-detail-link">
                    <img src="{{asset('images/news_details_images/telegram.png')}}" alt="">
                </a>
                <a class="news-detail-link">
                    <img src="{{asset('images/news_details_images/whatsapp.png')}}" alt="">
                </a>
                <a class="news-detail-link">
                    <img src="{{asset('images/news_details_images/twitter.png')}}" alt="">
                </a>
            </div>
            <div class="news-detail-block">
                <img src="{{asset('images/news_details_images/news-detail')}}-img.png" alt="" class="news-detail-img">
                <p>Открытая система журнального издания (Open Journal Systems, OJS) становится все более популярным выбором для научных журналов в Центральной Азии. OJS представляет собой бесплатную, открытую платформу для управления журнальными изданиями в Интернете. Эта система обеспечивает полный контроль над процессом публикации, от подачи статьи до ее публикации, и позволяет автоматизировать многие задачи, такие как архивирование статей, сбор метаданных и управление публикационным процессом.</p>
                <br>
                <p>Многие научные журналы в Центральной Азии уже перешли на использование OJS, благодаря простоте использования и широкому спектру возможностей, которые она предоставляет. Это позволяет издателям сосредоточиться на качестве исследований и улучшении журнала, в то время как система OJS заботится о технических и организационных аспектах.</p>
                <br>
                <p>Таким образом, использование OJS для управления научными журналами в Центральной Азии продолжает расти в популярности, благодаря ее гибкости, удобству использования и эффективности.</p>
            </div>
        </section>

        <section class="news-detail-comment">
            <form action="">
                <div class="news-detail-comment-title">Ваш комментарий</div>
                <textarea name="" placeholder="Написать комментарий ..." class="ui-textarea news-detail-comment-textarea"></textarea>
                <input type="submit" name="" class="ui-btn news-detail-comment-btn">
            </form>
        </section>

        <section class="news-recommend">
            <div class="news-recommend-title">Вам может быть интересно</div>
            <div class="news-recommend-items">

                <div class="news-recommend-item">
                    <img src="{{asset('images/news_details_images/rec1.png')}}" alt="" class="news-recommend-item-img">
                    <div class="news-recommend-item-date">11 Декабря 2022</div>
                    <a href="" class="news-recommend-item-title">Crossref усиливает контроль за качеством метаданных для научных изданий: что это означает для издателей в Центральной Азии</a>
                </div>
                <div class="news-recommend-item">
                    <img src="{{asset('images/news_details_images/rec2.png')}}" alt="" class="news-recommend-item-img">
                    <div class="news-recommend-item-date">4 Декабря 2022</div>
                    <a href="" class="news-recommend-item-title">DOI становится стандартом для научных журналов в Республике Казахстан: какие преимущества это дает</a>
                </div>
                <div class="news-recommend-item">
                    <img src="{{asset('images/news_details_images/rec3.png')}}" alt="" class="news-recommend-item-img">
                    <div class="news-recommend-item-date">8 Декабря 2022</div>
                    <a href="" class="news-recommend-item-title">OJS становится все более популярным среди научных журналов в Центральной Азии</a>
                </div>
                <div class="news-recommend-item">
                    <img src="{{asset('images/news_details_images/rec4.png')}}" alt="" class="news-recommend-item-img">
                    <div class="news-recommend-item-date">9 Декабря 2022</div>
                    <a href="" class="news-recommend-item-title">Оценка цитируемости научных журналов: новые индексы и методы расчета</a>
                </div>

            </div>
            <a href="{{route('news')}}" class="news-recommend-btn">Все новости
                <svg class="news-recommend-arrow" viewBox="0 0 22 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 1L11 11L1 1" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </section>

    </main>
@endsection