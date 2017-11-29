<?php

$id = 'kolomna'; // id страницы
$parent = 'practices'; // родительский элемент

require $_SERVER['DOCUMENT_ROOT'].'/includes/vars.php';

$title = 'Музейно-творческий кластер «Коломенский посад»';
$description = 'Описание страницы'; // описание для страницы и поисковиков
$keywords = 'коломна'; // ключевые слова для поиска

require $docroot.'includes/head.php';

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

?>

    <script>
        $(document).ready(
            function() {
                var town = getObjects(data, 'id', "<?=$id?>")[0] // Returns an array of matching objects
                $('.title-title').html(town.title)
            }
        )
    </script>

    <section class="hero">

        <!-- <div id="title" class="hero__title">
            <h1 class="town-title"></h1>
        </div> -->

        <div class="heroimage">
            <img src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="content title">

        <p class="small">Название практики</p>
        <h1 class="title-title"></h1>

        <p class="small">Тема</p>
        <ul class="title-tags">
            <li>
                <?=$type_social?>
            </li>
            <li>
                <?=$type_gastronomy?>
            </li>
            <li>
                <?=$type_tourism?>
            </li>
            <li>
                <?=$type_culture?>
            </li>
        </ul>

        <p class="small">Срок реализации</p>
        <p class="title-date">
            с 2008 года — по настоящее время
        </p>

    </section>

    <section class="content text">

        <h2>Город купеческих традиций</h2>
        <p>
            В кругу архитекторов его называют «Прикамской Барселоной» за особняки в стиле модерн, соседи приезжают сюда на свидание с купеческим городом, сами жители обожают Каму, именитых земляков и событийные активности, а бизнес все чаще рассматривает его как выгодную экономическую площадку. После забвения в советскую эпоху Сарапул вновь расправляет плечи, опираясь на предпринимательский дух конкуренции и сотрудничества.
        </p>

    </section>

    <!--<section class="content-fullwidth">
        
        <img src="img/wide-1.jpg">
        
        <div class="author">
            <p></p>
        </div>
        
    </section> -->

    <section class="content-citation">

        <p class="content-citation__text">
            Перспективы для Сарапула с точки зрения туристической дестинации существуют и реализовываются. Если ранее было 12 заходов туристских судов в город, то сейчас уже 100. Это очень здорово. Мы и позиционируем Сарапул как точку прибытия круизных судов
        </p>
        <p class="content-citation__author">
            Николай Королев
        </p>
        <p class="content-citation__who">
            Заместитель руководителя Ростуризма
        </p>

    </section>
    
    <section class="content-carousel">

        <div class="photos" id="carousel">

            <div><img src="img/gallery-image-8.jpg" srcset="img/gallery-image-8@2x.jpg 2x">
                <p>
                    Фотограф — <a href="https://www.flickr.com/photos/ae11/27770836594/in/photolist-Jj1Ncu-hQZmzy-hDZxpH-YWR17u-rwbUr4-hNh3La-Eaubt1-hGRxzJ-r69rj-YWR1K3-SBDT3v-TDYtyB-TBxoTN-21AP3Zg-21AP5xX-MdP38o-21AP34i-XWiyaN-pq61n2-YftVkH-YsXRwX-vauP2L-YsXQZp-Z21j6Z-KZiR6E-KTpyQh-LoP9kH-LRLZKL-BUWRD7-YVKr6S-DQHHRj-UQZdkW-Z21i5a-pcYPSn-LptQzw-wQnidM-x7RRar-TNWwb3-TNWvQo-XWiyG9-TRMmTs-TRMkCb-THSktg-XTNEYY-z77PhY-zuGAS2-XTNDHS-M356yj-M36Cin-zMdjta">Александр Ермолаев</a> (flickr)
                </p>
            </div>
            <div><img src="img/gallery-image-1.jpg"></div>
            <div><img src="img/gallery-image-2.jpg">
                <p>Фотограф — Анастасия Обуденкова, 2014</p>
            </div>
            <div><img src="img/gallery-image-3.jpg">
                <p>Фотограф — Маковский Игорь, 2015</p>
            </div>
            <div><img src="img/gallery-image-4.jpg"></div>
            <div><img src="img/gallery-image-5.jpg"></div>
            <div><img src="img/gallery-image-6.jpg"></div>
            <div><img src="img/gallery-image-7.jpg"></div>

        </div>

        <nav class="carousel-btns">
            <div id="btn-left" class="btn-left"></div>
            <div id="btn-right" class="btn-right"></div>
        </nav>

    </section>

    <!-- <section class="content-video">
    
        <div class="video">
            <iframe width="800" height="450" src="https://www.youtube.com/embed/oYa2BXpkYvQ?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
    
    </section> -->

    <?php require $docroot.'includes/bottom.php'; ?>
