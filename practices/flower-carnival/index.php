<?php

$id = 'flower-carnival'; // id страницы
$parent = 'practices'; // родительский элемент

require $_SERVER['DOCUMENT_ROOT'].'/includes/vars.php';

$description = 'Описание страницы'; // описание для страницы и поисковиков
$keywords = 'сарапул, стартап, школа'; // ключевые слова для поиска

require $docroot.'includes/head.php';

$practice_type_a = $type_4;
$practice_type_a_id = $practice_1_type; // тип практики №1

$practice_type_2 = $type_0; // тип практики №2
$practice_type_3 = $type_0; // тип практики №3

$date_begin = 'Янверь 2017'; // дата начала практики
$date_end = 'август 2017'; // дата завершения практики

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

$link_1 = '1';
$link_2 = '4';
$link_3 = '6';
$link_4 = '7';
$link_5 = '';
$link_6 = '';
$link_7 = '';
$link_8 = '';
$link_9 = '';
$link_10 = '';

?>
    
<script>
	$(document).ready(
		function () {
			var town = getObjects(data, 'id', "<?=$id?>")[0] // Returns an array of matching objects
            $('.town-title').html(town.title),
            $('.town-descr').html(town.title)
		}
	)
</script>

    <section class="practice-hero">

        <div id="title" class="practice-hero__title">
            <h1 class="town-title">
                
            </h1>
        </div>

        <div class="heroimage">
            <img src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="practice-content">

        <p class="small">Название практики</p>
        <h1 class="town-title"></h1>

        <p class="small">Тема</p>
        <p>
            <?=$practice_type_a?>
        </p>

        <p class="small">Срок реализации</p>
        <p>
            <?=$date_begin.' – '.$date_end?>
        </p>

        <p class="small">Главная идея</p>
        <p>Событие международного уровня в маленьком городе: карнавал с вовлечением всех жителей города, привлечением участников из разных городов, обеспечивших практически полную загрузку гостиницам города.</p>

        <div class="video">
            <iframe width="800" height="450" src="https://www.youtube.com/embed/oYa2BXpkYvQ?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>

        <p class="small">Организация процесса</p>
        <ol>
            <li>Распространяется информация о фестивале в СМИ, социальных сетях и профильных группах по моде и стилю.</li>
            <li>Мастера из разных городов заявляют об участии, придумывают образы и сюжеты для выступления и выбирают моделей среди жителей Вятских Полян. Жители города участвуют в интернет-кастинге. Мастера и модели находят друг друга и до фестиваля поддерживают общение по интернету.</li>
            <li>Мастера изготавливают шляпы и костюмы.</li>
            <li>Жители города привлекают всех своих друзей и знакомых участвовать в карнавале, ведь они теперь модели. Жители вовлекаются, о фестивале узнает все больше народа.</li>
            <li>Участники из других городов приезжают в Вятские поляны, гостиницы обеспечиваются практически полной загрузкой, а пункты общественного питания – новыми клиентами.</li>
            <li>Мастера и модели знакомятся друг с другом лично и репетируют номера.</li>
            <li>Наступает первый день фестиваля – показ моделей. В зале не хватает мест, билеты распроданы, каждому хочется увидеть, как будет впервые дефилировать его подружка или сосед.</li>
            <li>Наступает второй день фестиваля – карнавальное шествие «накрывает» город, жители вовлечены в процесс, на улице атмосфера праздника.</li>
            <li>Лучшие шляпы попадают в «Дом шляп» - единственный в России музей головных уборов, в Вятских полянах появляется все больше новых экспонатов.</li>
            <li>Информация о фестивале активно публикуется в СМИ, о городе и его главном событии узнают на федеральном уровне.</li>
        </ol>

        <p class="small">Неожиданные решения</p>
        <p>Каждый житель города мог стать моделью и получить свою минуту славы. Вовлечение в фестиваль жителей, превращение их из пассивных зрителей в активных участников процесса.</p>

        <p class="small">Значение для города <em>(что изменилось для жителей)</em></p>
        <ol>
            <li>В Вятские Поляны приезжает большой поток туристов со всей России (Москва, Пермь, Киров, Тюмень, Великий Устюг, Ростов-на-Дону), гостиницы заполнены, в кафе очереди.</li>
            <li>Жители становятся не просто зрителями, а участниками и вовлечены в процесс. Это теперь и их праздник тоже, а значит, никто не захочет это разрушать и портить.</li>
            <li>В федеральных СМИ публикуется серия материалов о фестивале - о Вятских Полянах фестивале узнают в других городах.</li>
        </ol>

    </section>

    <section class="practice-content__carousel">

        <div class="photos" id="carousel">

            <div class="photo"><img src="img/gallery-image-1.jpg"></div>
            <div class="photo"><img src="img/gallery-image-2.jpg">
                <p class="small">Фотограф — Анастасия Обуденкова, 2014</p>
            </div>
            <div class="photo"><img src="img/gallery-image-3.jpg">
                <p class="small">Фотограф — Маковский Игорь, 2015</p>
            </div>
            <div class="photo"><img src="img/gallery-image-4.jpg"></div>
            <div class="photo"><img src="img/gallery-image-5.jpg"></div>
            <div class="photo"><img src="img/gallery-image-6.jpg"></div>
            <div class="photo"><img src="img/gallery-image-7.jpg"></div>

        </div>

        <nav class="carousel-btns">
            <div id="btn-left" class="btn-left"></div>
            <div id="btn-right" class="btn-right"></div>
        </nav>

    </section>

    <?php require $docroot.'includes/bottom.php'; ?>
