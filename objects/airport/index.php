<?php
$id = 'airport';
$parent = 'object';
$title_ru = 'Аэропорт';
$title_en = 'Airport';
$description_ru = 'Концепция создания аэропорта';
$description_en = 'Airport creation concept';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Аэропорт</h1>
            <h1 lang="en">Airport</h1>
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
            <h2 lang="ru">Аэропорт</h2>
            <h3 lang="ru">Концепция создания</h3>
            <h2 lang="en">Airport</h2>
            <h3 lang="en">Creation concept</h3>
        </div>

        <div class="hero-content__poetic">

            <div lang="ru" class="hero-content__poetic_poem">
                <p>Я, как орел, парю весной
                    <br>Над весями твоими.
                    <br>И эти крылья за спиной —
                    <br>Твое святое имя</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов</p>
                </div>

            </div>

            <div lang="en" class="hero-content__poetic_poem">
                <p>I like an eagle soar in the spring
                    <br>Over yours heavies.
                    <br>And those wings behind is
                    <br>Your Holy name</p>

                <div class="hero-content__poetic_author">
                    <p>Rasul Gamzatov</p>
                </div>

            </div>

        </div>

        <!-- <div class="hero-content__carousel">
        
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
        
        </div> -->

        <!-- map-global -->

        <div class="hero-content__intermediate">

            <div class="hero-content__intermediate_map-global">
                <img lang="ru" src="img/map-global.jpg" srcset="img/map-global@2x.jpg 2x">
                <img lang="en" src="img/map-global-en.jpg" srcset="img/map-global-en@2x.jpg 2x">
            </div>

        </div>

        <div class="hero-content__title">
            <h2 lang="ru">Концепция аэропорта</h2>
            <h2 lang="en">Airport concept</h2>
        </div>

        <div class="hero-content__description">

            <p>
                <span lang="ru">«Малую авиацию нужно развивать прежде всего в&nbsp;отдаленных регионах, где она просто незаменима. Это важнейшая социальная и&nbsp;экономическая задача»
                <br>— В.В. Путин</span>
                <span lang="en">“We&nbsp;need to&nbsp;develop light aviation aircraft in&nbsp;the backcountry, where it&nbsp;is&nbsp;simply unexpendable. This is&nbsp;an&nbsp;important social and economic goal.”
                <br>— Vladimir Putin</span>
            </p>

        </div>

        <div class="hero-content__table">

            <table lang="ru">
                <tr>
                    <th>Наименование</th>
                    <th>Аэродром</th>
                    <th>Вертодром</th>
                </tr>
                <tr>
                    <th>Класс Аэродрома</th>
                    <td colspan="2">III класса (совместного базирования)</td>
                </tr>
                <tr>
                    <th>Размеры ВПП</th>
                    <td>L = 1 800 м, S = 45 м</td>
                    <td>L = 110 – 190 м,
                        <br><span class="regular">дополнительно оборудуются<br>посадочные площадки</span> 50×50 м</td>
                </tr>
                <tr>
                    <th>Тип ВПП</th>
                    <td colspan="2">ИВПП <span class="regular">(искусственная взлетно-посадочная полоса)</span></td>
                </tr>
                <tr>
                    <th>Тип воздушного судна</th>
                    <td>Воздушное судно 3-го класса</td>
                    <td>Вертолеты всех типов</td>
                </tr>
                <tr>
                    <th>Возможные к&nbsp;приему воздушные суда</th>
                    <td>Bombardier Q400, Bombardier CRJ200, Saab 2000, ATR 72-600, Falcon 50EX, С-80, АН-26-100 и ВС классом ниже</td>
                    <td>Ми-6, Ми-10, Ми-26, Ми-8, Ми-4, Ка-32, Ми-2, Ка-26, Ансат, Ми-34С, Robinson, Bell, Agusta, MD, Eurocopter</td>
                </tr>
            </table>

            <table lang="en">
                <tr>
                    <th>Name</th>
                    <th>Airport</th>
                    <th>Helipad</th>
                </tr>
                <tr>
                    <th>Airport class</th>
                    <td colspan="2">III class (joint deploying)</td>
                </tr>
                <tr>
                    <th>Airstrip length</th>
                    <td>L = 1 800 m, S = 45 m</td>
                    <td>L = 110 – 190 m,
                        <br><span class="regular">Landing sites</span> 50×50m <span class="regular">are&nbsp;additionally&nbsp;equipped</span></td>
                </tr>
                <tr>
                    <th>Type of&nbsp;airstrip</th>
                    <td colspan="2"><span class="regular">Artificial airstrip</span></td>
                </tr>
                <tr>
                    <th>Type of aircraft</th>
                    <td>3rd class aircraft</td>
                    <td>Helicopters of all types</td>
                </tr>
                <tr>
                    <th>Aircrafts applicable for receiving</th>
                    <td>Bombardier Q400, Bombardier CRJ200, Saab 2000, ATR 72-600, Falcon 50EX, С-80, АН-26-100 and ВС of lower classes</td>
                    <td>Mi-6, Mi-10, Mi-26, Mi-8, Mi-4, Ka-32, Mi-2, Ka-26, Ansat, Mi-34С, Robinson, Bell, Agusta, MD, Eurocopter</td>
                </tr>
            </table>

        </div>

        <!-- map-local -->

        <div class="hero-content__intermediate">

            <div class="hero-content__intermediate_map-local">
                <img src="img/map-local.jpg" srcset="img/map-local@2x.jpg 2x">

                <div class="dot align-right" data-tooltip-ru="Подъездная дорога" data-tooltip-en="Service road" style="right:26.5%; top:75%;">
                    <a href="#li-1"><span class="dot__number">1</span></a>
                </div>

                <div class="dot align-left" data-tooltip-ru="Главное здание аэропорта" data-tooltip-en="Airport central building" style="right:27%; top:53%;">
                    <a href="#li-2"><span class="dot__number">2</span></a>
                </div>

                <div class="dot align-left" data-tooltip-ru="Склад ГСМ" data-tooltip-en="Fuel storage" style="right:24%; top:42%;">
                    <a href="#li-3"><span class="dot__number">3</span></a>
                </div>

                <div class="dot align-right" data-tooltip-ru="Перрон" data-tooltip-en="Platform" style="right:32%; bottom:30.5%;">
                    <a href="#li-4"><span class="dot__number">4</span></a>
                </div>

                <div class="dot align-right" data-tooltip-ru="Диспетчерская вышка" data-tooltip-en="Control tower" style="right:30%; top:43.5%; z-index:11;">
                    <a href="#li-5"><span class="dot__number">5</span></a>
                </div>

                <div class="dot align-right" data-tooltip-ru="Ремонтный цех" data-tooltip-en="Repair area" style="right:34%; top:43%; z-index:10;">
                    <a href="#li-6"><span class="dot__number">6</span></a>
                </div>

                <div class="dot align-right" data-tooltip-ru="Рулежная дорожка" data-tooltip-en="Steering track" style="right:40.3%; top:50%;">
                    <a href="#li-7"><span class="dot__number">7</span></a>
                </div>

                <div class="dot align-right" data-tooltip-ru="Взлетно- посадочная полоса" data-tooltip-en="Airstrip" style="left:26%; top:35%;">
                    <a href="#li-8"><span class="dot__number">8</span></a>
                </div>

                <div class="dot align-left" data-tooltip-ru="Вертодром" data-tooltip-en="Helipad" style="right:44.25%; top:37.5%;">
                    <a href="#li-9"><span class="dot__number">9</span></a>
                </div>

                <div class="dot align-left" data-tooltip-ru="Стоянка судов" data-tooltip-en="Parking spaces" style="left:42%; top:29%;">
                    <a href="#li-10"><span class="dot__number">10</span></a>
                </div>

            </div>

        </div>

        <div class="hero-content__title">
            <h3 lang="ru">Схема аэродрома и аэропорта в случае совместного базирования</h3>
            <h3 lang="en">Diagram of the airfield and airport in the case of joint deploying</h3>
        </div>

        <div class="hero-content__list">
            <ol>
                <li id="li-1">
                    <span lang="ru">Подъездная дорога</span>
                    <span lang="en">Service road</span>
                </li>
                <li id="li-2">
                    <span lang="ru">Здание аэропорта с торговым центром и&nbsp;техническими службами</span>
                    <span lang="en">The airport building with a shopping centre and technical services</span>
                </li>
                <li id="li-3">
                    <span lang="ru">Склад ГСМ</span>
                    <span lang="en">Fuel storage</span>
                </li>
                <li id="li-4">
                    <span lang="ru">Перрон с местами стоянки воздушных судов</span>
                    <span lang="en">Platform with aircraft parking spaces</span>
                </li>
                <li id="li-5">
                    <span lang="ru">Диспетчерская вышка</span>
                    <span lang="en">Control tower</span>
                </li>
                <li id="li-6">
                    <span lang="ru">Ремонтно-хозяйственная зона</span>
                    <span lang="en">Repair and utility area</span>
                </li>
                <li id="li-7">
                    <span lang="ru">Главная рулежная дорожка</span>
                    <span lang="en">The main steering track</span>
                </li>
                <li id="li-8">
                    <span lang="ru">ИВПП (искусственная взлетно-посадочная полоса)</span>
                    <span lang="en">Artificial airstrip</span>
                </li>
                <li id="li-9">
                    <span lang="ru">Вертодром</span>
                    <span lang="en">Helipad</span>
                </li>
                <li id="li-10">
                    <span lang="ru">Места стоянки воздушных судов</span>
                    <span lang="en">Aircraft parking spaces</span>
                </li>
            </ol>
        </div>

        <!-- coverage -->

        <div class="hero-content__intermediate">

            <div class="hero-content__intermediate_coverage">
                <img lang="ru" src="img/coverage.jpg" srcset="img/coverage@2x.jpg 2x">
                <img lang="en" src="img/coverage-en.jpg" srcset="img/coverage-en@2x.jpg 2x">
            </div>

        </div>

        <div class="hero-content__title">
            <h2 lang="ru">Зона охвата</h2>
            <h3 lang="ru">Внутренние перевозки</h3>
            <h2 lang="en">Coverage</h2>
            <h3 lang="en">Domestic flights</h3>
        </div>

        <div class="hero-content__table">

            <table lang="ru" class="coverage">
                <tr>
                    <th>0 – 500 км</th>
                    <th>500 – 1000 км</th>
                    <th>1000 – 1600 км</th>
                </tr>
                <tr>
                    <td>Махачкала
                        <br>Грозный
                        <br>Владикавказ
                        <br>Ставрополь
                        <br>Астрахань</td>
                    <td>Волгоград
                        <br>Ростов на Дону
                        <br>Краснодар
                        <br>Саратов</td>
                    <td>Тула
                        <br>Самара
                        <br>Оренбург
                        <br>Симферополь
                        <br>Липецк
                        <br>Москва</td>
                </tr>
            </table>
               
            <table lang="en" class="coverage">
                <tr>
                    <th>0 – 500 km</th>
                    <th>500 – 1000 km</th>
                    <th>1000 – 1600 km</th>
                </tr>
                <tr>
                    <td>Makhachkala
                        <br>Grozny
                        <br>Vladikavkaz
                        <br>Stavropol
                        <br>Astrakhan</td>
                    <td>Volgograd
                        <br>Rostov-on-Don
                        <br>Krasnodar
                        <br>Saratov</td>
                    <td>Tula
                        <br>Samara
                        <br>Orenburg
                        <br>Simferopol
                        <br>Lipetsk
                        <br>Moscow</td>
                </tr>
            </table>

        </div>

        <div class="hero-content__title">
            <h2 lang="ru"></h2>
            <h3 lang="ru">Внешние перевозки</h3>
            <h2 lang="en"></h2>
            <h3 lang="en">International flights</h3>
        </div>

        <div class="hero-content__table">

            <table lang="ru" class="coverage">
                <tr>
                    <th>0 – 500 км</th>
                    <th>500 – 1000 км</th>
                    <th>1000 – 1600 км</th>
                </tr>
                <tr>
                    <td>Баку
                        <br>Ереван
                        <br>Тбилиси
                        <br>Актау</td>
                    <td>Атырау
                        <br>Багдад
                        <br>Тегеран</td>
                    <td>Дамаск
                        <br>Ашхабад
                        <br>Анкара
                        <br>Стамбул
                        <br>Кишинев
                        <br>Киев</td>
                </tr>
            </table>
               
            <table lang="en" class="coverage">
                <tr>
                    <th>0 – 500 km</th>
                    <th>500 – 1000 km</th>
                    <th>1000 – 1600 km</th>
                </tr>
                <tr>
                    <td>Baku
                        <br>Erevan
                        <br>Tbilisi
                        <br>Aktau</td>
                    <td>Atyrau
                        <br>Bagdad
                        <br>Tehran</td>
                    <td>Damascus
                        <br>Ashkhabad
                        <br>Ankara
                        <br>Istanbul
                        <br>Kishinev
                        <br>Kiev</td>
                </tr>
            </table>

        </div>

        <div class="hero-content__poetic">

            <div lang="ru" class="hero-content__poetic_poem">
                <p>Люди, я прошу вас, ради бога,
                    <br>Не стесняйтесь доброты своей.
                    <br>На земле друзей не так уж много:
                    <br>Опасайтесь потерять друзей</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов</p>
                </div>

            </div>

            <div lang="en" class="hero-content__poetic_poem">
                <p>Do not ever be reluctant
                    <br>Loving kindness to display!
                    <br>Never are true friends abundant,
                    <br>Do not let them fall away!</p>

                <div class="hero-content__poetic_author">
                    <p>Rasul Gamzatov</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>