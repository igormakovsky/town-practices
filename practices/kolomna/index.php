<?php

$id = 'kolomna'; // id страницы
$parent = 'practices'; // родительский элемент

require $_SERVER['DOCUMENT_ROOT'].'/includes/vars.php';

$title = 'Музейно-творческий кластер «Коломенский посад»';
$description = 'Описание страницы'; // описание для страницы и поисковиков
$keywords = 'коломна'; // ключевые слова для поиска

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

    <script>
        $(document).ready(
            function() {
                var town = getObjects(data, 'id', "<?=$id?>")[0] // Returns an array of matching objects
                $('.title-title').html(town.title)
            }
        )

    </script>

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
        <h1 class="title-title"></h1>

        <p class="small">Тема</p>
        <ul class="title-tags">
            <li>
                <?=$type_social?>
            </li>
            <li>
                <?=$type_gastronomy?>
            </li>
            <li>
                <?=$type_tourism?>
            </li>
            <li>
                <?=$type_culture?>
            </li>
        </ul>

        <p class="small">Срок реализации</p>
        <p class="title-date">
            с 2008 года — по настоящее время
        </p>

    </section>

    <section class="content text">

        <h2>Коломна сегодня</h2>
        <p>
            Это интереснейший сплав из прошлого и настоящего: крупный промышленный центр (здесь производят, например, тепловозы) и транспортный узел (100 километров от Москвы, плюс речной порт), мощный культурный слой восьми веков и развивающаяся творческая экономика компаний числом более сотни. Живут в Коломне около 145 тысяч человек, причем многие переехали сюда из мегаполисов. Интересно, что процесс трансформации тихого провинциального городка в крупный туристический центр начался всего 10 лет назад и по-прежнему набирает обороты.
        </p>

    </section>

    <section class="content text">

        <h2>Новая жизнь старого города </h2>
        <p>
            В начале 2000-х годов территория за стенами коломенского кремля была незаслуженно забыта и не рассматривалась как ресурс развития. Даже тот факт, что четыре улочки посада сохраняли в городе среду провинции 19 века, обеспечивая Коломне статус исторического поселения, не мотивировал вкладываться в заброшенную территорию. Постепенно пространство в 2,5 квадратных километров превращалось в маргинальный уголок, среда и памятники разрушались, а недвижимость катастрофически обесценивалась.
        </p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            Зимой 2008 года мы реализовывали в Коломне проект «Ледяной дом». Он был связан с гением места — Иваном Лажечниковым, который написал одноименный роман. На 37 странице его книги было описание коломенской пастилы. В 19 веке город славился этим лакомством на всю Россию, но после революции его производство прекратилось. Мы решили пастилу сделать частью проекта. Нашли старинный рецепт и планировали заказать на фабрике. Объездив семь компаний в радиусе ста километров, поняли, что пастилу придется делать самим на кухне. Три месяца потратили, прежде чем получилось
        </p>
        <p class="content-citation__author">
            Наталья Никитина
        </p>
        <p class="content-citation__who">
            Генеральный директор автономной некоммерческой организации «Коломенский центр познавательного туризма «Коломенский посад», автор проекта воссоздания коломенской пастилы и коломенского калача
        </p>

    </section>

    <section class="content text">

        <h2>Музей исчезнувшего вкуса</h2>
        <p>
            Во время фестиваля успех пастилы был ошеломляющим, так что разовая, по мнению авторов, история получила продолжение: сначала губернатора пастилой встречали, потом презентовали на выставке «Культурное Подмосковье», а дальше пошла вереница журналистов, чиновников и бизнесменов. Через пару месяцев Коломенский краеведческий музей предложил энтузиастам на собственные средства в небольшом флигеле без электричества и отопления сделать музей пастилы. Заручившись поддержкой фонда Потанина, в январе 2009 года в Коломне появился «Музей исчезнувшего вкуса». Главным слоганом нового пространства стало выражение «История со вкусом», которое переносится не только на пищевые рецепторы, но и на вкус к жизни, к историям, к укладу и культуре.
        </p>

    </section>

    <section class="content text">

        <h2>Осмыслить прошлое, чтобы увидеть будущее</h2>
        <p>
            При поддержке фонда Потанина был сделан и следующий стратегический шаг. В 2010 году междисциплинарные специалисты провели исследование и разработали комплексный проект развития территории. На базе 14 исторических тем они сформировали «творческий кластер» общей емкостью около двухсот малых и средних компаний, в том числе на основе государственно-частного партнерства. Для устойчивости проекта в материальный фонд были включены только пустующие и частные руинированные объекты, связанные с купеческими фамилиями и местными промыслами.
        </p>

    </section>

    <section class="content-important">

        <p>
            Сейчас все отреставрированные здания являются муниципальной собственностью и находятся в долгосрочной аренде на 39 лет под 2%. Таких условий удалось добиться спустя 10 лет после начала реализации проекта.
        </p>

    </section>

    <section class="content text">

        <h2>Впечатления решают</h2>
        <p>
            При поддержке фонда Потанина был сделан и следующий стратегический шаг. В 2010 году междисциплинарные специалисты провели исследование и разработали комплексный проект развития территории. На базе 14 исторических тем они сформировали «творческий кластер» общей емкостью около двухсот малых и средних компаний, в том числе на основе государствеТем временем пастила продолжала набирать силу и как за ниточки дергать весь веер творческих индустрий. Осознав, что впечатления — это главный фактор продаж, сотрудниц музея начали обучать актерскому мастерству. Чтобы не устраивать на веранде регулярных мастер-классов по приготовлению пастилы, на грантовые деньги (фонд «Наше будущее») была создана историческая Фабрика с возможностью проведения экскурсий на производстве. Кроме того, начали развиваться смежные направления — дизайн, упаковка, сувенирная линейка, медиа, полиграфия, пошив одежды, музейные и туристические программы и сервисы.нно-частного партнерства. Для устойчивости проекта в материальный фонд были включены только пустующие и частные руинированные объекты, связанные с купеческими фамилиями и местными промыслами.
        </p>

    </section>

    <section class="content text">

        <h2>Живые музеи </h2>
        <p>Пастила стала своеобразным полигоном для отработки рабочей модели всех последующих проектов. Формула успеха — на основе подлинной истории места создавать музей с производством и <a href="https://youtu.be/IuJeMJffiXM" target="blank">формировать среду вокруг</a>.Таким образом, исторические мануфактуры способны обеспечить жителям устойчивый доход и счастливый образ жизни. Сейчас основу музейно-творческого кластера «Коломенский посад» составляют 4 музея («Коломенская пастила», «Калачная», резиденция «Арткоммуналка» и «Навигатор») и 3 исторических производства (кондитерский и пекарский цеха, картонажная мануфактура). Параллельно запущены еще несколько проектов: «Кружечный двор», «Свечной завод», «Усадьба купцов Сурановых», «Английский садик», «Сад коломенской пастильницы», «Яблочная дорога» и другие.</p>

    </section>

    <section class="content text">

        <ol>
            <li><span class="title">Музей «Коломенская пастила»</span><span class="date">(2009 год)</span>Во время мастер-классов можно отведать 35 сортов пастилы, воссозданных по старинным рецептам: «Торт госпожи Сыцанко», «Апельсиновая в шоколадной пыли», «Пастила от запоя и пьянства» с добавлением хмеля и другие.</li>
            <li><span class="title">Фабрика пастилы</span><span class="date">(2011 год )</span>Производство размещено в действующей до революции пастильной фабрике. Интересно, что и сейчас это лакомство начали поставлять в королевский дворец, правда, Британской империи. Благодаря приезду в Коломну чиновника из Лондона и знакомству с местным миллионером_филиал производства был открыт в Норфолке. Недавно после дегустации Букингемский дворец разместил свой первый заказ на коломенскую пастилу.</li>
            <li><span class="title">Фестиваль «Антоновские яблоки»</span><span class="date">(2011 год)</span>Международный яблочно-книжный фестиваль «Антоновские яблоки» проходит ежегодно и за два дня собирает более 10 тысяч человек.</li>
            <li><span class="title">Музей «Калачная»</span><span class="date">(2013 год)</span> Только под главными въездными воротами в коломенский кремль можно отведать настоящий калач. Чтобы воссоздать исторический вкус, пекари и краеведы трудились полгода до открытия «Калачной». Тогда лакомство не получилось. Но зная, что Петр I одаривал калачами патриарха и награждал солдат вместо медалей, битва за вкус продолжалась еще полгода. Сейчас в Коломне выпекают 12 тысяч калачей в месяц, и вечером в выходные лакомство не купить.</li>
            <li><span class="title">Музей «Коломенский шелковый платок»</span> <span class="date">(в разработке)</span> В 19 веке Коломну называли столицей тафты золотной. Редкие по качеству ткани поставлялись даже в Ватикан Папе Римскому. Технология будет воссоздаваться по сохранившимся образцам с помощью исторических станков.</li>
            <li><span class="title">Ретиратник</span> <span class="date">(в разработке)</span> Название общественного туалета происходит от слова ретироваться. В ближайшее время ретиратники, похожие на часовни, украсят посад. Будут они двух классов: бесплатные — без мыла, воды и бумаги, и первого уровня — со всеми приятностями.</li>
            <li><span class="title">Рассеянная гостиница</span> Два дома местных жителей были отреставрированы и используются под гостиницу. Пенсионеры получают доход, а исторические дома сохранились для потомков.</li>
            <li><span class="title">«Арткоммуналка»</span> <span class="date">(2012 год)</span> Музей советских лет в доме, где писатель Венедикт Ерофеев работал грузчиком в винном отделе. Выполняет функции резиденции для художников и писателей, создающих современное искусство. Это кузница креативных кадров. Более 10 резидентов стали партнерами команды.</li>
            <li><span class="title">Музей «Деньга коломенская»</span> <span class="date">(2014 год)</span>Первая частная коллекция нумизмата. Кстати, само понятие «деньга» зародилось именно в Коломне.</li>
            <li><span class="title">Музей-лавка «Душистые радости»</span>Воссоздана на месте лавки коломенского мыловара купца Суранова. Узнайте пикантные нюансы утреннего туалета наших предков.</li>
            <li><span class="title">Музей «Навигатор»</span> <span class="date">(2016 год)</span>Музей нового формата работает по принципу туристско-информационного центра.</li>
            <li><span class="title">Музей «Коломенский патефон»</span></li>
            <li><span class="title">Музей «Кружечный двор»</span> <span class="date">(в разработке)</span>Объект появится в здании 1735 года и будет связан с культурой алкоголя.</li>
            <li><span class="title">Литературное кафе</span> <span class="date">(2017 год)</span>Артистический салон порадует музыкальной машиной и настольными играми 19 века.</li>
        </ol>

    </section>

    <section class="content text">

        <h2>Организационная структура</h2>
        <p>
            Музейно-творческий кластер «Коломенский посад» во все времена оставался частной инициативой. Даже в самые дорогостоящие идеи команда инвестировала только собственные и грантовые средства. Каждая новая задумка подсказывается самой жизнью, при этом все объекты восстанавливаются с особой тщательностью. С 2015 года кластер существует как автономная некоммерческая организация «Коломенский центр познавательного туризма «Коломенский посад». Почти каждый объект внутри — самостоятельная коммерческая единица (ООО) со своим руководителем. Точка сборки — общий офис для топ-менеджмента.
        </p>

    </section>

    <section class="content text">

        <h2>Формирование сообщества жителей</h2>
        <p>
            По сравнению с европейскими музейными кварталами в Коломне живут люди, которые вполне могли стать главной угрозой проекта.
        </p>
        <p>
            Демонстрируя образцы качественной реставрации и создания малых форм — заборов, ворот, беседок — команда проекта вынуждает подтягиваться и местных жителей. Многие из них посещают цикл лекций «Садовая школа» и начинают осознавать не только ценность сохранения объектов наследия, но и норм развития средовой застройки. Интересно, что принцип «делай как я» в Коломне срабатывает на разных уровнях. Например, после высокой оценки губернатора_администрация запустила программу «Городской забор» и сделала несколько ограждений за свой счет. Кроме того, у местных жителей музей закупает плоды для пастилы и на ежегодном фестивале делает посадский ряд, где коломенцы продают свои продукты.
        </p>

    </section>

    <section class="content-citation">

        <p class="content-citation__text">
            Мы хотим взаимодействовать с коломенцами. Они приходят к нам работать, участвуют в проектах и формируют творческую среду. Кто-то начинает развивать свои проекты. И мы стараемся этому содействовать. Собственно, в этом и заключается технология формирования туристического кластера — провоцировать появление инициатив.
        </p>
        <p class="content-citation__author">
            Дмитрий Ойнас
        </p>
        <p class="content-citation__who">
            Директор проектов АНО «Коломенский посад», ведущий эксперт Центра культурных инициатив Московской области
        </p>

    </section>

    <section class="content text">

        <h2>Престижное место для жизни</h2>
        <p>
            За 10 лет реализации проекта депрессивная, вымирающая историческая часть города превратилась в престижное место для жизни. Стоимость недвижимости в районе Коломенского посада приблизилась к московским ценам. Город вошел в десятку самых популярных малых туристических городов России, а пастила в 2014 году стала официальным лакомством года культуры Великобритания-Россия и вошла в линейку национальных сувениров. В 2016 году весь проект в целом получил Премию Правительства РФ в области туризма, а в 2017 году стал номинантом престижной премии «Лучший европейский музей 2017 года» (EMYA).
        </p>
        <p>
            Сейчас творческий кластер включает в себя три крупных модуля: музейный квартал, творческие индустрии и туристскую инфраструктуру, где занято более 2 500 человек. Общий туристический поток в город вырос в три раза и составляет более 450 тысяч человек.
        </p>

    </section>

    <section class="content text">

        <h2>Потенциал развития</h2>
        <p>
            Авторы проекта убеждены, что потенциал кластера еще огромен. Каждая историческая линия в будущем может породить порядка 10 маленьких предприятий с 15 рабочими местами в каждом, что в общей сложности создаст 7 тысяч рабочих мест. В ближайшее время будет продумана событийная линейка, позволяющая сгладить разницы между наплывом туристов в выходные и затишьем среди недели. А вопрос с сырьем для пастилы, которое сейчас перерабатывается тоннами, музейщики смогут решить собственными силами. Сейчас ведутся переговоры с правительством Московской области о закладке сада.
        </p>

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

    <!--<section class="content-fullwidth">
        
        <img src="img/wide-1.jpg">
        
        <div class="author">
            <p></p>
        </div>
        
    </section> -->

    <?php require $docroot.'includes/bottom.php'; ?>