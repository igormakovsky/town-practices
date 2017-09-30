<?php
$id = 'ski';
$parent = 'object';
$title_ru = 'Горнолыжный комплекс';
$title_en = 'Ski resort';
$description_ru = 'Один из основных зимних центров притяжения';
$description_en = 'One of the main winter ski centers';
$keywords_ru = '';
$keywords_en = '';

require $_SERVER['DOCUMENT_ROOT'].'/'.'includes/head.php';?>

    <section class="hero-image">

        <div id="logo" class="hero-image__matlas-logo_light exited">
        </div>

        <div id="title" class="hero-image__title exited">
            <h1 lang="ru">Горнолыжный комплекс</h1>
            <h1 lang="en">Ski resort</h1>
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
            <h2 lang="ru">Горнолыжный комплекс</h2>
            <h3 lang="ru">Один из основных зимних центров притяжения</h3>
            <h2 lang="en">Ski resort</h2>
            <h3 lang="en">One of the main winter ski centers</h3>
        </div>

        <div class="hero-content__description">

            <p></p>

        </div>

        <!-- <div class="hero-content__list">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div> -->

        <div class="hero-content__illustration">

            <div class="image" style="width:900px; margin-bottom:10rem;">
                <img src="img/slope.jpg" srcset="img/slope@2x.jpg 2x">
            </div>

            <div class="absolute" style="left:7rem; top:-3.5rem; width:10rem;">

                <p>
                    <span lang="ru">Горнолыжные трассы расположены на северном склоне</span>
                    <span lang="en">The ski runs<br>are located<br>on the northern slope</span>
                </p>

            </div>

            <div class="absolute" style="left:7rem; top:9.5rem; width:10rem;">

                <p>
                    <span lang="ru"><a href="#snow">Система искусственного снегообразования</a>&nbsp;— сезон до&nbsp;6&nbsp;месяцев</span>
                    <span lang="en"><a href="#snow">Artificial snow generation system</a>&nbsp;—<br>season up to&nbsp;6&nbsp;months</span>
                </p>

            </div>

            <div id="top-gondola" class="pin" style="right:13.95rem; top:0rem;">
                <a href="#gondola"><img src="/img/pin-brown.svg"></a>
                <div class="pin__note" style="right:5.5rem; top:-1.7rem; text-align:right;">
                    <h5 class="brown">
                    <span lang="ru"><a href="#gondola">Гондольная<br>канатная<br>дорога</a></span>
                    <span lang="en"><a href="#gondola">Gondola<br>cable&nbsp;run</a></span>
                    </h5>
                    <h5 class="brown meters align-right">
                    <span lang="ru">+2750 м</span>
                    <span lang="en">+2750 m</span>
                    </h5>
                </div>
            </div>

            <div id="top-chair" class="pin" style="left:8.65rem; bottom:13.4rem;">
                <a href="#chair"><img src="/img/pin-blue.svg"></a>
                <div class="pin__note" style="left:-1rem; top:-10rem;">
                    <h5 class="light-blue">
                    <span lang="ru"><a href="#chair">Кресельная канатная дорога</a></span>
                    <span lang="en"><a href="#chair">Chairlift run</a></span>
                    </h5>
                    <h5 class="light-blue meters">+1900 m</h5>
                </div>
            </div>

            <div class="pin pin-start" style="left:7rem; bottom:1.5rem;">
                <img class="scale" src="/img/pin-start.svg">
                <div class="pin__note" style="left:1.4rem; top:6rem;">
                    <h5 class="light-blue">
                    <span lang="ru">Зона выката</span>
                    <span lang="en">Overrun area</span>
                    </h5>
                    <h5 class="light-blue meters">
                    <span lang="ru">+1800 м</span>
                    <span lang="en">+1800 m</span>
                    </h5>
                </div>
            </div>

        </div>

        <div id="chair" class="hero-content__title">
            <div style="width:3rem; height:auto; margin:0 auto;">
                <a href="#top-chair"><img class="scale__bottom" src="/img/pin-blue.svg"></a>
            </div>
            <h3 class="light-blue">
            <span lang="ru">Кресельная канатная дорога, 1-я очередь</span>
            <span lang="en">Chairlift run, 1st phase</span>
            </h3>
        </div>

        <div class="hero-content__table">

            <table class="mini" lang="ru">
                <tr>
                    <th>Протяженность</th>
                    <th>Горнолыжные трассы</th>
                    <th>Число одновременно катающихся</th>
                </tr>
                <tr>
                    <td>0,9 км</td>
                    <td>1,9 км</td>
                    <td>300 человек</td>
                </tr>
            </table>

            <table class="mini" lang="en">
                <tr>
                    <th>Length</th>
                    <th>Ski runs</th>
                    <th>Max. number of skiers</th>
                </tr>
                <tr>
                    <td>0,9 km</td>
                    <td>1,9 km</td>
                    <td>300 people</td>
                </tr>
            </table>

        </div>

        <div id="gondola" class="hero-content__title">
            <div style="width:3rem; height:auto; margin:0 auto;">
                <a href="#top-gondola"><img class="scale__bottom" src="/img/pin-brown.svg"></a>
            </div>
            <h3>
            <span lang="ru">Гондольная канатная дорога, 2-я очередь</span>
            <span lang="en">Gondola cable run, 2nd phase</span>
            </h3>
        </div>

        <div class="hero-content__table">

            <table class="mini" lang="ru">
                <tr>
                    <th>Протяженность</th>
                    <th>Горнолыжные трассы</th>
                    <th>Число одновременно катающихся</th>
                </tr>
                <tr>
                    <td>6,8 км</td>
                    <td>16,3 км</td>
                    <td>2000 человек</td>
                </tr>
            </table>

            <table class="mini" lang="en">
                <tr>
                    <th>Length</th>
                    <th>Ski runs</th>
                    <th>Max. number of skiers</th>
                </tr>
                <tr>
                    <td>6,8 km</td>
                    <td>16,3 km</td>
                    <td>2000 people</td>
                </tr>
            </table>

        </div>

        <!-- <div class="hero-content__description">
        
            <p>Система искусственного снегообразования&nbsp;(СИС)&nbsp;— сезон до&nbsp;6&nbsp;месяцев</p>
        
        </div> -->

        <div id="snow" class="hero-content__illustration">

            <div class="image" style="width:900px; margin:10rem auto;">
                <img lang="ru" src="img/temperature-ru.png">
                <img lang="en" src="img/temperature-en.png">
            </div>

        </div>

        <div class="hero-content__carousel">

            <div class="photos" id="carousel">

                <div class="photo"><img src="/img/nature/nature-15.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-14.jpg"></div>
                <div class="photo"><img src="/img/nature/nature-4.jpg"></div>

            </div>

            <nav class="carousel-btns">
                <div id="btn-left" class="btn-left"></div>
                <div id="btn-right" class="btn-right"></div>
            </nav>

        </div>

        <!-- <div class="hero-content__poetic">
        
            <div class="hero-content__poetic_poem">
                <p></p>
        
                <div class="hero-content__poetic_author">
                    <p>Расул Гамзатов
                        <br><span class="title">Вершина далекая кажется близкою</span>
                        <br>(отрывок)
                        <br>1900</p>
                </div>
        
            </div>
        
        </div> -->

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>