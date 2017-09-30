<?php
$id = 'sport';
$parent = 'object';
$title_ru = 'Активные виды отдыха';
$title_en = 'Recreational activities';
$description_ru = 'Летние и зимние, активные и экстремальные виды отдыха на любой вкус';
$description_en = 'Summer and winter recreational and extreme sports suited to every taste';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Активные виды отдыха</h1>
            <h1 lang="en">Recreational activities</h1>
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
            <h2 lang="ru">Активные виды отдыха</h2>
            <h3 lang="ru">Летние и зимние, активные<br>и экстремальные виды отдыха на любой вкус</h3>
            <h2 lang="en">Recreational activities</h2>
            <h3 lang="en">Summer and winter recreational<br>and extreme sports suited to every taste</h3>
        </div>

        <div class="hero-content__description">

            <p></p>

        </div>

        <div class="hero-content__list">
            <ul lang="ru">
                <li>Спортивный комплекс с футбольным полем</li>
                <li>Открытый теннисный корт</li>
                <li>Скейтпарк</li>
                <li>Стрелковый клуб (тир)</li>
                <li>Ледовый каток</li>
                <li>Сквал, моноски, телемарк, катание на санях и&nbsp;снегоходе</li>
                <li>Поездки на квадроциклах, джиппинг, маунтинбайк</li>
                <li>Спортивный альпинизм и скалолазание</li>
                <li>Парапланеризм</li>
                <li>Сноуборд</li>
                <li>Пейнтбол и страйкбол</li>
                <li>Пешие походы, велопоходы</li>
            </ul>
            <ul lang="en">
                <li>Sports complex with a football field</li>
                <li>Outdoor tennis court</li>
                <li>Skatepark</li>
                <li>Shooting range</li>
                <li>Ice skating rink</li>
                <li>Squalene, monoski, telemark, sleigh rides and&nbsp;snowmobiling</li>
                <li>Quad biking, jeeping, mountain biking</li>
                <li>Mountaineering and climbing</li>
                <li>Paragliding</li>
                <li>Snowboard</li>
                <li>Paintball and airsoft</li>
                <li>Hiking, biking</li>
            </ul>
        </div>

        <!-- <div class="hero-content__table">
        
            <table>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td>₽</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        
        </div> -->

        <div class="hero-content__carousel">

            <div class="photos" id="carousel">

                <div class="photo"><img src="/img/nature/nature-14.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-15.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-16.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-17.jpg"></div>

            </div>

            <nav class="carousel-btns">
                <div id="btn-left" class="btn-left"></div>
                <div id="btn-right" class="btn-right"></div>
            </nav>

        </div>

        <div class="hero-content__poetic">

            <div lang="ru" class="hero-content__poetic_poem">
                <p>Вершина далекая кажется близкою.
                    <br>С подножья посмотришь — рукою подать,
                    <br>Но снегом глубоким, тропой каменистою
                    <br>Идешь и идешь, а конца не видать.
                </p>
                <p>
                    И наша работа нехитрою кажется,
                    <br>А станешь над словом сидеть-ворожить,
                    <br>Не свяжется строчка, и легче окажется
                    <br>Взойти на вершину, чем песню сложить.</p>

                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов</p>
                </div>

            </div>

            <div lang="en" class="hero-content__poetic_poem">
                <p>The top is far seems near stands.
                    <br>From the berg foot you will look – by the arm to get,
                    <br>But by the deep snow, by the stone paths
                    <br>You go and go, and the end is not to see.
                </p>
                <p>And our work seems is not artful,
                    <br>And you will begin to sit-to muse,
                    <br>The line will not knit, and it will seems easier
                    <br>To ascend to the top, than a song to create.
                </p>
                <div class="hero-content__poetic_author">
                    <p>Rasul Gamzatov</p>
                </div>

            </div>

        </div>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>