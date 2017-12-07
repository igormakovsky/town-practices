<?php

$id = 'russa'; // id страницы
$parent = 'practices'; // родительский элемент

require $_SERVER['DOCUMENT_ROOT'].'/includes/vars.php';

$title = 'Усадьба средневекового рушанина';
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
                <?=$type_tourism?>
            </li>
            <li>
                <?=$type_culture?>
            </li>
        </ul>

        <p class="small">Место</p>
        <p class="title-place">
            Новгородская область, город Старая Русса
        </p>

        <p class="small">Срок реализации</p>
        <p class="title-date">
            с 2012 — 2018 гг.
        </p>

    </section>

    <section class="content text">

        <p>
            Старая Русса — это третий по величине город Новгородской области, где проживают сегодня чуть больше 29 тысяч человек. В 2015 году история города преодолела 1000-летний рубеж, и непосвященным уже не разобраться, где кончаются легенды и начинается быль. Поговаривают, что именно Русса дала название всей России и стала родиной варяга-солевара Рюрика. К концу 15-го века подавляющее число дворов здесь занимались добычей белого золота, за что город прозвали «Соль земли русской». Кстати, именно сюда каждое лето разгонять тоску приезжал Достоевский. В 19 веке на местных минеральных водах вырос целый курорт. И сегодня Старая Русса остается российской здравницей. Наряду с этим в городе есть несколько заводов: авиаремонтный, химического машиностроения, приборостроительный и медико-инструментальный. Работают предприятия лёгкой, пищевой, полиграфической промышленности и производство стройматериалов. В городе выявлены 69 объектов культурного наследия, и с каждый днем набирает все большую популярность признанная президентом страны «машина времени».
        </p>

    </section>

    <section class="content-important">

        <p>
            Сегодня курорт Старая Русса входит в сеть «AMAKS Hotels&Resorts» и ежегодно принимает тысячи пациентов. Интересно, что в городе совершенно бесплатно бьет из-под земли природный ингалятор и самый мощный самоизливающийся минеральный источник в Европе Муравьевский фонтан
        </p>

    </section>

    <section class="content text">

        <h2>Усадьба средневекового рушанина</h2>
        <p>Достаточно войти в усадьбу напротив центральных курортных ворот, чтобы очутиться в гостях у рушанина 12 века. У проекта есть <a href="http://russasol.ru/novosti/">свой сайт</a> и группы <a href="https://vk.com/video-87358446_171705626">вконтакте</a>).</p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            Еще в 80-е годы поднимался вопрос о том, что в городе солеваров нет ни одного упоминания о том, что мы производили и продавали соль. Поскольку денег, как известно, ни на что не хватает, желание с возможностью сошлись только в 2012 году. По работе наши учредители, коренные жители Руссы, познакомились с городскими археологами, которые, в свою очередь, поделились идеей о создании музейно-туристического и научно-образовательного центра «Усадьба средневекового рушанина». В итоге мы приступили к реализации частного некоммерческого проекта. У учредителей нет цели заработать на этом деньги, поскольку они еще на берегу понимали, что окупить серьезные вложения в малом городе с небольшим турпотоком будет непросто. Это, можно сказать, такой подарок Старой Руссе.
        </p>
        <p class="content-citation__author">
            Максим Арсеньев
        </p>
        <p class="content-citation__who">
            Куратор центра «Усадьба средневекового рушанина»
        </p>

    </section>

    <section class="content text">

        <h2>Историческая точность </h2>
        <p>Работа по воссозданию усадьбы началась в 2012 году и опиралась строго на археологические исследования: размеры строения, способ их возведения, расположение на участке — все эти данные собирались из документов. Почему для усадьбы было выбрано именно это место, читайте <a href="https://izi.travel/ru/2ad5-usadba-srednevekovogo-rushanina/ru#2f99-dvor/ru">здесь</a></p>

    </section>

    <section class="content text">

        <h2>Варница</h2>
        <p>Работа музея началась в январе 2015 года с демонстрации главного экспоната — <a href="https://izi.travel/ru/2ad5-usadba-srednevekovogo-rushanina/ru#2875-varnica/">варницы</a>. Важно понять, что это не бутафория. Единственный в городе профессиональный солевар ежедневно не просто демонстрирует, а реально выпаривает около 2 килограммов соли.</p>

    </section>

    <section class="content text">

        <h2>Дворовые постройки</h2>
        <p>Со временем появились и другие точные копии-реконструкции: <a href="https://izi.travel/ru/2ad5-usadba-srednevekovogo-rushanina/ru#a1b9-horomy/ru">хоромы</a>, баня по-черному (<a href="https://izi.travel/ru/2ad5-usadba-srednevekovogo-rushanina/ru#572f-hozyaystvennye-postroyki/ru">узнайте</a>, почему баня по-черному так же стерильна, как операционная), дровницы, мастерские, загоны для скота и птиц, а также <a href="https://izi.travel/ru/2ad5-usadba-srednevekovogo-rushanina/ru#a68a-elementy-usadebnogo-blagoustroystva/ru">элементы городского благоустройства</a> — деревянная мостовая и частокол. </p>

    </section>

    <section class="content-important">

        <p>Поднявшись на самую высокую башню хором, повалушу, можно полюбоваться речкой Малашкой</p>

    </section>

    <section class="content text">

        <p>Летом 2017 года <a href="https://vk.com/video-87358446_171705608">открылась градирня и модель части казенного солеварного завода</a>, построенного по велению Екатерины II. Также в экспозиции музея есть артефакты, найденные в Старой Руссе, и уникальная коллекция соли из разных уголков планеты. В интернете <a href="https://www.instagram.com/p/BQOR6oGDrO_/?taken-by=russasol">можно посмотреть видео-экскурсию</a>.</p>

    </section>

    <section class="content-important">

        <p>Старорусские варницы были настолько популярны, что прописались даже на гербе города, увидеть который можно на монете в 10 рублей из серии «Города воинской славы»</p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            Соль мы получаем из минеральной воды из источника путем выпаривания по технологии 12 века. Из 100 литров выходит порядка двух килограмм, которые потом еще около 4 дней досушиваются в амбаре. Црен, или сковороду для соли, приходится регулярно чинить и делать новые, поэтому раньше на каждые четыре двора была своя кузница. Надеюсь, мы ее тоже скоро построим.
        </p>
        <p class="content-citation__author">
            Николай Кузьмин
        </p>
        <p class="content-citation__who">
            Cолевар центра «Усадьба средневекового рушанина».
        </p>

    </section>

    <section class="content text">

        <h2>Желтая соль</h2>
        <p>Минеральная вода богата железом и кремнием, поэтому старорусская соль получается желтоватого цвета, крупная и очень соленая. Про нее еще в летописях писали «рыжа, да чиста», так как при растворении не оставляет осадка. Провожая гостей, рушане и сейчас дают им соль, приговаривая: «Без соли, что без воли — жизни не проживешь».</p>

    </section>

    <section class="content text">

        <h2>Пуд соли с президентом</h2>
        <p>Запакованная в холщовые мешочки и берестяные туески, соль — главный сувенир посетителей усадьбы. Кстати, местные знатоки утверждают, что сама по себе соль не опасна, а вредно лишь ее чрезмерное количество. При этом старорусское золото при умеренном потреблении даже полезно за счет минералов и пониженного содержания натрий-хлора. Отведать старинный деликатес в Старую Руссу наведался сам Владимир Путин.</p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            Приезд Путина был незапланированным. Вне рамок официального визита он проявил интерес и посетил только наш музей. Показав экспозицию усадьбы, с разрешения Владимира Владимировича мы запустили акцию «Съесть пуд соли с президентом». Это крылатое выражение, которое дословно означает преодолеть трудности вместе, получило у нас продолжение. Пудовую солонку, из которой первая щепотка была предложена Путину, мы поместили в сувенирную лавку. Все желающие могли отведать президентской соли, тем самым поддержав его в нелегком деле на благо России. Пуд соли закончился через 7 месяцев.
        </p>
        <p class="content-citation__author">
            Максим Арсеньев
        </p>
        <p class="content-citation__who">
            Куратор центра «Усадьба средневекового рушанина».
        </p>

    </section>

    <section class="content text">

        <h2>Новые постройки</h2>
        <p>Сейчас строительные работы в усадьбе выходят на финишную прямую. В ближайшее время хозяйственные сооружения пополнятся амбаром для хранения провианта и действующей кузней. Также работники музея мечтают об организации зоны отдыха на задворках усадьбы. В месте, где река примыкает ко двору, могут появиться лодки и кораблики для прогулок.</p>

    </section>

    <section class="content text">

        <h2>Творческая площадка</h2>
        <p>Проект набирает обороты и как творческая площадка с уникальными формами интерактива.</p>
        <p>На базе музея создан собственный детский коллектив «Молвинец», фольклорные группы из Москвы, Санкт-Петербурга и других городов приезжают на гастроли, а недавно прошли съемки первого документально-игрового фильма «Русская Ганза. Взгляд сквозь время...». Также в усадьбе работает археологическая песочница. Ученые предоставляют музею не имеющие ценности древние черепки и предметы, а детвора в специальном деревянном срубе разыскивает эти артефакты по всем правилам жанра. И, разумеется, посещение усадьбы включено в различные фестивали, праздники и исторические реконструкции, проходящие в Старой Руссе.</p> Здесь также проходят <a href="https://vk.com/video-87358446_456239023">спектакли</a>, праздование <a href="https://youtu.be/q20LO4v7zzc">пасхи</a>, фестиваль «<a href="https://youtu.be/tepJCmdGM7U">Княжья Братчина</a>».

    </section>

    <section class="content text">

        <h2>Ссылки на проект</h2>
        <ul>

            <li>
                <a href="https://www.facebook.com/russasol">Фейсбук</a>
            </li>
            <li>
                <a href="https://vk.com/club87358446">Вконтакте</a>
            </li>
            <li>
                <a href="https://ok.ru/russasol">Одноклассники</a>
            </li>
            <li>
                <a href="https://www.instagram.com/russasol/">Инстаграм</a>
            </li>

        </ul>

    </section>

    <section class="content-algorythm">

        <h2>Алгоритм реализации практики:</h2>
        <ol>
            <li>Проведение археологических исследований и формирование концепции «живого музея».</li>
            <li>Поиск инвестора-мецената.</li>
            <li>Строительство главного экспоната музейного комплекса. </li>
            <li>Открытие усадьбы для посетителей и дальнейшее обустройство территории.</li>
            <li>Использование нестандартных подходов и новых интерактивных площадок.</li>
            <li>Развитие творческой составляющей площадки: продвижение за счет коллективов, фестивалей и праздников. </li>
            <li>Расширение ассортимента сувенирной продукции.</li>
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
