@extends('layouts.layout')
@section('content')
    <section class="page-title-block">
        <img class="page-title-img" src="{{asset('images/news_images/title.png')}}" alt="">
        <h1 class="page-title">Все новости</h1>
    </section>
    <main class="container">

        <section class="news-all">
            <div class="news-all-items">
                @foreach($news as $n)
                    <div class="news-all-item">
                        <img src="{{asset($n->image)}}" alt="" class="news-all-item-img">
                        <div class="news-all-item-info">
                            <div class="news-all-item-date">{{$n->created_at->format('d M Y')}}</div>
                            <a href="{{route('news.show', $n->slug)}}" class="news-all-item-name">{{$n->title}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="news-all-pagination">
                <a href="{{route('news-detail')}}" class="news-all-pag-item news-all-pag-item__active">1</a>
                <a href="{{route('news-detail')}}" class="news-all-pag-item">2</a>
                <a href="{{route('news-detail')}}" class="news-all-pag-item news-all-pag-item__next"></a>
            </div>
        </section>

        <section class="news-all-subscribe">
            <form action="" class="news-all-sub-form">
                <div class="news-all-sub-title">Будьте в курсе новых событий</div>
                <div class="news-all-sub-desc">
                    <img src="{{asset('images/news_images/mail.png')}}" alt="mail">
                    <span>Получайте свежие новости первыми, подписавшись на нашу рассылку</span>
                </div>
                <input type="text" placeholder="Напишите вашу почту" class="ui-input news-all-sub-input">
                <input type="submit" name="" id="" class="ui-btn news-all-sub-btn">
            </form>
        </section>
    </main>


@endsection