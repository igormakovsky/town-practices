<?php
$id = 'golf';
$parent = 'object';
$title_ru = 'Гольф';
$title_en = 'Golf';
$description_ru = 'Гольф-клуб и поле для гольфа на 18 лунок';
$description_en = 'Golf club with golf course for 18 holes';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Гольф</h1>
            <h1 lang="en">Golf</h1>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__golf darker">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="hero-content">

        <div class="hero-content__matlas-logo_link">
            <a href="/">
                <div class="hero-content__matlas-logo_dark"></div>
            </a>
        </div>

        <div class="hero-content__title">
            <h2 lang="ru">Гольф</h2>
            <h3 lang="ru">Гольф-клуб и поле<br>для гольфа на 18 лунок</h3>
            <h2 lang="en">Golf</h2>
            <h3 lang="en">Golf club with golf course<br>with 18 holes</h3>
        </div>

        <div class="hero-content__description">

            <p></p>

        </div>

        <div class="hero-content__list">
            <ul lang="ru">
                <li>Тренировки по различным программам на&nbsp;специальном тренировочном поле, учитывающие возраст и уровень игрока в&nbsp;гольф</li>
                <li>Программа детских занятий (TPI — начиная с&nbsp;азов гольфа)</li>
                <li>Групповые и индивидуальные тренировки под&nbsp;руководством опытных специалистов</li>
                <li>Проведение различных мероприятий (турниры, соревнования)</li>
            </ul>

            <ul lang="en">
                <li>Various training programs on&nbsp;the special practice green for all ages and levels</li>
                <li>Children&rsquo;s program (TPI&nbsp;&mdash; starting with the basics of&nbsp;golf)</li>
                <li>Group and individual training under the guidance of&nbsp;experienced professionals</li>
                <li>Events (tournaments, competitions)</li>
            </ul>
        </div>

        <div class="hero-content__table">

            <table lang="ru">
                <tr>
                    <th>Гольф-клуб, общая площадь</th>
                    <th>Стоимость клубной карты</th>
                    <th>Стоимость партии /&nbsp;игры</th>
                    <th>Стоимость аренды гольф-кара</th>
                    <th>Количество реализованных раундов в&nbsp;день</th>
                </tr>
                <tr>
                    <td>2 000 м<sup>2</sup></td>
                    <td>250 000&nbsp;₽</td>
                    <td>4 500 ₽</td>
                    <td>4 000 ₽</td>
                    <td>от 8 до 34</td>
                </tr>
            </table>

            <table lang="en">
                <tr>
                    <th>Golf club, total&nbsp;area</th>
                    <th>Cost of&nbsp;club cart</th>
                    <th>Cost of a round&nbsp;/ game</th>
                    <th>Cost of renting a&nbsp;buggy</th>
                    <th>Number of&nbsp;completed rounds a&nbsp;day</th>
                </tr>
                <tr>
                    <td>2 000 m<sup>2</sup></td>
                    <td>250&nbsp;000&nbsp;₽</td>
                    <td>4 500&nbsp;₽</td>
                    <td>4 000&nbsp;₽</td>
                    <td>from 8 to 34</td>
                </tr>
            </table>

        </div>

        <div class="hero-content__carousel">

            <div class="photos" id="carousel">

                <div class="photo"><img src="/img/nature/nature-1.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-2.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-3.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-4.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-5.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-6.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-7.jpg"></div>

            </div>

            <nav class="carousel-btns">
                <div id="btn-left" class="btn-left"></div>
                <div id="btn-right" class="btn-right"></div>
            </nav>

        </div>

        <div class="hero-content__poetic">

            <div lang="ru" class="hero-content__poetic_poem">
                <p>Я на звезды не мог наглядеться,
                    <br>Надышаться от счастья не мог.
                    <br>Показалось, лишь вспомнил я детство,
                    <br>Будто теплый подул ветерок</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>