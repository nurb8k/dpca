@extends('layouts.layout')

@section('content')
    <section class="page-title-block">
        <img class="page-title-img" src="{{url('public/images/how_we_help.png')}}" alt="">
        <h1 class="page-title"><span class="text-blue">РАЗРАБОТКА</span> ПОД КЛЮЧ</h1>
    </section>

    <main class="container cabinet-container">
        <div class="cabinet-menu-block">

            <div class="cabinet-menu-mobile js-cabinet-menu-btn">
                <div class="cabinet-menu-mobile-x"></div>
            </div>
            <div class="developing-text">
                Разработка под ключ на платформе OJS – это полный цикл создания онлайн-журнала, начиная от его проектирования и заканчивая его запуском и поддержкой.<br>
                Мы предлагаем следующие услуги:
            </div>

            <ul class="cabinet-menu js-cabinet-menu justify-content-none ">
                <li class="cabinet-menu-item mr-4 cabinet-menu-item__active">
                    <a href="#"  data-tab="tab1">Уникальный дизайн</a>
                </li>
                <li class="cabinet-menu-item mr-4">
                    <a href="#" data-tab="tab2">Хостинг</a>
                </li>
                <li class="cabinet-menu-item mr-4">
                    <a href="#"  data-tab="tab3">Маркетинг</a>
                </li>
                <li class="cabinet-menu-item mr-4">
                    <a href="#" data-tab="tab4">Техническая поддержка</a>
                </li>
            </ul>
        </div>
        <section class="cabinet-info cabinet-section tab-content d-block" id="tab1">
            <p class="section-text">Создаем индивидуальный дизайн для каждого журнала, учитывая его тематику, задачи и целевую аудиторию. Мы стремимся сделать дизайн лаконичным и функциональным, чтобы журнал был удобен для чтения и навигации.</p>
        </section>
        <section class="cabinet-info cabinet-section tab-content d-none" id="tab2">
            <p class="section-text">Предоставляем хостинг-услуги для вашего журнала на нашем сервере. Мы используем только высококачественное оборудование и программное обеспечение, чтобы обеспечить быстрый и стабильный доступ к вашему журналу. Также заботимся о безопасности вашего журнала и регулярно выполняем резервное копирование данных, чтобы защитить его от потери.</p>
        </section>
        <section class="cabinet-info cabinet-section tab-content d-none" id="tab3">
            <p class="section-text">Мы предлагаем комплексный подход к продвижению вашего журнала в Интернете. Мы помогаем нашим клиентам привлечь целевую аудиторию и увеличить количество читателей. Для этого мы используем различные маркетинговые инструменты, такие как контекстная реклама, социальные сети, SEO-оптимизация и другие. Мы также анализируем поведение пользователей на вашем журнале и помогаем улучшить его функциональность и удобство использования.
            </p>
        </section>
        <section class="cabinet-info cabinet-section tab-content d-none" id="tab4">
            <p class="section-text">Предоставляем круглосуточную техническую поддержку для вашего журнала. Наши специалисты всегда готовы помочь вам решить любые технические проблемы, связанные с вашим журналом, а также предоставить консультации по его развитию. Мы также регулярно обновляем и дорабатываем ваш журнал, чтобы он соответствовал современным тенденциям и требованиям.
            </p>
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