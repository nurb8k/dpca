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
        <img src="{{ asset('carousel_images/1.png')}}" style="width:100%; height: 600px">
        @if(app()->currentLocale() == 'ru')
            <div class="text">
                <p class="text__black">поддержка</p>
                <p class="text__blue">цифровых публикаций</p>
                <p class="text__black">по центральной Азии</p>
            </div>
        @elseif(app()->currentLocale() == 'kz')
            <div class="text">
                <p class="text__black">ЦИФРЛЫ БАСЫЛЫМДАРДЫ</p>
                <p class="text__blue">ОРТА АЗИЯ БОЙЫНША ҚОЛДАУ</p>
            </div>
        @elseif(app()->currentLocale() == 'en')
            <div class="text">
                <p class="text__black">DIGITAL PUBLICATIONS ON </p>
                <p class="text__blue">CENTRAL ASIA</p>
            </div>
        @endif
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="{{asset('carousel_images/2.png')}}" style="width:100%; height: 600px">
        @if(app()->currentLocale() == 'ru')
            <div class="text">
                <p class="text__black">Получение</p>
                <p class="text__blue">ISSN для научных журналов</p>
            </div>
        @elseif(app()->currentLocale() == 'kz')
            <div class="text">
                <p class="text__black">ISSN</p>
                <p class="text__blue"> ҒЫЛЫМИ ЖУРНАЛДАРҒА</p>
            </div>
        @elseif(app()->currentLocale() == 'en')
            <div class="text">
                <p class="text__black">SUBMISSION ISSN </p>
                <p class="text__blue">FOR SCIENTIFIC JOURNALS</p>
            </div>
        @endif
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="{{asset('carousel_images/3.png')}}" style="width:100%; height: 600px">
        @if(app()->currentLocale() == 'ru')
            <div class="text">
                <p class="text__black">Сайты на OJS для научных журналов</p>
                <p class="text__blue"> от разработки до поддержки</p>
            </div>
        @elseif(app()->currentLocale() == 'kz')
            <div class="text">
                <p class="text__black">ҒЫЛЫМИ ЖУРНАЛДАРҒА АРНАЛҒАН </p>
                <p class="text__blue">OJS САЙТТАРЫН
                    ДАМЫТУ ЖӘНЕ  ҚОЛДАУ</p>
            </div>
        @elseif(app()->currentLocale() == 'en')
            <div class="text">
                <p class="text__black">OJS FOR SCIENTIFIC JOURNALS</p>
                <p class="text__blue">FROM DEVELOPMENT TO MAINTENANCE</p>
            </div>
        @endif

    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<main class="container bg-white">
    <div class="services-all-items">
        <div class="service-item">
            <div class="service-head">
                <p class="service-head-text">{{__('HOW_WE_HELP')}}</p>
                <img src="{{asset('images/service_images/service1.png')}}" alt="" class="service-head-img">
            </div>
            <div class="service-end">
                <p class="service-end-text">
                    {{__('hwh.desc')}}
                </p>
                <a href="{{route('help.index')}}" class="service-end-link">{{__('more')}}</a>
            </div>
        </div>
        <div class="service-item">
            <div class="service-head">
                <p class="service-head-text">{{__('BENEFIT')}}</p>
                <img src="{{asset('images/service_images/img.png')}}" alt="" class="service-head-img">
            </div>
            <div class="service-end">
                <p class="service-end-text">
                    {{__('ben.desc')}}
                </p>
                <a href="{{route('advantage')}}" class="service-end-link">{{__('more')}}</a>
            </div>
        </div>
        <div class="service-item">
            <div class="service-head">
                <p class="service-head-text">{{__('TURNKEY_DEVELOPMENT')}}</p>
                <img src="{{asset('images/service_images/img_1.png')}}" alt="" class="service-head-img">
            </div>
            <div class="service-end">
                <p class="service-end-text">
                    {{__('turnkey.desc')}}
                </p>
                <a href="{{route('developing')}}" class="service-end-link">{{__('more')}}</a>
            </div>
        </div>
        <div class="service-item">
            <div class="service-head">
                <p class="service-head-text">{{__('COST')}}</p>
                <img src="{{asset('images/service_images/img_2.png')}}" alt="" class="service-head-img">
            </div>
            <div class="service-end">
                <p class="service-end-text">
                    {{__('cost.desc')}}
                </p>
                <a href="{{route('pricing')}}" class="service-end-link">{{__('more')}}</a>
            </div>
        </div>
    </div>
</main>

<section class="our-service">
    <div class="presentation">
        <h3 class="presentation__header-title">{{__('presentation')}}</h3>
        <p class="presentation__header--text">{{__('presentation.desc')}}</p>
        <form action="{{asset('files/DPCA presentation.pdf')}}" target="_blank">
            <button type="submit" class="presentation__header--button">
                {{__('presentation.download')}}
            </button>
        </form>
    </div>
    <a href="{{route('contacts')}}" class="request">
        <img class="request__logo" src="{{asset('images/request.png')}}" alt="icon">
        <h3 class="request__title">{{__('apply')}}</h3>
        <p class="request__text">{{__('apply.text')}}</p>
    </a>
</section>

<section class="offer-services">
    <div class="offer-services__title">
{{__('services')}}
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
    <div class="news-recommend-title text-center">{{__('NEWS')}}</div>
    <div class="news-recommend-items">

        <div class="news-recommend-item">
            <img src="{{ asset('images/news_details_images/rec2.png')}}" alt="" class="news-recommend-item-img">
            <div class="news-recommend-item-date">4 Декабря 2022</div>
            <a href="#" class="news-recommend-item-title">DOI становится стандартом для научных журналов в Республике Казахстан: какие преимущества это дает</a>
        </div>
        <div class="news-recommend-item">
            <img src="{{ asset('images/news_details_images/rec3.png')}}" alt="" class="news-recommend-item-img">
            <div class="news-recommend-item-date">8 Декабря 2022</div>
            <a href="#" class="news-recommend-item-title">OJS становится все более популярным среди научных журналов в Центральной Азии</a>
        </div>
        <div class="news-recommend-item">
            <img src="{{ asset('images/news_details_images/rec4.png')}}" alt="" class="news-recommend-item-img">
            <div class="news-recommend-item-date">9 Декабря 2022</div>
            <a href="#" class="news-recommend-item-title">Оценка цитируемости научных журналов: новые индексы и методы расчета</a>
        </div>

    </div>
    <a href="#" class="news-recommend-btn">Все новости
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



