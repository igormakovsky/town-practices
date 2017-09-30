<?php
$id = 'balneology';
$parent = 'object';
$title_ru = 'Всесезонный бальнеологический термальный комплекс';
$title_en = 'All-season balneological thermal complex';
$description_ru = 'Лечение и реабилитация';
$description_en = 'Treatment and rehabilitation';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Всесезонный бальнеологический<br>термальный комплекс</h1>
            <h1 lang="en">All-season balneological<br>thermal complex</h1>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__hotel-four-stars darker">
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
            <h2 lang="ru">Всесезонный бальнеологический<br>термальный комплекс</h2>
            <h3 lang="ru">Лечение и реабилитация</h3>
            <h2 lang="en">All-season balneological thermal complex</h2>
            <h3 lang="en">Treatment and rehabilitation</h3>
        </div>

        <div class="hero-content__description">

            <p></p>

        </div>

        <div class="hero-content__list">
            <ul lang="ru">
                <li>Комплексная диагностика</li>
                <li>Превентивная и эстетическая медицина</li>
                <li>Лечебные водные процедуры с использованием природных минеральных вод</li>
                <li>Лечебные и расслабляющие массажи</li>
                <li>Реабилитационные курсы после травм</li>
                <li>Грязевые процедуры</li>
                <li>Термы, бани, ванны, cолярий</li>
                <li>Ароматерапия, талассотерапия</li>
            </ul>

            <ul lang="en">
                <li>Comprehensive diagnostics</li>
                <li>Preventive and aesthetic medicine</li>
                <li>Hydrotherapy using natural mineral waters</li>
                <li>Therapeutic and relaxing massages</li>
                <li>Rehabilitation courses after injuries</li>
                <li>Mud treatments (peloid procedure)</li>
                <li>Thermae, sauna, baths, solarium</li>
                <li>Aromatherapy, thalassotherapy</li>
            </ul>
        </div>

        <div class="hero-content__table">

            <table lang="ru">
                <tr>
                    <th>Общая площадь</th>
                    <th>Вместимость</th>
                    <th>Стоимость курса</th>
                    <th>Количество реализованных курсов в год</th>
                </tr>
                <tr>
                    <td>3 500 м<sup>2</sup></td>
                    <td>120 человек</td>
                    <td>
                        <nobr><span class="regular">7 дней</span> — 100 000 ₽</nobr>
                        <br>
                        <nobr><span class="regular">10 дней</span> — 125 000 ₽</nobr>
                        <br>
                        <nobr><span class="regular">14 дней</span> — 150 000 ₽</nobr>
                    </td>
                    <td>2 830</td>
                </tr>
            </table>

            <table lang="en">
                <tr>
                    <th>Total area</th>
                    <th>Occupancy</th>
                    <th>Course costs</th>
                    <th>Number of completed courses per year</th>
                </tr>
                <tr>
                    <td>3 500 m<sup>2</sup></td>
                    <td>120 people</td>
                    <td>
                        <nobr><span class="regular">7 days</span> — 100 000 ₽</nobr>
                        <br>
                        <nobr><span class="regular">10 days</span> — 125 000 ₽</nobr>
                        <br>
                        <nobr><span class="regular">14 days</span> — 150 000 ₽</nobr>
                    </td>
                    <td>2 830</td>
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

            <div class="hero-content__poetic_poem" lang="ru">
                <p>В краю вершин крутых и гордых,
                    <br>Где у сердец особый пыл,
                    <br>Я звезды пил из речек горных,
                    <br>Из родников студеных пил</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов</p>
                </div>
            </div>

            <div class="hero-content__poetic_poem" lang="en">
                <p>I’ve drunk the stars from mountain streams,
                    <br>From sources crisp and cold,
                    <br>In regions where each summit gleams
                    <br>And hearts are proud and bold.</p>

                <div class="hero-content__poetic_author">
                    <p>Rasul Gamzatov</p>
                </div>
            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>