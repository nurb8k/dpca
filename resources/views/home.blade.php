@extends('layouts.layout')
@section('content')


<style>
    body {
        background-color: #FFF;
    }
</style>


<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="{{asset('carousel_images/1.png')}}" style="width:100%">
        <div class="text">
            <p class="text__black">поддержка</p>
            <p class="text__blue">цифровых публикации</p>
            <p class="text__black">по центральной Азии</p>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="{{asset('carousel_images/2.png')}}" style="width:100%">
        <div class="text">
            <p class="text__black">Получение</p>
            <p class="text__blue">ISSN для научных журналов</p>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="{{asset('carousel_images/3.png')}}" style="width:100%">
        <div class="text">
            <p class="text__black">Сайты на OJS для научных журналов</p>
            <p class="text__blue"> от разработки до поддержки</p>
        </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<main class="container bg-white">
    <div class="services-all-items">
        <div class="service-item">
            <div class="service-head">
                <p class="service-head-text">Как мы помогаем</p>
                <img src="{{asset('images/service_images/service1.png')}}" alt="" class="service-head-img">
            </div>
            <div class="service-end">
                <p class="service-end-text">
                    Прозрачность редакционного процесса: OJS позволяет главному редактору легко отслеживать все этапы подготовки выпуска журнала. Он может...
                </p>
                <a href="{{route('help.index')}}" class="service-end-link">Подробнее</a>
            </div>
        </div>
        <div class="service-item">
            <div class="service-head">
                <p class="service-head-text">Как мы помогаем</p>
                <img src="{{asset('images/service_images/img.png')}}" alt="" class="service-head-img">
            </div>
            <div class="service-end">
                <p class="service-end-text">
                    Прозрачность редакционного процесса: OJS позволяет главному редактору легко отслеживать все этапы подготовки выпуска журнала. Он может...
                </p>
                <a href="{{route('advantage')}}" class="service-end-link">Подробнее</a>
            </div>
        </div>
        <div class="service-item">
            <div class="service-head">
                <p class="service-head-text">Как мы помогаем</p>
                <img src="{{asset('images/service_images/img_1.png')}}" alt="" class="service-head-img">
            </div>
            <div class="service-end">
                <p class="service-end-text">
                    Прозрачность редакционного процесса: OJS позволяет главному редактору легко отслеживать все этапы подготовки выпуска журнала. Он может...
                </p>
                <a href="{{route('developing')}}" class="service-end-link">Подробнее</a>
            </div>
        </div>
        <div class="service-item">
            <div class="service-head">
                <p class="service-head-text">Как мы помогаем</p>
                <img src="{{asset('images/service_images/img_2.png')}}" alt="" class="service-head-img">
            </div>
            <div class="service-end">
                <p class="service-end-text">
                    Прозрачность редакционного процесса: OJS позволяет главному редактору легко отслеживать все этапы подготовки выпуска журнала. Он может...
                </p>
                <a href="{{route('pricing')}}" class="service-end-link">Подробнее</a>
            </div>
        </div>
    </div>
</main>

<section class="our-service">
    <div class="presentation">
        <h3 class="presentation__header-title">Презентация</h3>
        <p class="presentation__header--text">Ключевая информация о нашей платформе одним файлом. Удобно распечатать или отправить по электронной почте.</p>
        <button class="presentation__header--button">
            Скачать презентацию
        </button>
    </div>
    <div class="request">
        <img class="request__logo" src="{{asset('images/request.png')}}" alt="icon">
        <h3 class="request__title">ПОДАТЬ ЗАЯВКУ</h3>
        <p class="request__text"> на экспертизу сайта</p>
    </div>
</section>

<section class="offer-services">
    <div class="offer-services__title">
        Мы предлагаем следующие сервисы:
    </div>
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="{{asset('images/offer_services/img.png')}}" height="100" width="150" alt="" />
            </div>
            <div class="slide">
                <img src="{{asset('images/offer_services/img_1.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{asset('images/offer_services/img_2.png')}}" height="100" width="100" alt="" />
            </div>
            <div class="slide">
                <img src="{{asset('images/offer_services/img_3.png')}}" height="100" width="100" alt="" />
            </div>
            <div class="slide">
                <img src="{{asset('images/offer_services/img_4.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide">
                <img src="{{asset('images/offer_services/img_5.png')}}" height="100" width="250" alt="" />
            </div>

        </div>

    </div>
</section>

<section class="news-recommend">
    <div class="news-recommend-title text-center">Новости</div>
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




<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>

@endsection



