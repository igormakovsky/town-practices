<?php

$id = 'lukhovitsy'; // id страницы
$parent = 'practices'; // родительский элемент

require $_SERVER['DOCUMENT_ROOT'].'/includes/vars.php';

$title = 'Развитие бренда «Луховицкий огурец»';
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

        <p class="small">Место</p>
        <p class="title-place">
            Московская область, город Луховицы
        </p>

        <p class="small">Тема</p>
        <ul class="title-tags">
            <li>
                <?=$type_events?>
            </li>
            <li>
                <?=$type_gastronomy?>
            </li>
            <li>
                <?=$type_tourism?>
            </li>
        </ul>

        <p class="small">Срок реализации</p>
        <p class="title-date">
            с 2006 года — по настоящее время
        </p>

    </section>

    <section class="content text">

        <p>
            Одни <a href="https://otr-online.ru/programmi/malie-goroda-rossii/luhovitsi-za-chto-26247.html">называют Луховицы огурцовой столицей</a>, другие столицей авиастроения. Два бренда поделили более 30 тысяч местных жителей небольшого подмосковного городка ровно пополам на тех, кто зарабатывает на крупнейшем в России авиационном заводе (предприятия собирает МиГ-29), и тех, кто выращивает и продает огурцы. Масштаб «оборота зеленых», к слову, фантастический. В целом за сезон частные хозяйства продают около 10 000 тонн продукта. Правда, лет пятнадцать назад выгода от сбыта овощей была больше в разы — сегодня луховичан вытеснили с московских рынков, и продавать свое ручное детище они могу либо вдоль трассы, либо через перекупщиков. Защищать вековой сельскохозяйственный промысел в последние годы решено было за счет юридических, технологических и социокультурных способов.
        </p>

    </section>

    <section class="content text">

        <h2>Столетние традиции огуречного промысла</h2>
        <p>Луховицкие огурцы давно признаны эталонными вкуса и известны покупателям не только в Московской области, но и в других регионах. Традиции почти вековой истории производства огурцов сохраняются и сегодня.</p>

    </section>

    <section class="content-important">

        <p>Технологии огуречного промысла передают в Луховицах из поколения в поколение. К примеру, общий стаж семьи огуречников Шестаковых составляет 507 лет.</p>

    </section>

    <!--<section class="content-fullwidth">
        
        <img src="img/wide-1.jpg">
        
        <div class="author">
            <p></p>
        </div>
        
    </section> -->

    <section class="content-citation">

        <p class="content-citation__text">
            Саженцы огурцов мы разводим в особых парниках: основа из соломы, отзимовавший под снегом грунт, навоз, торфяная крошка, особая смесь сверху. Затем весь этот «слоенный пирог» закрывается куполом из полиэтилена. Через месяц проросшие семена высаживаются в обычные грядки, над которыми устанавливают металлические дуги с двумя слоями плёнки для воздушной подушки. Сами растения высаживаются в прорези, сделанные в полиэтиленовых пленках, между грядами раскладывают солому, для того, чтобы избавиться от сорняков без пестицидов и сохранить тепло.
        </p>
        <p class="content-citation__author">
            Александр Лагутин
        </p>
        <p class="content-citation__who">
            Начальник отдела развития агропромышленного комплекса, природных ресурсов, экологии, СНТ и муниципального контроля
        </p>

    </section>

    <section class="content-important">

        <p>В 2017 году в поселке Астапово началось строительство второй, третьей и четвертой очередей тепличного комбината «Луховицкие овощи» общей площадью 29га, плановый срок сдачи объекта — третий квартал 2018 года. Комплекс предназначен для круглогодичного выращивания овощей и после ввода в эксплуатацию всех очередей, годовой объем производства составит 40 тыс.тонн. Комплекс возводится за счет средств инвестора</p>

    </section>

    <section class="content text">

        <h2>Ассоциация производителей</h2>
        <p>В ноябре 2014 года для защиты бренда «Луховицкий огурец» и сохранения промысла была зарегистрирована Ассоциацию производителей Луховицких огурцов. Сегодня в ее составе 19 членов. Все занимаются производством огурцов. Членские взносы в Ассоциации минимальны, только для того, чтобы покрыть изготовление подтверждающих книжек. Получить документ может только тот, у кого есть прописка в Луховицком районе и свидетельство о собственности или договор аренды на землю. Именно члены ассоциации могут использовать наименование «Луховицкий огурец». (Исключительное право в феврале 2017 года подтвердила Федеральная служба по интеллектуальной собственности — Роспатент). </p>

    </section>

    <section class="content text">

        <h2>Ярмарки-продажи</h2>
        <p>Для создания беспрепятственных условий по реализации собственной продовольственной продукции в городе каждые выходные проводятся ярмарки, куда приезжают жители других областей и туристы. Знаменитые огурцы здесь можно найти в любом виде.</p>

    </section>

    <section class="content text">

        <h2>Первый арт-объект</h2>
        <p>Еще в 2006 году в городе появился памятник «Луховицкий огурец». В конкурсном отборе победил вариант рязанского скульптора, в котором отразились и дань уважения к труду крестьянина, и качество огурца, и благодарность жителей «кормильцу».</p>
        <p>
            Кроме того, в историко-художественном музее в 2015 году открылся зал, полностью посвящённый огуречной тематике. Помещения обустроено в виде русской избы и огородом с настоящей грядкой и рабочим инвентарём. А в ходе мастер-класса можно научиться луховицкому рецепту засолки зеленых.
        </p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            Создание в районе туристического кластера, изюминкой которого станет «Луховицкий огурец», является общей задачей. Для этого нужна поддержка общественности, бизнеса, творческой интеллигенции. Открытие замечательной экспозиции в музее свидетельствует, что эта задача решается сообща.... Видно, что луховичане искренне любят свой район и гордятся продукцией, которую выращивают.
        </p>
        <p class="content-citation__author">
            Эльмира Хаймурзина
        </p>
        <p class="content-citation__who">
            Заместитель председателя Правительства Московской области
        </p>

    </section>

    <section class="content text">

        <h2>Фестиваль " Луховицкий огурец«</h2>
        <p>С 2015 году для привлечения туристов администрацией муниципального района был организован праздник «Луховицкий огурец». Через два года фестиваль стал собирать более 2000 туристов и аграриев из Москвы, Рязани, Суздаля и других городов. Традиционно здесь проходят ярмарка-продажа, театрализованные представления, всевозможные конкурсы, развлечения для гостей и показательная засолка «всем миром». Только на фестивале можно отведать такие редкие блюда из огурцов как, например, «чёрная уха» (рыба варится в огуречном рассоле с добавлением пряностей), варенье из огурцов. </p>

    </section>

    <section class="content text">

        <h2>Кластер</h2>
        <p>В конце 2017 года руководители Коломны, Луховиц и Зарайска подписали резолюцию о создании единого туристического кластера. </p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            Для Подмосковья — это исторический момент, так как впервые муниципальные образования объединяются для создания туристического кластера. Коломна, Луховицы и Зарайск имеют огромный туристический потенциал, в каждом городе своя изюминка, а объединение умножит этот потенциал втрое.
        </p>
        <p class="content-citation__author">
            Оксана Косарева
        </p>
        <p class="content-citation__who">
            Министр культуры Подмосковья
        </p>

    </section>

    <section class="content-algorythm">

        <h2>Алгоритм реализации практики</h2>
        <ol>
            <li>Сохранение традиционного огуречного промысла.</li>
            <li>Защита бренда путем создания Ассоциации производителей.</li>
            <li>Подтверждение в Роспотенте исключительного права на использование бренда.</li>
            <li>Организация регулярных городских ярмарок-продаж.</li>
            <li>Создание городского арт-объекта с элементами бренда.</li>
            <li>Открытие отдельного зала в краеведческом музее, посвященного промыслу.</li>
            <li>Проведение ежегодного фестиваля «Лухорецкий огурец».</li>
            <li>Строительство современного масштабного тепличного комплекса.</li>
            <li>Включение в объединенный туристический кластер вместе с Коломной и Зарайском. </li>

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

    <!-- <section class="content-video">
    
        <div class="video">
            <iframe width="800" height="450" src="https://www.youtube.com/embed/oYa2BXpkYvQ?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
    
    </section> -->

    <?php require $docroot.'includes/bottom.php'; ?>
