<?php
$year = '1985';
$id = 'index';
$parent = 'object';
$title_ru = 'Матлас';
$title_en = 'Matlas';
$description_ru = 'Всесезонный туристско-рекреационный комплекс';
$description_en = 'All-season tourist and recreational complex';
$keywords_ru = 'кейвордс на русском';
$keywords_en = 'keywords on english';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';
?>

    <section class="hero-image">

        <div id="language-switch" class="hero-image__language-switch">
            <form action="/includes/switch_languages.php" method="post" id="switch-lang-form">
                <input type="hidden" name="lang" value="<?=!ru()?'ru':'en'?>">
                <a href="#" id="switch-lang">
                    <span lang="ru">english<br>version</span>
                    <span lang="en">русская<br>версия</span>
                </a>
            </form>
        </div>

        <div id="logo" class="hero-image__matlas-logo_light exited index"></div>

        <div id="title" class="hero-image__title exited index">
            <h1>
                <span lang="ru">Всесезонный<br>туристско-рекреационный<br>комплекс</span>
                <span lang="en">All-season<br>tourist and recreational<br>complex</span>
            </h1>
        </div>

        <div id="hero-image" class="hero-image__photo hero-image__matlasresort index darker">
            <img style="width:100%;" src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

        <div class="hero-content__poetic" style="margin-top:0rem;">

            <div class="hero-content__poetic_poem" lang="ru">
                <p>О, родина,
                    <br>Под гром твоих колоколов
                    <br>Твое я славлю имя.
                    <br>И нет на свете слаще слов,
                    <br>И звука нет любимей</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов</p>
                </div>

            </div>

            <div class="hero-content__poetic_poem" lang="en">
                <p>
                    Oh the motherland...
                    <br>Under the thunder of your bells
                    <br>I praise your name.
                    <br>And there is no a sweeter words,
                    <br>And there is no a sound loved</p>

                <div class="hero-content__poetic_author">
                    <p>Rasul Gamzatov</p>
                </div>
            </div>

        </div>

        <!-- -->

        <div class="hero-content__intermediate" style="margin:0 auto;">

            <div class="hero-content__intermediate_map-main">
                <img src="img/wireframe-map.jpg" srcset="img/wireframe-map@2x.jpg 2x">

                <div class="dot align-left" data-tooltip="Гостиничный комплекс 5*" data-tooltip-en="Hotel complex&nbsp;5*" style="left:23.5%; top:31%;">
                    <a href="#li-1"><span class="dot__number">1</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Гостиничный комплекс 4*" data-tooltip-en="Hotel complex 4*" style="left:45.9%; top:49%;">
                    <a href="#li-2"><span class="dot__number">2</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Апартотель" data-tooltip-en="Aparthotel" style="right:28%; top:55%;">
                    <a href="#li-3"><span class="dot__number">3</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Виллы" data-tooltip-en="Villas" style="left:7%; top:50%;">
                    <a href="#li-4"><span class="dot__number">4</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Коттеджи" data-tooltip-en="Cottages" style="left:36%; top:17%;">
                    <a href="#li-4"><span class="dot__number">4</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Бальнеология" data-tooltip-en="Balneology" style="right:36%; top:43%;">
                    <a href="#li-5"><span class="dot__number">5</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Гольф клуб" data-tooltip-en="Golf club" style="right:4%; top:71%;">
                    <a href="#li-6"><span class="dot__number">6</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Конно-спортивный клуб" data-tooltip-en="Equestrian club" style="right:10%; top:84%;">
                    <a href="#li-7"><span class="dot__number">7</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Детский инновационный центр" data-tooltip-en="Children's innovative center" style="right:38%; top:54%; z-index:101;">
                    <a href="#li-8"><span class="dot__number">8</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Спортивный комплекс" data-tooltip-en="Activity center" style="right:40%; top:60%; z-index:100;">
                    <a href="#li-9"><span class="dot__number">9</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Горнолыжный комплекс" data-tooltip-en="Ski resort" style="right:45%; top:71%;">
                    <a href="#li-10"><span class="dot__number">10</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Ресторан" data-tooltip-en="Restaurant" style="left:34.5%; top:5.5%;">
                    <a href="#li-11"><span class="dot__number">11</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Мечеть" data-tooltip-en="Mosque" style="left:28.5%; top:44.5%;">
                    <a href="#li-12"><span class="dot__number">12</span></a>
                </div>

                <div class="dot align-right" data-tooltip="Православная часовня" data-tooltip-en="Orthodox chapel" style="right:39%; top:30%;">
                    <a href="#li-13"><span class="dot__number">13</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Вертолетная площадка" data-tooltip-en="Helicopter pad" style="left:8.5%; top:83%;">
                    <a href="#li-14"><span class="dot__number">14</span></a>
                </div>

                <div class="dot align-left" data-tooltip="Парковки" data-tooltip-en="Parking lots" style="right:32%; top:63%;">
                    <a href="#li-15"><span class="dot__number">15</span></a>
                </div>

            </div>

        </div>

        <div class="hero-content__title" style="margin:7rem auto 4rem;">
            <h2 lang="ru">Всесезонный курорт «Матлас»</h2>
            <h3 lang="ru">Основные характеристики объектов курорта</h3>
            <h2 lang="en">All-season resort “Matlas”</h2>
            <h3 lang="en">Main characteristics of the resort facilities</h3>
        </div>

        <div class="hero-content__table">

            <table class="hero-content__table main">
                <tr lang="ru">
                    <th></th>
                    <th>Наименование</th>
                    <th>Количество, шт.</th>
                    <th>Полезная площадь,&nbsp;м<sup>2</sup></th>
                    <th>Строительная площадь,&nbsp;м<sup>2</sup></th>
                </tr>
                <tr lang="en">
                    <th></th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Floorspace,&nbsp;m<sup>2</sup></th>
                    <th>Construction area,&nbsp;m<sup>2</sup></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td colspan="4">
                        <a id="li-1" href="/objects/hotel-five-stars/">
                            <span lang="ru">Гостиничный комплекс 5*</span>
                            <span lang="en">Hotel complex 5*</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">
                    <span lang="ru">— Номерной фонд</span>
                        <span lang="en">— Rooms</span>
                        </span>
                    </td>
                    <td>60</td>
                    <td>2&nbsp;400</td>
                    <td>4&nbsp;000</td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">
                    <span lang="ru">— СПА и Детокс центр</span>
                        <span lang="en">— SPA and Detox center</span>
                        </span>
                    </td>
                    <td></td>
                    <td>1&nbsp;600</td>
                    <td>2&nbsp;000</td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">
                    <span lang="ru">— Конференц-зал</span>
                        <span lang="en">— Conference-hall</span>
                        </span>
                    </td>
                    <td></td>
                    <td>1&nbsp;200</td>
                    <td>1&nbsp;200</td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">
                    <span lang="ru">— Коммерческие площади</span>
                        <span lang="en">— Commercial area</span>
                        </span>
                    </td>
                    <td></td>
                    <td>960</td>
                    <td>1&nbsp;200</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td colspan="4">
                        <a id="li-2" href="/objects/hotel-four-stars/">
                            <span lang="ru">Гостиничный комплекс 4*</span>
                            <span lang="en">Hotel complex 4*</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">
                    <span lang="ru">— Номерной фонд</span>
                        <span lang="en">— Rooms</span>
                        </span>
                    </td>
                    <td>260</td>
                    <td>7&nbsp;280</td>
                    <td>10&nbsp;400</td>
                </tr>
                <tr>
                    <td></td>
                    <td><span class="regular">
                    <span lang="ru">— Коммерческие площади</span>
                        <span lang="en">— Commercial area</span>
                        </span>
                    </td>
                    <td></td>
                    <td>3&nbsp;680</td>
                    <td>4&nbsp;600</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><span id="li-3" class="regular">
                    <span lang="ru">Апартотель, номерной фонд</span>
                        <span lang="en">Aparthotel, room capacity</span>
                        </span>
                    </td>
                    <td>250</td>
                    <td>7&nbsp;000</td>
                    <td>8&nbsp;750</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        <a id="li-4" href="/objects/villas-and-cottages/">
                            <span lang="ru">Виллы и коттеджи</span>
                            <span lang="en">Villas and cottages</span>
                        </a>
                    </td>
                    <td>10</td>
                    <td>3&nbsp;250</td>
                    <td>3&nbsp;250</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        <a id="li-5" href="/objects/balneology/">
                            <span lang="ru">Бальнеологический (термальный) комплекс</span>
                            <span lang="en">Balneological (thermal) complex</span>
                        </a>
                    </td>
                    <td></td>
                    <td>2&nbsp;800</td>
                    <td>3&nbsp;500</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        <a id="li-6" href="/objects/golf/">
                            <span lang="ru">Гольф-клуб с полем для гольфа на&nbsp;18&nbsp;лунок&nbsp;(100&nbsp;га)</span>
                            <span lang="en">Golf club with&nbsp;18&nbsp;hole golf&nbsp;course (100&nbsp;ha)</span>
                        </a>
                    </td>
                    <td></td>
                    <td>1&nbsp;600</td>
                    <td>2&nbsp;000</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        <a id="li-7" href="/objects/horse-club/">
                            <span lang="ru">Конно-спортивный клуб</span>
                            <span lang="en">Equestrian club</span>
                        </a>
                    </td>
                    <td></td>
                    <td>640</td>
                    <td>800</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><span id="li-8" class="regular">
                    <span lang="ru">Детский инновационный центр</span>
                        <span lang="en">Children's innovative center</span>
                        </span>
                    </td>
                    <td></td>
                    <td>600</td>
                    <td>750</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>
                        <a id="li-9" href="/objects/sport/">
                            <span lang="ru">Спортивный комплекс</span>
                            <span lang="en">Sports complex</span>
                        </a>
                    </td>
                    <td></td>
                    <td>640</td>
                    <td>800</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td colspan="4">
                        <a id="li-10" href="/objects/ski/">
                            <span lang="ru">Горнолыжный комплекс</span>
                            <span lang="en">Ski resort</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>
                        <a id="li-11" href="/objects/commercial/">
                            <span lang="ru">Ресторан с панорамным видом</span>
                            <span lang="en">Restaurant with a panoramic view</span>
                        </a>
                    </td>
                    <td></td>
                    <td>800</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td><span id="li-12" class="regular">
                    <span lang="ru">Мечеть</span>
                        <span lang="en">Mosque</span>
                        </span>
                    </td>
                    <td></td>
                    <td>450</td>
                    <td>450</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td><span id="li-13" class="regular">
                    <span lang="ru">Православная часовня</span>
                        <span lang="en">Orthodox chapel</span>
                        </span>
                    </td>
                    <td></td>
                    <td>100</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td colspan="4"><span id="li-14" class="regular">
                    <span lang="ru">Вертолетная площадка</span>
                        <span lang="en">Helicopter pad</span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>15</td>
                    <td><span id="li-15" class="regular">
                    <span lang="ru">Парковки</span>
                        <span lang="en">Parking lots</span>
                        </span>
                    </td>
                    <td>500</td>
                    <td>12&nbsp;500</td>
                    <td>12&nbsp;500</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <span lang="ru">Итого</span>
                        <span lang="en">Total</span>
                    </td>
                    <td></td>
                    <td>47&nbsp;500</td>
                    <td>57&nbsp;300</td>
                </tr>

            </table>

        </div>

        <div class="hero-content__title" style="margin:7rem auto 4rem;">
            <h3 lang="ru">Главным преимуществом курорта Матлас является<br>его всесезонность и высочайшие стандарты сервиса</h3>
            <h3 lang="en">The main benefit of&nbsp;the&nbsp;Matlas Resort is that it&nbsp;is&nbsp;<span class="nobr">all-season</span> and offers an&nbsp;exemplary standard service</h3>
        </div>

        <!-- caucasus-map -->

        <div class="hero-content__intermediate">

            <div class="hero-content__intermediate_caucasus-map">
                <img lang="ru" src="img/caucasus-map-ru.jpg" srcset="img/caucasus-map-ru@2x.jpg 2x">
                <img lang="en" src="img/caucasus-map-en.jpg" srcset="img/caucasus-map-en@2x.jpg 2x">
            </div>

        </div>

        <div class="hero-content__description">

            <p>
                <span lang="ru">В окрестностях курорта находится <strong>более 150 памятников</strong> истории и культуры, а также большое количество уникальных природных достопримечательностей</span>
                <span lang="en">There are <strong>more than 150 historical and cultural monuments</strong> in the vicinity of the resort, as well as&nbsp;a&nbsp;large number of&nbsp;unique natural attractions.</span>
            </p>
            <p>
                <span lang="ru">Хунзахский район — один из древнейших центров Дагестана. Хунзаху <strong>— более 2400 лет</strong></span>
                <span lang="en">The Khunzakh region is&nbsp;one of&nbsp;the&nbsp;oldest centers of&nbsp;Dagestan. Khunzakh is&nbsp;<strong>more than 2,400 years</strong> old</span>
            </p>

        </div>

        <div class="hero-content__list">
            <ul>

                <li>
                    <span lang="ru">Курорт «Матлас» располагается на&nbsp;высокогорном Хунзахского плато на высоте <strong>1&nbsp;800&nbsp;метров</strong> над уровнем моря, <strong>в&nbsp;140&nbsp;километрах</strong> от Махачкалы.</span>
                    <span lang="en">The Matlas resort is&nbsp;located on&nbsp;the highlands of&nbsp;the Khunzakh plateau <strong>at&nbsp;1,800 meters</strong> above sea level and <strong>140 kilometers</strong> from Makhachkala</span>
                </li>
                <li>
                    <span lang="ru">На сравнительно небольшой территории района есть самые разнообразные и&nbsp;неповторимые уголки природы. Глубочайшие каньоны, изумительные по красоте высокогорные озера и&nbsp;водопады, сложные по строению горные массивы.</span>
                    <span lang="en">The region is&nbsp;small but offers a&nbsp;fantastic diversity of&nbsp;natural wonders: stunning deep canyons, Alpine lakes, waterfalls, and jagged mountain ranges.</span>
                </li>
                <li>
                    <span lang="ru">Такие факторы как наличие территорий для&nbsp;развития, идеальный горный рельеф, мягкие климатические условия, расположение в&nbsp;регионе, хорошо обеспеченном трудовыми ресурсами, будут способствовать успешному развитию комплекса.</span>
                    <span lang="en">The availability of&nbsp;land for development, the mountainous terrain, the mild climate, the excellent location, and the workforce will enable complex to&nbsp;grow and thrive.</span>
                </li>

            </ul>
        </div>

        <div class="hero-content__poetic" style="margin-top:0rem;">

            <div class="hero-content__poetic_poem" lang="ru">
                <p>Дагестан, все, что люди мне дали,
                    <br>Я по чести с тобой разделю,
                    <br>Я свои ордена и медали
                    <br>На вершины твои приколю</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов</p>
                </div>

            </div>

            <div class="hero-content__poetic_poem" lang="en">
                <p>The gifts that men on me bestow
                    <br>I share with you, my kin,
                    <br>And all my medals in a row
                    <br>Upon your peaks I pin</p>
                <div class="hero-content__poetic_author">
                    <p>Rasul Gamzatov</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>