<?php

$id = 'historical-graffiti'; // id страницы
$parent = 'practices'; // родительский элемент

require $_SERVER['DOCUMENT_ROOT'].'/includes/vars.php';

$title = $practice_11_id;
$practice_title = $practice_11; // название практики

$oblast = $practice_11_oblast; // область
$oblast_id = $practice_11_oblast_id;
$town = $practice_11_town;
$town_id = $practice_11_town_id; // город
$geotag = ''; //

$description = 'Описание страницы'; // описание для страницы и поисковиков
$keywords = $oblast.$town.'стартап, школа'; // ключевые слова для поиска

require $docroot.'includes/head.php';

$practice_type_a = $type_7;
$practice_type_a_id = $practice_11_type; // тип практики №1

$practice_type_2 = $type_0; // тип практики №2
$practice_type_3 = $type_0; // тип практики №3

$date_begin = '...'; // дата начала практики
$date_end = '...'; // дата завершения практики

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
        <p>Художник Владимир Овчинников разрисовал центр города граффити, рассказывающее об истории города</p>

        <div class="video">
            <iframe width="800" height="450" src="https://www.youtube.com/embed/oYa2BXpkYvQ?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>

        <p class="small">Организация процесса</p>
        <ol>
            <li>Появился активный человек с идеей преобразить город и подарить ему необычные граффити</li>
            <li>Идея согласовывается с администрацией города</li>
            <li>В Боровске появляются граффити, рассказывающие об истории города</li>
            <li>Распространяется информация в СМИ и социальных сетях</li>
            <li>В город начинают приезжать туристы посмотреть на новое граффити</li>
        </ol>

        <p class="small">Неожиданные решения</p>
        <p>Благодаря Владимиру Овчинникову, по Боровску ходишь, разгадывая его как какую-то гигантскую загадку (или, по-современному, квест), натыкаясь на картины в самых неожиданных местах, иногда уже отчаиваясь разобраться, где реальность, а где - фантазия художника. Козьма Прутков удостоен мемориальной доски, нарисованная девушка идет по настоящей водосточной трубе, из настоящих окошек выглядывают нарисованные то кошка, то боярышня, на настоящем доме видно то, как этот дом и улица, на которой он стоит, выглядели 100 с лишним лет назад - и так далее. Город приобрел достопримечательности, которых больше нет ни в одном малом городе России.</p>

        <p class="small">Значение для города <em>(что изменилось для жителей)</em></p>
        <p>Внешний вид домов преобразился, все граффити очень метко вписаны в окружающую среду, не нарушая исторический облик города. Гулять по Боровску приятно как туристам, так и местным жителям.</p>

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
