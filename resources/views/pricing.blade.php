@extends('layouts.layout')
@section('content')
    <section class="page-title-block">
        <img class="page-title-img" src="{{asset('images/how_we_help.png')}}" alt="">
        <h1 class="page-title">{{__('COST')}}</h1>
    </section>
    @if(app()->currentLocale() == 'en')
        <main class="container cabinet-container">
            <div class="cabinet-menu-block">

                <div class="cabinet-menu-mobile js-cabinet-menu-btn">
                    <div class="cabinet-menu-mobile-x"></div>
                </div>
                <ul class="cabinet-menu js-cabinet-menu justify-content-none ">
                    <li class="cabinet-menu-item mr-4 cabinet-menu-item__active">
                        <a href="#" data-tab="tab1">Starter Package</a>
                    </li>
                    <li class="cabinet-menu-item mr-4">
                        <a href="#" data-tab="tab2">Advanced Package</a>
                    </li>
                    <li class="cabinet-menu-item mr-4">
                        <a href="#"  data-tab="tab3">Premium Package</a>
                    </li>
                    <li class="cabinet-menu-item mr-4">
                        <a href="#" data-tab="tab4">DOI package</a>
                    </li>
                    <li class="cabinet-menu-item mr-4">
                        <a href="#" data-tab="tab5">Individual calculation</a>
                    </li>
                </ul>
            </div>

            <section class="cabinet-info cabinet-section  tab-content d-block" id="tab1">
                <h2 class="cabinet-section-title text-center text-uppercase" >Starter Package</h2>

                <li><span class="section-text">Posting the electronic journal on the DPCA portal</span></li>
                <li><span class="section-text">Technical support for the magazine</span></li>
                <li><span class="section-text">Advertising of the magazine on the DPCA portal</span></li>
                <li><span class="section-text">Organization of the article review process</span></li>
                <li><span class="section-text">Examination of the website of a scientific journal</span></li>
                <li><span class="section-text">Annual membership fee for the use of the publisher's DOI prefix</span></li>

            </section>
            <section class="cabinet-info cabinet-section tab-content d-none" id="tab2">
                <h2 class="cabinet-section-title text-center text-uppercase">Advanced Package</h2>
                <li><span class="section-text">Posting the electronic journal on the DPCA portal</span></li>
                <li><span class="section-text">Journal development on the OJS platform</span></li>
                <li><span class="section-text">Technical support for the magazine</span></li>
                <li><span class="section-text">Advertising of the magazine on the DPCA portal</span></li>
                <li><span class="section-text">Organization of the article review process</span></li>
                <li><span class="section-text">Annual membership fee for the use of the publisher's DOI prefix</span></li>
                <li><span class="section-text">Backup, metadata processing, activation of DOI identifiers</span></li>
                <li><span class="section-text">Journal indexing in databases</span></li>
            </section>

            <section class="cabinet-info cabinet-section tab-content d-none" id="tab3">
                <h2 class="cabinet-section-title text-center text-uppercase">Premium Package</h2>
                <li><span class="section-text">Posting the electronic journal on the DPCA portal</span></li>
                <li><span class="section-text">Technical support for the magazine</span></li>
                <li><span class="section-text">Advertising of the magazine on the DPCA portal</span></li>
                <li><span class="section-text">Organization of the article review process</span></li>
                <li><span class="section-text">Journal indexing in databases</span></li>
                <li><span class="section-text">Assistance in creating and posting scientific materials</span></li>
                <li><span class="section-text">Publication of scientific articles on the DPCA website</span></li>
                <li><span class="section-text">Access to the DPCA portal for one year</span></li>
                <li><span class="section-text">Magazine design and branding</span></li>
            </section>


            <section class="cabinet-info cabinet-section tab-content d-none" id="tab4">
                <h2 class="cabinet-section-title text-center text-uppercase">DOI package</h2>
                <p class="section-text">As part of the DOI package, we provide publishers with the opportunity to obtain a unique digital object identifier (DOI), which helps in establishing authorship and searching for scientific articles, reports and other materials.<br><br>
                    Our DOI package includes Kazakh-Russian language support, which will help you get high-quality services in your native language and solve all organizational and financial issues related to obtaining a DOI in accordance with the legislation of the Republic of Kazakhstan COXON.<br><br>
                    The cost of our DOI package depends on the amount of work required to process metadata and issue unique identifiers. We provide a flexible pricing policy that takes into account the individual needs of each publisher.<br><br>
                    For more information about our DOI package and its terms of use, as well as for an accurate price list, please contact us. We will be happy to help you get a unique identifier for your digital objects and provide you with high-quality support at every stage of your work.<br><br></p>
                <form action="{{route('contacts')}}">
                    <button class="btn-primary" type="submit">
                        REQUEST A COST CALCULATION
                    </button>
                </form>
            </section>

            <section class="cabinet-info cabinet-section tab-content d-none" id="tab5">
                <h2 class="cabinet-section-title text-center text-uppercase">Individual calculation</h2>
                Soon...
            </section>
        </main>
    @elseif(app()->currentLocale() == 'ru')
        <main class="container cabinet-container">
            <div class="cabinet-menu-block">

                <div class="cabinet-menu-mobile js-cabinet-menu-btn">
                    <div class="cabinet-menu-mobile-x"></div>
                </div>
                <ul class="cabinet-menu js-cabinet-menu justify-content-none ">
                    <li class="cabinet-menu-item mr-4 cabinet-menu-item__active">
                        <a href="#" data-tab="tab1">Пакет "Стартовый"</a>
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

                <form action="{{route('contacts')}}">
                    <button class="btn-primary" type="submit">
                        ЗАПРОСИТЬ РАСЧЁТ СТОИМОСТИ
                    </button>
                </form>
            </section>

            <section class="cabinet-info cabinet-section tab-content d-none" id="tab5">
                <h2 class="cabinet-section-title text-center text-uppercase">Индивидуальный расчет</h2>
                Скоро...
            </section>
        </main>
    @elseif(app()->currentLocale() == 'kz')
        <main class="container cabinet-container">
            <div class="cabinet-menu-block">

                <div class="cabinet-menu-mobile js-cabinet-menu-btn">
                    <div class="cabinet-menu-mobile-x"></div>
                </div>
                <ul class="cabinet-menu js-cabinet-menu justify-content-none ">
                    <li class="cabinet-menu-item mr-4 cabinet-menu-item__active">
                        <a href="#" data-tab="tab1">Пакет "Стартовый"</a>
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
    @endif


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