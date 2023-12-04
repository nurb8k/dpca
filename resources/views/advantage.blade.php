@extends('layouts.layout')
@section('content')
    <section class="page-title-block">
        <img class="page-title-img" src="{{asset('images/how_we_help.png')}}" alt="">
        <h1 class="page-title"><span class="text-blue">{{__('BENEFIT')}}</span></h1>
    </section>
    @if(app()->currentLocale() == 'ru')
        <main class="container cabinet-container">
            <div class="cabinet-menu-block">
                <section class="cabinet-info cabinet-section">
                    <h2 class="cabinet-section-title text-center text-uppercase">СЕРВИС под ключ</h2>

                    <li><span class="section-text">Разработаем и настроим все необходимые функции для работы с OJS, Crossref, ORCID и другими сервисами.</span></li>
                    <li><span class="section-text">Обеспечим интеграцию с базами данных научных публикаций и цитирований.</span></li>
                    <li><span class="section-text">Предоставим консультации по развитию журнала, в том числе по вопросам редактирования, маркетинга и продвижения.</span></li>
                    <li><span class="section-text">Поставим нашу команду ведущих специалистов отрасли, которые окажут полную поддержку на всех этапах работы с порталом DPCA.</span></li>
                    <li><span class="section-text">Мы готовы запустить проект «под ключ», чтобы обеспечить максимально быстрое и качественное внедрение портала для наших клиентов.</span></li>

                </section>
                <section class="cabinet-info cabinet-section bg-dark-blue">
                    <h2 class="cabinet-section-title text-center text-uppercase text-dark-blue">КВАЛИФИЦИРОВАННЫЕ СПЕЦИАЛИСТЫ</h2>
                    <p class="section-text">
                        Одним из преимуществ портала DPCA является наличие квалифицированных специалистов, имеющих опыт работы с ведущими ресурсами, такими как WoS, Scopus, DOAJ, Crossref, ORCID и другими.<br><br>
                        Мы обеспечиваем качественную интеграцию журнала с указанными ресурсами и гарантируем соответствие публикаций международным стандартам и требованиям.<br><br>
                        Наша команда имеет большой опыт работы в научном издательстве и готова помочь вам в любых вопросах, связанных с подготовкой и публикацией научных статей, индексацией журналов в базах данных, получением международного признания и т.д.<br><br>
                        Сотрудничая с порталом DPCA, вы получаете доступ к профессиональной поддержке и возможности расширения аудитории вашего журнала через ведущие мировые ресурсы.
                    </p>
                </section>
                <section class="cabinet-info cabinet-section bg-orange">
                    <h2 class="cabinet-section-title text-center text-uppercase text-orange">Экспертная помощь в развитии вашего журнала</h2>

                    <p class="section-text">Мы предлагаем полный спектр услуг по консультированию по развитию журнала, включая экспертизу действующего сайта и продвижение вашего журнала. Наша команда экспертов поможет вам принять правильные решения, связанные с развитием вашего журнала, а также поделится полезными советами по увеличению его аудитории и улучшению качества публикаций. Мы также можем помочь вам с регистрацией DOI и подачей заявок в базы данных. Не стесняйтесь обращаться к нам за консультацией и реализовывать свой потенциал в мире издательства и научных публикаций
                    </p>

                </section>
                <section class="cabinet-info cabinet-section bg-green">
                    <h2 class="cabinet-section-title text-center text-uppercase text-green">СОБСТВЕННЫЙ ПОРТАЛ</h2>

                    <p class="section-text">
                        Работа с нами имеет множество преимуществ. Во-первых, у нас есть собственный портал DPCA, который предоставляет доступ к большому количеству материалов, законов, чек-листов, ответов на часто задаваемые вопросы и многому другому. Мы также предлагаем экспертизу вашего текущего сайта и консультации по его улучшению и продвижению.<br><br>
                        Но, что делает нас еще более привлекательными для партнерства, это возможность разметки метаданных статей напрямую в CROSSREF для получения DOI. Благодаря этой функции, наши партнеры могут быстро и легко зарегистрировать идентификаторы DOI для своих публикаций, что существенно упрощает процесс их распространения и продвижения. Кроме того, мы гарантируем приоритетную обратную связь и индивидуальный подход к каждому нашему партнеру. Мы стремимся к постоянному улучшению нашего сервиса и предоставляем высококачественную поддержку на протяжении всего пути работы с нами.
                    </p>
                </section>
            </div>
            <div class="presentation-section">
                <div class="presentation__header">
                    <h3 class="presentation__title">Презентация</h3>
                    <p class="presentation__text">Ключевая информация о нашей платформе одним файлом. Удобно распечатать или отправить по электронной почте.</p>
                </div>
                <div class="presentation__download">
                    <form action="{{asset('files/DPCA presentation.pdf')}}" target="_blank">
                        <button type="submit" class="presentation__header--button">
                            {{__('presentation.download')}}
                        </button>
                    </form>
                </div>
            </div>
        </main>
    @elseif(app()->currentLocale() == 'en')
        <main class="container cabinet-container">
            <div class="cabinet-menu-block">
                <section class="cabinet-info cabinet-section">
                    <h2 class="cabinet-section-title text-center text-uppercase">Turnkey SERVICE</h2>

                    <li><span class="section-text">We will develop and customize all necessary functions to work with OJS, Crossref, ORCID and other services.</span></li>
                    <li><span class="section-text">Provide integration with databases of scientific publications and citations.</span></li>
                    <li><span class="section-text">Provide advice on the development of the journal, including editing, marketing and promotion.</span></li>
                    <li><span class="section-text">Deliver our team of industry leading experts who will provide full support at all stages of the DPCA portal.</span></li>
                    <li><span class="section-text">We are ready to launch a turnkey project to ensure the fastest and highest quality portal implementation for our clients.</span></li>

                </section>
                <section class="cabinet-info cabinet-section bg-dark-blue">
                    <h2 class="cabinet-section-title text-center text-uppercase text-dark-blue">QUALIFIED SPECIALISTS</h2>
                    <p class="section-text">One of the advantages of the DPCA portal is the availability of qualified specialists with experience working with leading resources such as WoS, Scopus, DOAJ, Crossref, ORCID and others.<br><br>
                        We ensure high-quality integration of the journal with these resources and ensure that publications comply with international standards and requirements.<br><br>
                        Our team has extensive experience in scientific publishing and is ready to help you with any issues related to the preparation and publication of scientific articles, indexing journals in databases, obtaining international recognition, etc.<br><br>
                        By cooperating with the DIVA portal, you get access to professional support and opportunities to expand the audience of your magazine through the world's leading resources.</p>
                </section>
                <section class="cabinet-info cabinet-section bg-orange">
                    <h2 class="cabinet-section-title text-center text-uppercase text-orange">Expert assistance in the development of your magazine</h2>

                    <p class="section-text">We offer a full range of magazine development consulting services, including expertise on your current website and promotion of your magazine. Our team of experts will help you make the right decisions related to the development of your journal, as well as share useful tips to increase its audience and improve the quality of publications. We can also help you with DOI registration and database submissions. Feel free to contact us for advice and realize your potential in the world of publishing and scientific publishing</p>

                </section>
                <section class="cabinet-info cabinet-section bg-green">
                    <h2 class="cabinet-section-title text-center text-uppercase text-green">OWN PORTAL</h2>

                    <p class="section-text">Working with us has many advantages. Firstly, we have our own DPCA portal, which provides access to a large number of materials, laws, checklists, answers to frequently asked questions and much more. We also offer expertise on your current website and advice on its improvement and promotion.<br><br>
                        But what makes us even more attractive for a partnership is the ability to mark up the metadata of articles directly in CROSSREF to obtain DOI. Thanks to this feature, our partners can quickly and easily register DOI identifiers for their publications, which greatly simplifies the process of their distribution and promotion. In addition, we guarantee priority feedback and an individual approach to each of our partners. We strive to continuously improve our service and provide high-quality support throughout the entire journey of working with us.</p>
                </section>
            </div>
            <div class="presentation-section">
                <div class="presentation__header">
                    <h3 class="presentation__title">{{__('presentation')}}</h3>
                    <p class="presentation__text">{{__('presentation.text')}}</p>
                </div>
                <div class="presentation__download">
                    <form action="{{asset('files/DPCA presentation.pdf')}}" target="_blank">
                        <button type="submit" class="presentation__header--button">
                            {{__('presentation.download')}}
                        </button>
                    </form>
                </div>
            </div>
        </main>
    @elseif(app()->currentLocale() == 'kz')
        <main class="container cabinet-container">
            <div class="cabinet-menu-block">
                <section class="cabinet-info cabinet-section">
                    <h2 class="cabinet-section-title text-center text-uppercase">СЕРВИС под ключ</h2>

                    <li><span class="section-text">Разработаем и настроим все необходимые функции для работы с OJS, Crossref, ORCID и другими сервисами.</span></li>
                    <li><span class="section-text">Обеспечим интеграцию с базами данных научных публикаций и цитирований.</span></li>
                    <li><span class="section-text">Предоставим консультации по развитию журнала, в том числе по вопросам редактирования, маркетинга и продвижения.</span></li>
                    <li><span class="section-text">Поставим нашу команду ведущих специалистов отрасли, которые окажут полную поддержку на всех этапах работы с порталом DPCA.</span></li>
                    <li><span class="section-text">Мы готовы запустить проект «под ключ», чтобы обеспечить максимально быстрое и качественное внедрение портала для наших клиентов.</span></li>

                </section>
                <section class="cabinet-info cabinet-section bg-dark-blue">
                    <h2 class="cabinet-section-title text-center text-uppercase text-dark-blue">КВАЛИФИЦИРОВАННЫЕ СПЕЦИАЛИСТЫ</h2>
                    <p class="section-text">
                        Одним из преимуществ портала DPCA является наличие квалифицированных специалистов, имеющих опыт работы с ведущими ресурсами, такими как WoS, Scopus, DOAJ, Crossref, ORCID и другими.<br><br>
                        Мы обеспечиваем качественную интеграцию журнала с указанными ресурсами и гарантируем соответствие публикаций международным стандартам и требованиям.<br><br>
                        Наша команда имеет большой опыт работы в научном издательстве и готова помочь вам в любых вопросах, связанных с подготовкой и публикацией научных статей, индексацией журналов в базах данных, получением международного признания и т.д.<br><br>
                        Сотрудничая с порталом DPCA, вы получаете доступ к профессиональной поддержке и возможности расширения аудитории вашего журнала через ведущие мировые ресурсы.
                    </p>
                </section>
                <section class="cabinet-info cabinet-section bg-orange">
                    <h2 class="cabinet-section-title text-center text-uppercase text-orange">Экспертная помощь в развитии вашего журнала</h2>

                    <p class="section-text">Мы предлагаем полный спектр услуг по консультированию по развитию журнала, включая экспертизу действующего сайта и продвижение вашего журнала. Наша команда экспертов поможет вам принять правильные решения, связанные с развитием вашего журнала, а также поделится полезными советами по увеличению его аудитории и улучшению качества публикаций. Мы также можем помочь вам с регистрацией DOI и подачей заявок в базы данных. Не стесняйтесь обращаться к нам за консультацией и реализовывать свой потенциал в мире издательства и научных публикаций
                    </p>

                </section>
                <section class="cabinet-info cabinet-section bg-green">
                    <h2 class="cabinet-section-title text-center text-uppercase text-green">СОБСТВЕННЫЙ ПОРТАЛ</h2>

                    <p class="section-text">
                        Работа с нами имеет множество преимуществ. Во-первых, у нас есть собственный портал DPCA, который предоставляет доступ к большому количеству материалов, законов, чек-листов, ответов на часто задаваемые вопросы и многому другому. Мы также предлагаем экспертизу вашего текущего сайта и консультации по его улучшению и продвижению.<br><br>
                        Но, что делает нас еще более привлекательными для партнерства, это возможность разметки метаданных статей напрямую в CROSSREF для получения DOI. Благодаря этой функции, наши партнеры могут быстро и легко зарегистрировать идентификаторы DOI для своих публикаций, что существенно упрощает процесс их распространения и продвижения. Кроме того, мы гарантируем приоритетную обратную связь и индивидуальный подход к каждому нашему партнеру. Мы стремимся к постоянному улучшению нашего сервиса и предоставляем высококачественную поддержку на протяжении всего пути работы с нами.
                    </p>
                </section>
            </div>
            <div class="presentation-section">
                <div class="presentation__header">
                    <h3 class="presentation__title">Презентация</h3>
                    <p class="presentation__text">Ключевая информация о нашей платформе одним файлом. Удобно распечатать или отправить по электронной почте.</p>
                </div>
                <div class="presentation__download">
                    <form action="{{asset('files/DPCA presentation.pdf')}}" target="_blank">
                        <button type="submit" class="presentation__header--button">
                            {{__('presentation.download')}}
                        </button>
                    </form>
                </div>
            </div>
        </main>
    @endif


@endsection