<?php   
$id     = 'index'; // id страницы
$parent = ''; // родительский элемент

require $_SERVER['DOCUMENT_ROOT'] . '/includes/vars.php';

$keycolor = '#354452';
$seccolor = '#6895ab';
$title = $project_title;
$place = '';
$town = '';
$date = '';
$description = 'Интерактивная карта лучших практик малых городов';
$keywords = 'стартап, школа';

require $docroot . 'includes/head.php';

?>

<section class="index-information">

    <div class="index-information__logo">

        <img src="/img/townpractices-logo-dark.svg">

    </div>

    <p class="index-information__first">
        «Лучшие практики малых городов» — это отобранная профессионалами библиотека знаний, конкретных рекомендаций и подробных инструкций, как можно улучшить жизнь в своем городе, это специально созданная база решений, которые уже работают и могут быть использованы в других регионах.
    </p>
    <p class="index-information__second hidden">
        Универсальность решений в сочетании с авторским подходом дает возможность не просто копировать чужой успешный опыт, а брать работающий механизм, добавляя в него свое творчество, идеи и задумки. Интерактивная карта – это библиотека постоянно обновляемых знаний и решений, которая станет стимулом для появления новых проектов и позволит избежать того количества ошибок, с которыми приходилось сталкиваться первопроходцам.
    </p>
    <div class="index-information__creators hidden">
        <h4>Разработка проекта:</h4>
        <h5><a href="mailto:fish-fox@yandex.ru">Наталья Рыбальченко</a></h5>
        <p>руководитель проекта</p>
        <h5><a href="mailto:igor@igormakovsky.ru">Игорь Маковский</a></h5>
        <p>дизайн, разработка сайта</p>
        <h5>Ольга Гришина,<br> Олег Мосеев,<br> Анастасия Обуденкова</h5>
        <p>описания практик</p>
        <h5>Надежда Давыдова<br> Игорь Маковский</h5>
        <p>иллюстрации</p>
    </div>
    <div class="index-information__thanks hidden">
        <p><?=$thanks_1?></p>
        <p><?=$thanks_2?></p>
    </div>
    <div class="index-information__showmore">
        <p class="more">
            <a id="more" href="">Прочитать целиком</a>
        </p>
        <p class="less hidden">
            <a id="less" href="">Кратко</a>
        </p>
    </div>


</section>

<section class="index-map">

    <div id="mapid" style="height: 100%"></div>

</section>

<section class="index_list" style="margin-top:5rem;">

    <h3>
        Выбор практик по типу деятельности
    </h3>

    <nav>
        <ul>
            <li><a class="chooser activated" href="#" id="choose_all">Показать все практики</a></li>
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_business_id;?>">
                    <?=$type_business;?>
                </a>
            </li>
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_social_id;?>">
                    <?=$type_social;?>
                </a>
            </li>
            <!-- <li>
                <a class="chooser" href="#" id="choose_<?=$type_education_id;?>">
                    <?=$type_education;?>
                </a>
            </li> -->
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_events_id;?>">
                    <?=$type_events;?>
                </a>
            </li>
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_gastronomy_id;?>">
                    <?=$type_gastronomy;?>
                </a>
            </li>
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_tourism_id;?>">
                    <?=$type_tourism;?>
                </a>
            </li>
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_culture_id;?>">
                    <?=$type_culture;?>
                </a>
            </li>
        </ul>
    </nav>
</section>

<script src="/js/leaflet.js"></script>
<script src="/js/leaflet.markercluster.js"></script>
<script src="/js/leaflet-settings.js"></script>

<?
require $docroot.'includes/bottom.php';
?>
