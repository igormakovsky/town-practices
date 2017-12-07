<?php

$id = 'votkinsk'; // id страницы
$parent = 'practices'; // родительский элемент

require $_SERVER['DOCUMENT_ROOT'].'/includes/vars.php';

$title = 'Живой Воткинск';
$description = 'Описание страницы'; // описание для страницы и поисковиков
$keywords = ''; // ключевые слова для поиска

require $docroot.'includes/head.php';

$expert_1 = 'expert_1a'; // эксперт по гастрономии — 1 или 2
$expert_1_text = 'Мне все очень понравилось';

$expert_2 = 'expert_2b'; // эксперт по мероприятиям — 1 или 2
$expert_2_text = 'Это просто великолепно';

$expert_3 = 'expert_3a'; // эксперт по экономическо-социальному эффекту — 1
$expert_3_text = 'Я не до конца понял, что это';

$expert_4 = 'expert_4a'; // эксперт по дизайну — 1
$expert_4_text = 'Какой-то отстой. Пойду лучше выпью';

$expert_5 = 'expert_5b'; // эксперт по масштабируемости — 1 или 2
$expert_5_text = 'Не решаюсь дать этому мероприятию свою оценку';

$expert_6 = 'expert_6a'; // эксперт по инфраструктуре — 1
$expert_6_text = 'Считаю, что это конгениально, но можно ведь сделать еще лучше';

