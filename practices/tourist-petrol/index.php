<?php

$id = 'tourist-petrol'; // id страницы
$parent = 'practices'; // родительский элемент

require $_SERVER['DOCUMENT_ROOT'].'/includes/vars.php';

$title = $practice_9_id;
$practice_title = $practice_9; // название практики

$oblast = $practice_9_oblast; // область
$oblast_id = $practice_9_oblast_id;
$town = $practice_9_town;
$town_id = $practice_9_town_id; // город
$geotag = ''; //

$description = 'Описание страницы'; // описание для страницы и поисковиков
$keywords = $oblast.$town.'стартап, школа'; // ключевые слова для поиска

require $docroot.'includes/head.php';

$practice_type_a = $type_1;
$practice_type_a_id = $practice_9_type; // тип практики №1

$practice_type_b = $type_1; // тип практики №2
$practice_type_c = $type_0; // тип практики №3

$date_begin = '2015'; // дата начала практики
$date_end = 'настоящее время'; // дата завершения практики

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

$link_1 = '1';
$link_2 = '4';
$link_3 = '6';
$link_4 = '7';
$link_5 = '';
$link_6 = '';
$link_7 = '';
$link_8 = '';
$link_9 = '';
$link_10 = '';

?>

    <section class="practice-hero">

        <div id="title" class="practice-hero__title">
            <h1>
                <?=$project_title?>
            </h1>
        </div>

        <div class="heroimage">
            <img src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="practice-content">

        <p class="small">Название практики</p>
        <h1>
            <?=$practice_title?>
        </h1>

        <p class="small">Область, город</p>
        <p>
            <?=$oblast.', город '.$town?>
        </p>

        <p class="small">Тема</p>
        <p>
            <?=$practice_type_a?>
        </p>

        <p class="small">Срок реализации</p>
        <p>
            <?=$date_begin.' – '.$date_end?>
        </p>

        <p class="small">Главная идея</p>
        <p>Бензар — заправка в городе Зарайск, на юге Московской области.</p>
        <p>Городок маленький и инфраструктура развита пока что слабо. Бензар должен стать центром притяжения местных жителей и туристов, здесь можно будет заправиться бензином, кофе и информацией. Бренд должен аккумулировать энергию города и отдавать ее людям.
        </p>

        <div class="video">
            <iframe width="800" height="450" src="https://www.youtube.com/embed/oYa2BXpkYvQ?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>

        <p class="small">Организация процесса</p>
        <ol>
            <li>Изучение конкурентной среды – есть ли на территории те, кто предлагает что-то похожее. Заправки – есть, но они ничего не предлагают для туристов. Туристско-информационного центра нет. На этом фоне можно выгодно отличиться и получить конкурентное преимущество</li>
            <li>Формирование идеи – сделать заправку туристической</li>
            <li>Составление концепции</li>
            <li>Разработка фирменного стиля</li>
            <li>Реализация идеи, печать и распространение туристический карт, использование фирменного стиля на заправке, что выгодно отличает ее от конкурентов</li>
            <li>Оценка эффективности – спрос повысился, на заправку стало заезжать больше людей, автомобилисты стали рассказывать друг другу о необычном месте.</li>
            <li>Поток клиентов заправки увеличился, поток туристов в городе Зарайск – тоже. Выгода для бизнеса – выгода для города.</li>

        </ol>

        <p class="small">Неожиданные решения</p>
        <p>В маленьком городе Зарайске нет туристско-информационного центра. Заправка Бензар стала для города таким центром – местом, где туристы могут получить информацию о городе, карты, а случайные транзитные путешественники приобретут желание заехать в город и посмотреть на него своими глазами.</p>

        <p class="small">Значение для города <em>(что изменилось для жителей)</em></p>
        <p>За время существования проекта восстановлено 11 домов в Самаре, Казани и Бузулуке. Этим летом фестиваль расширился и к нему присоединились Саратов, Томск, Димитровград, Калуга, Боровск, Оренбург, Хвалынск и Кострома.</p>
        <p>
            Новый поток автомобильных туристов, которые не планировали заезжать в Зарайск, но после туристической заправки захотели это сделать.
        </p>

    </section>

    <section class="practice-content__carousel">

        <div class="photos" id="carousel">

            <div class="photo"><img src="img/gallery-image-1.jpg"></div>
            <div class="photo"><img src="img/gallery-image-2.jpg">
                <p class="small">Фотограф — Анастасия Обуденкова, 2014</p>
            </div>
            <div class="photo"><img src="img/gallery-image-3.jpg">
                <p class="small">Фотограф — Маковский Игорь, 2015</p>
            </div>
            <div class="photo"><img src="img/gallery-image-4.jpg"></div>
            <div class="photo"><img src="img/gallery-image-5.jpg"></div>
            <div class="photo"><img src="img/gallery-image-6.jpg"></div>
            <div class="photo"><img src="img/gallery-image-7.jpg"></div>

        </div>

        <nav class="carousel-btns">
            <div id="btn-left" class="btn-left"></div>
            <div id="btn-right" class="btn-right"></div>
        </nav>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>
