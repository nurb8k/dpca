@extends('layouts.layout')
@section('content')
    <section class="page-title-block">
        <img class="page-title-img" src="{{asset('images/how_we_help.png')}}" alt="">
        <h1 class="page-title">СТОИМОИСТЬ</h1>
    </section>
    <main class="container cabinet-container">
        <div class="cabinet-menu-block">

            <div class="cabinet-menu-mobile js-cabinet-menu-btn">
                <div class="cabinet-menu-mobile-x"></div>
            </div>
            <ul class="cabinet-menu js-cabinet-menu justify-content-none ">
                <li class="cabinet-menu-item mr-4 cabinet-menu-item__active">
                    <a href="#"  data-tab="tab1">Пакет "Стартовый"</a>
                </li>
                <li class="cabinet-menu-item mr-4">
                    <a href="#" data-tab="tab2">Пакет “Продвинутый”</a>
                </li>
                <li class="cabinet-menu-item mr-4">
                    <a href="#"  data-tab="tab3">Пакет "Премиум"</a>
                </li>
                <li class="cabinet-menu-item mr-4">
                    <a href="#" data-tab="tab4">Пакет “DOI”</a>
                </li>
                <li class="cabinet-menu-item mr-4">
                    <a href="#" data-tab="tab5">Индивидуальный расчет</a>
                </li>
            </ul>
        </div>

        <section class="cabinet-info cabinet-section  tab-content d-block" id="tab1">
            <h2 class="cabinet-section-title text-center text-uppercase" >Пакет "Стартовый"</h2>

            <li><span class="section-text">Размещение электронного журнала на портале DPCA</span></li>
            <li><span class="section-text">Техническая поддержка журнала</span></li>
            <li><span class="section-text">Реклама журнала на портале DPCA</span></li>
            <li><span class="section-text">Организация процесса рецензирования статей</span></li>
            <li><span class="section-text">Экспертиза сайта научного журнала</span></li>
            <li><span class="section-text">Ежегодный членский взнос за пользование издательским DOI префиксом</span></li>

        </section>
        <section class="cabinet-info cabinet-section tab-content d-none" id="tab2">
            <h2 class="cabinet-section-title text-center text-uppercase">Пакет “Продвинутый”</h2>
            <li><span class="section-text"> Размещение электронного журнала на портале DPCA</span></li>
            <li><span class="section-text">Разработка журнала на платформе OJS</span></li>
            <li><span class="section-text"> Техническая поддержка журнала</span></li>
            <li><span class="section-text">Реклама журнала на портале DPCA</span></li>
            <li><span class="section-text"> Организация процесса рецензирования статей</span></li>
            <li><span class="section-text"> Ежегодный членский взнос за пользование издательским DOI префиксом</span></li>
            <li><span class="section-text">Резервирование, обработка метаданных, активация идентификаторов DOI</span></li>
            <li><span class="section-text">Индексирование журнала в базах данных</span></li>
        </section>

        <section class="cabinet-info cabinet-section tab-content d-none" id="tab3">
            <h2 class="cabinet-section-title text-center text-uppercase">Пакет "Премиум"</h2>
            <li><span class="section-text"> Размещение электронного журнала на портале DPCA</span></li>
            <li><span class="section-text">Техническая поддержка журнала</span></li>
            <li><span class="section-text"> Реклама журнала на портале DPCA</span></li>
            <li><span class="section-text">Организация процесса рецензирования статей</span></li>
            <li><span class="section-text"> Индексирование журнала в базах данных</span></li>
            <li><span class="section-text"> Помощь в создании и размещении научных материалов</span></li>
            <li><span class="section-text"> Публикация научных статей на сайте DPCA</span></li>
            <li><span class="section-text"> Доступ к порталу DPCA на год</span></li>
            <li><span class="section-text"> Разработка дизайна и брендинга журнала</span></li>
        </section>


        <section class="cabinet-info cabinet-section tab-content d-none" id="tab4">
            <h2 class="cabinet-section-title text-center text-uppercase">Пакет "DOI"</h2>
            <p class="section-text">
                В рамках пакета DOI, мы предоставляем издательствам возможность получения уникального идентификатора цифрового объекта (DOI), который помогает в установлении авторства и поиске научных статей, отчетов и других материалов.<br><br>
                Наш пакет DOI включает казахско-русскоязычную поддержку, которая поможет вам получить качественные услуги на родном языке и решить все организационные и финансовые вопросы, связанные с получением DOI в соответствии с законодательством Республики Казахстан КОКСОН.<br><br>
                Стоимость нашего пакета DOI зависит от объема работ, необходимых для обработки метаданных и выдачи уникальных идентификаторов. Мы предоставляем гибкую ценовую политику, которая учитывает индивидуальные потребности каждого издательства.<br><br>
                Для получения более подробной информации о нашем пакете DOI и условиях его использования, а также для получения точного прайс-листа, пожалуйста, свяжитесь с нами. Мы будем рады помочь вам получить уникальный идентификатор для ваших цифровых объектов и обеспечить вас качественной поддержкой на каждом этапе работы.<br><br>

            </p>
            <button class="btn-primary">
                ЗАПРОСИТЬ РАСЧЁТ СТОИМОСТИ
            </button>
        </section>

        <section class="cabinet-info cabinet-section tab-content d-none" id="tab5">
            <h2 class="cabinet-section-title text-center text-uppercase">Индивидуальный расчет</h2>
            пусто
        </section>
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