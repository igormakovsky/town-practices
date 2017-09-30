<?php
$id = 'commercial';
$parent = 'object';
$title_ru = 'Коммерческие площади';
$title_en = 'Commercial spaces';
$description_ru = 'Непревзойденные кулинарные шедевры, колоритный интерьер и первоклассное обслуживание';
$description_en = 'Unequalled fine cuisine, picturesque interior and first class service';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Коммерческие площади</h1>
            <h1 lang="en">Commercial spaces</h1>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__commercial darker">
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
            <h2 lang="ru">Коммерческие площади</h2>
            <h3 lang="ru">Непревзойденные кулинарные шедевры,<br>колоритный интерьер и&nbsp;первоклассное обслуживание</h3>
            <h2 lang="en">Commercial spaces</h2>
            <h3 lang="en">Unequalled fine cuisine, picturesque interior<br>and first class service</h3>
        </div>

        <div class="hero-content__description">

            <p>
                <span lang="ru">Ввиду постоянного туристического потока и высокой проходимости гостиничного комплекса, представляемые в аренду площади крайне привлекательны для организации магазинов, предприятий общественного питания и обслуживания, а также торговых точек формата «стрит-ритейл»</span>
                <span lang="en">Due to&nbsp;the large number of&nbsp;tourists and high level of&nbsp;publicity of&nbsp;the hotel complex, the rentable areas are extremely attractive for shops, public catering and service organizations, as&nbsp;well as&nbsp;&laquo;street retail&raquo; outlets.</span>
            </p>

        </div>

        <!-- <div class="hero-content__list">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div> -->

        <div class="hero-content__table">

            <table class="mini" lang="ru">
                <tr>
                    <th>Общая площадь</th>
                    <th>Средняя ставка аренды</th>
                </tr>
                <tr>
                    <td>6 800 м<sup>2</sup></td>
                    <td>15 000 ₽ м<sup>2</sup>&nbsp;<span class="regular">/ сутки</span></td>
                </tr>
            </table>

            <table class="mini" lang="en">
                <tr>
                    <th>Total area</th>
                    <th>Average rental rate</th>
                </tr>
                <tr>
                    <td>6 800 m<sup>2</sup></td>
                    <td>15 000 ₽ m<sup>2</sup>&nbsp;<span class="regular">/ day</span></td>
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
                <p>Людской души сложна природа,—
                    <br>Я пил с друзьями заодно
                    <br>В час радости — бузу из меда,
                    <br>В час горя — горькое вино
                </p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов</p>
                </div>

            </div>

            <div class="hero-content__poetic_poem" lang="en">
                <p>The soul of Man is hard to span —
                    <br>I’ve drunk with friends of mine
                    <br>In times of gladness — honeymead,
                    <br>In sad times — bitter wine.
                </p>

                <div class="hero-content__poetic_author">
                    <p>Rasul Gamzatov</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>