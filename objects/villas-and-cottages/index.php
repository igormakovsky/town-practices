<?php
$id = 'villas-and-cottages';
$parent = 'object';
$title_ru = 'Виллы и коттеджи';
$title_en = 'Villas and cottages';
$description_ru = 'Обособленная резиденция в горах';
$description_en = 'Detached residence in the mountains';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Виллы и коттеджи</h1>
            <h1 lang="en">Villas and cottages</h1>
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
            <h2 lang="ru">Виллы и коттеджи</h2>
            <h3 lang="ru">Обособленная резиденция в горах</h3>
            <h2 lang="en">Villas and cottages</h2>
            <h3 lang="en">Detached residence in the mountains</h3>
        </div>

        <div class="hero-content__list">
            <ul lang="ru">
                <li>Близость туристско-рекреационной зоны</li>
                <li>3 виллы площадью 500 м<sup>2</sup></li>
                <li>7 коттеджей площадью 250 м<sup>2</sup></li>
                <li>Современный интерьер и оборудование</li>
                <li>Обособленность относительно соседей</li>
                <li>Транспортная доступность</li>
                <li>Мягкий окружающий климат</li>
            </ul>
            <ul lang="en">
                <li>Proximity of the tourist and recreational area</li>
                <li>3 villas with total area of 500 m<sup>2</sup></li>
                <li>7 cottages with total area of 250 m<sup>2</sup></li>
                <li>Modern interior and equipment</li>
                <li>Complete privacy</li>
                <li>Easy access to public transportation</li>
                <li>Pleasant climate</li>
            </ul>
        </div>

        <div class="hero-content__table">

            <table lang="ru">
                <tr>
                    <th>Общая площадь</th>
                    <th>Количество</th>
                    <th>Средняя стоимость аренды</th>
                    <th>Среднегодовая загрузка</th>
                </tr>
                <tr>
                    <td>
                        <nobr>3 250 м<sup>2</sup></nobr>
                    </td>
                    <td>10</td>
                    <td>20 000 ₽ / сутки</td>
                    <td>56,6%</td>
                </tr>
            </table>

            <table lang="en">
                <tr>
                    <th>Total area</th>
                    <th>Quantity</th>
                    <th>Average rent price</th>
                    <th>Annual uptake</th>
                </tr>
                <tr>
                    <td>
                        <nobr>3 250 m<sup>2</sup></nobr>
                    </td>
                    <td>10</td>
                    <td>20 000 ₽ / day</td>
                    <td>56,6%</td>
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
                <p>И глянь в окно: какая там погода,
                    <br>Туманна ли округа иль светла?
                    <br>Метет ли снег до края небосвода
                    <br>Иль катятся дождинки вдоль стекла?</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов</p>
                </div>

            </div>

            <div lang="en" class="hero-content__poetic_poem">
                <p>From your window scan the heavens—
                    <br>Are they dim or blue or bright?
                    <br>Does thick snow hide hill and heather
                    <br>Or does sparkling rain delight?</p>

                <div class="hero-content__poetic_author">
                    <p>Rasul Gamzatov</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>