?>

    <section class="hero">

        <!-- <div id="title" class="hero__title">
            <h1 class="town-title"></h1>
        </div> -->

        <div class="heroimage">
            <img src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="content title">

        <p class="small">Название практики</p>
        <h1 class="title-title">
            <?=$title?>
        </h1>

        <p class="small">Тема</p>
        <ul class="title-tags">
            <li>
                <?=$type_social?>
            </li>
            <li>
                <?=$type_business?>
            </li>
            <li>
                <?=$type_tourism?>
            </li>
        </ul>

        <p class="small">Место</p>
        <p class="title-place">
            Удмуртская Республика, город Воткинск
        </p>

        <p class="small">Срок реализации</p>
        <p class="title-date">
            с 2004 — 2020 гг.
        </p>

    </section>

    <section class="content text">

        <p>
            Воткинск - один из старейших городов Урала, где проживают чуть более 98 тысяч человек. Помимо легендарного Чайковского, засекреченного завода и самого большого в Европе искусственно созданного пруда, в последние годы он вдохновляет активностью горожан: бизнесмены преображают общественные пространства, жители скидываются на создание парков, а власть ищет пути благоустройства в интересах большинства. Благодаря этим метаморфозам именно Воткинск может стать самым «живым» моногородом России.
        </p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            Живой город — это самоорганизующаяся и саморазвивающаяся система, адаптирующаяся к реальности, имеющая и раскрывающая свой потенциал. Этот термин с 2015 года употребляется сообществом экспертов и практиков городского развития со всей страны. В Воткинске мы запустили процесс знакомства и объединения горожан, который раскрывает скрытый потенциал развития.
        </p>
        <p class="content-citation__author">
            Александр Старков
        </p>
        <p class="content-citation__who">
            Руководитель исполкома Всероссийского сообщества «Живые города»
        </p>

    </section>

    <section class="content text">

        <h2>Импульс к развитию</h2>
        <p>Импульс оживления распространяется среди жителей волнообразно и, как в случае с Воткинском, может начаться с одного человека. Известный в городе бизнесмен Александр Фонарев на собственные средства преобразил часть набережной Воткинского пруда. В продолжение благоустройства он создал на берегу <a href="https://vk.com/club52968275">стильное кафе</a>, со временем открыл <a href="https://vk.com/votkinskiiplyaj">пирс с прокатом лодок и катеров, школу вейкбординга и сапсерфинга</a>. Он много <a href="https://youtu.be/29H6rryhZBo">рассказывает о своем проекте</a>.</p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            В начале 2000-х годов пришло желание изменить судьбу любимого места моего детства. На заброшенной набережной я просто срезал склон и завез чистый песок с Камы. Благоустраивая пляжную зону, создал небольшой ресторан. Очень скоро «Остров» стал магнитом притяжения для местных жителей и гостей города. Я видел вокруг счастливых людей, и меня понесло дальше.
        </p>
        <p class="content-citation__author">
            Александр Фонарев
        </p>
        <p class="content-citation__who">
            Руководитель группы компаний «Челси», г. Воткинск
        </p>

    </section>

    <section class="content text">

        <h2>Бюро добрых дел</h2>
        <p>Вместе с командой Фонарев отправился на I-й Форум Живых городов в 2014 году. Вдохновившись идеями и новыми знакомствами, в том числе с международными экспертами, он создал Фонд «<a href="http://votkinskda.ru/news/1-7">Бюро добрых дел</a>» — вот группа <a href="https://vk.com/vot_dobro">вконтакте</a> и в <a href="https://www.facebook.com/votdobro/">фейсбуке</a>. Так объединились руководители предприятий, бизнесмены и просто горожане, готовые делиться с городом своим временем и финансами.</p>

    </section>

    <section class="content text">

        <h2>Благоустройство леса</h2>
        <p>Первым проектом фонда стало благоустройство Березовского леса. Активисты убрали поросль и валежник, сделали освещение и закупили специальное оборудование для создания лыжной трассы, поставили 15 малых форм (горки, самолет, качели и пр.), игровые конструкции для детей и урны, оборудовали канатную дорогу и мангальную зону. В результате никому не нужный лес стал любимым местом семейного отдыха горожан.</p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            Александр Фонарев для меня пример активатора городских изменений. Он живет под лозунгом – «мечтай, будь смелым, делай». То, что сегодня происходит в Воткинске, можно назвать пятым шагом в трансформации города. Также важную роль может сыграть международное сотрудничество. Я бы хотел стать послом Воткинска в Эндховене и уже договорился презентовать концепции одного из проектов с целью привлечения инвестиций.
        </p>
        <p class="content-citation__author">
            Кейс Донкерс
        </p>
        <p class="content-citation__who">
            Архитектор и дизайнер городской среды, основатель Центра развития архитектуры города Эйндховен (Голландия)
        </p>

    </section>

    <section class="content text">

        <h2>Преображение микрорайона</h2>
        <p>Команда фонда разработала серию проектов, способных преобразить весь микрорайон вокруг «Острова». В их числе скайпарк для начинающих горнолыжников, <a href="http://xn--80afd4affbbat.xn--p1ai/intentions/3786">лыжная база в Березовском лесу</a>, восстановление яхт-клуба и Парк им. Чайковского вокруг залива на 40 тыс. квадратных метров. В последнем, кстати, горожане уже провели серию субботников и на средства фонда организовали геодезические изыскания для определения маршрутов коммуникаций. Дело за малым – официальное выделение участков.</p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            Когда мы решали, как благоустроить Березовский залив, рассматривалось два предложения: создать парк Чайковского или построить малоэтажные здания с частичным обустройством. Проведя опрос населения, мы <a href="http://4votkinsk.ru/blog/novosti-votkinska/164.html">поддержали идею создания парка</a>. Сейчас надо решать, как в рамках законодательства передать на определенный срок земельные участки. Здесь важно показать готовность к содействию и гарантии возврата средств.
        </p>
        <p class="content-citation__author">
            Владимир Перевозчиков
        </p>
        <p class="content-citation__who">
            Глава муниципального образования «Город Воткинск» с 2012 по 2017 годы
        </p>

    </section>

    <section class="content text">

        <h2>Филиал Академии парусного спорта</h2>
        <p>Руководство Академии парусного спорта из Санкт-Петербурга было очаровано проделанной работой фонда по восстановлению яхт-клуба, который существовал в городе с 1904 года. В результате в мае 2017 года в Воткинске <a href="https://vk.com/sailingacademy_votkinsk?w=wall-144825489_41">открылся первый в России филиал академии</a>.</p>

    </section>

    <section class="content text">

        <h2>Форум «Живой Воткинск»</h2>
        <p>Для вовлечения в проекты большего числа горожан в начале 2017 года Бюро добрых дел инициировало проведение <a href="https://vk.com/zhivoyvotkinsk">серии форумов «Живой Воткинск»</a>. Сейчас с идеями горожан и поиском ресурсов в постоянном режиме <a href="https://vk.com/club137886841">работает штаб «Живой Воткинск»</a>.</p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            Когда мы понимаем, что город заболел, а по Воткинску видно, что он не здоров – рушится экосистема, идет деградация леса, увеличивается шашечная локальная застройка с нарушением технологий, плачевное состояние сетей, отсутствие ливневой канализации и т.д. - важна оперативность и сплоченность. Меценаты вкладывают свои деньги в оздоровление среды, чтобы она стала рентабельной сама по себе, и это правильно.
        </p>
        <p class="content-citation__author">
            Иван Носков
        </p>
        <p class="content-citation__who">
            Помощник главного архитектора Российской академии наук, эксперт по вопросам градостроительства (г. Москва)
        </p>

    </section>

    <section class="content-algorythm">

      <h2>
          Алгоритм реализации практики:
      </h2>
      
       <ol>
             <li>Появление активатора или хотя бы одного инициатора городских изменений среди горожан.</li>
            <li>Организация социального проекта, подкрепленного бизнес-инструментами для самообеспечения.</li>
            <li>Обмен идеями и повышение личностных компетенций на тематических форумах.</li>
            <li>Создание команды единомышленников.</li>
            <li>Расширение числа вовлеченных горожан за счет социально важных проектов.</li>
            <li>Взаимодействие с властью на равных за счет репутации, заработанной на успешных проектах.</li>
            <li>Передача вдохновения и знаний большему числу горожан за счет серии локальных форумов.</li>
            <li>Международное сотрудничество, выстроенное на личной вовлеченности экспертов и дружеских отношений.</li>
            <li>Законодательные гарантии перед дорогостоящими инвестиционными проектами.</li>
            <li>Комплексное благоустройство территории.</li>
        </ol>

    </section>


    <!-- <section class="content-carousel">
    
        <div class="photos" id="carousel">
    
            <div><img src="img/gallery-image-8.jpg" srcset="img/gallery-image-8@2x.jpg 2x">
                <p>
                    Фотограф — <a href="https://www.flickr.com/photos/ae11/27770836594/in/photolist-Jj1Ncu-hQZmzy-hDZxpH-YWR17u-rwbUr4-hNh3La-Eaubt1-hGRxzJ-r69rj-YWR1K3-SBDT3v-TDYtyB-TBxoTN-21AP3Zg-21AP5xX-MdP38o-21AP34i-XWiyaN-pq61n2-YftVkH-YsXRwX-vauP2L-YsXQZp-Z21j6Z-KZiR6E-KTpyQh-LoP9kH-LRLZKL-BUWRD7-YVKr6S-DQHHRj-UQZdkW-Z21i5a-pcYPSn-LptQzw-wQnidM-x7RRar-TNWwb3-TNWvQo-XWiyG9-TRMmTs-TRMkCb-THSktg-XTNEYY-z77PhY-zuGAS2-XTNDHS-M356yj-M36Cin-zMdjta">Александр Ермолаев</a> (flickr)
                </p>
            </div>
            <div><img src="img/gallery-image-1.jpg"></div>
            <div><img src="img/gallery-image-2.jpg">
                <p>Фотограф — Анастасия Обуденкова, 2014</p>
            </div>
            <div><img src="img/gallery-image-3.jpg">
                <p>Фотограф — Маковский Игорь, 2015</p>
            </div>
            <div><img src="img/gallery-image-4.jpg"></div>
            <div><img src="img/gallery-image-5.jpg"></div>
            <div><img src="img/gallery-image-6.jpg"></div>
            <div><img src="img/gallery-image-7.jpg"></div>
    
        </div>
    
        <nav class="carousel-btns">
            <div id="btn-left" class="btn-left"></div>
            <div id="btn-right" class="btn-right"></div>
        </nav>
    
    </section> -->

    <!--<section class="content-fullwidth">
        
        <img src="img/wide-1.jpg">
        
        <div class="author">
            <p></p>
        </div>
        
    </section> -->

    <!-- <section class="content-video">
    
        <div class="video">
            <iframe width="800" height="450" src="https://www.youtube.com/embed/oYa2BXpkYvQ?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
    
    </section> -->

    <?php require $docroot.'includes/bottom.php'; ?>
