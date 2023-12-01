@extends('layouts.layout')
@section('content')
    <section class="page-title-block">
        <img class="page-title-img" src="{{url('public/images/news_images/title.png')}}" alt="">
        <h1 class="page-title">Все новости</h1>
    </section>

    <main class="container">

        <section class="news-all">
            <div class="news-all-items">
                <div class="news-all-item">
                    <img src="{{url('public/images/news_images/news1.png')}}" alt="" class="news-all-item-img">
                    <div class="news-all-item-info">
                        <div class="news-all-item-date">11 Декабря 2022</div>
                        <a href="{{route('news-detail')}}" class="news-all-item-name">Crossref усиливает контроль за качеством метаданных для научных изданий: что это означает для издателей в Центральной Азии</a>
                    </div>
                </div>
                <div class="news-all-item">
                    <img src="{{url('public/images/news_images/news2.png')}}" alt="" class="news-all-item-img">
                    <div class="news-all-item-info">
                        <div class="news-all-item-date">4 Декабря 2022</div>
                        <a href="{{route('news-detail')}}" class="news-all-item-name">DOI становится стандартом для научных журналов в Республике Казахстан: какие преимущества это дает</a>
                    </div>
                </div>
                <div class="news-all-item">
                    <img src="{{url('public/images/news_images/news3.png')}}" alt="" class="news-all-item-img">
                    <div class="news-all-item-info">
                        <div class="news-all-item-date">8 Декабря 2022</div>
                        <a href="{{route('news-detail')}}" class="news-all-item-name">OJS становится все более популярным среди научных журналов в Центральной Азии</a>
                    </div>
                </div>
                <div class="news-all-item">
                    <img src="{{url('public/images/news_images/news4.png')}}" alt="" class="news-all-item-img">
                    <div class="news-all-item-info">
                        <div class="news-all-item-date">11 Декабря 2022</div>
                        <a href="{{route('news-detail')}}" class="news-all-item-name">Оценка цитируемости научных журналов: новые индексы и методы расчета</a>
                    </div>
                </div>
                <div class="news-all-item">
                    <img src="{{url('public/images/news_images/news5.png')}}" alt="" class="news-all-item-img">
                    <div class="news-all-item-info">
                        <div class="news-all-item-date">11 Декабря 2022</div>
                        <a href="{{route('news-detail')}}" class="news-all-item-name">Crossref усиливает контроль за качеством метаданных для научных изданий: что это означает для издателей в Центральной Азии</a>
                    </div>
                </div>
                <div class="news-all-item">
                    <img src="{{url('public/images/news_images/news6.png')}}" alt="" class="news-all-item-img">
                    <div class="news-all-item-info">
                        <div class="news-all-item-date">4 Декабря 2022</div>
                        <a href="{{route('news-detail')}}" class="news-all-item-name">DOI становится стандартом для научных журналов в Республике Казахстан: какие преимущества это дает</a>
                    </div>
                </div>
                <div class="news-all-item">
                    <img src="{{url('public/images/news_images/news7.png')}}" alt="" class="news-all-item-img">
                    <div class="news-all-item-info">
                        <div class="news-all-item-date">8 Декабря 2022</div>
                        <a href="{{route('news-detail')}}" class="news-all-item-name">OJS становится все более популярным среди научных журналов в Центральной Азии</a>
                    </div>
                </div>
            </div>
            <div class="news-all-pagination">
                <a href="{{route('news-detail')}}" class="news-all-pag-item">1</a>
                <a href="{{route('news-detail')}}" class="news-all-pag-item news-all-pag-item__active">2</a>
                <a href="{{route('news-detail')}}" class="news-all-pag-item news-all-pag-item__next"></a>
            </div>

        </section>

        <section class="news-all-subscribe">
            <form action="" class="news-all-sub-form">
                <div class="news-all-sub-title">Будьте в курсе новых событий</div>
                <div class="news-all-sub-desc">
                    <img src="{{url('public/images/news_images/mail.png')}}" alt="mail">
                    <span>Получайте свежие новости первыми, подписавшись на нашу рассылку</span>
                </div>
                <input type="text" placeholder="Напишите вашу почту" class="ui-input news-all-sub-input">
                <input type="submit" name="" id="" class="ui-btn news-all-sub-btn">
            </form>
        </section>
    </main>

@endsection