<?php

$id = 'familia-cluster'; // id страницы
$parent = 'practices'; // родительский элемент

require $_SERVER['DOCUMENT_ROOT'].'/includes/vars.php';

$title = $practice_6_id;
$practice_title = $practice_6; // название практики

$oblast = $practice_6_oblast; // область
$oblast_id = $practice_6_oblast_id;
$town = $practice_6_town;
$town_id = $practice_6_town_id; // город
$geotag = ''; //

$description = 'Описание страницы'; // описание для страницы и поисковиков
$keywords = $oblast.$town.'стартап, школа'; // ключевые слова для поиска

require $docroot.'includes/head.php';

$practice_type_a = $type_1;
$practice_type_a_id = $practice_6_type; // тип практики №1

$practice_type_2 = $type_0; // тип практики №2
$practice_type_3 = $type_0; // тип практики №3

$date_begin = '2017'; // дата начала практики
$date_end = 'настоящее время'; // дата завершения практики

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

    <section class="practice-hero">

        <div id="title" class="practice-hero__title">
            <h1>
                <?=$project_title?>
            </h1>
        </div>

        <div class="heroimage">
            <img src="img/hero-image.jpg" srcset="img/hero-image@2x.jpg 2x">
        </div>

    </section>

    <section class="practice-content">

        <p class="small">Название практики</p>
        <h1>
            <?=$practice_title?>
        </h1>

        <p class="small">Область, город</p>
        <p>
            <?=$oblast.', город '.$town?>
        </p>

        <p class="small">Тема</p>
        <p>
            <?=$practice_type_a?>
        </p>

        <p class="small">Срок реализации</p>
        <p>
            <?=$date_begin.' – '.$date_end?>
        </p>

        <p class="small">Главная идея</p>
        <p>Объединить шесть исторических домов в единый туристический кластер</p>
        
        <div class="video">
            <iframe width="800" height="450" src="https://www.youtube.com/embed/oYa2BXpkYvQ?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>

        <p class="small">Организация процесса</p>
        <ol>
            <li>Экспедиция по домам, изучение потенциала территории</li>
            <li>Обсуждение с активными жителями города, выявление смыслов территории</li>
            <li>Определение концепции «Фамилия»: каждый дом – это история семьи, фамилии (дом Лехова, дом Красавина, дом Хромулина и др.), для каргопольцев очень важна тема фамилии, семейные корни, в этом проявляется идентичность территории</li>
            <li>Разработка фирменного стиля от дизайнера</li>
            <li>Подготовка презентации, выполненной в концепции фирменного стиля, которую можно показывать потенциальным инвесторам</li>
            <li>Как итог: создание продукта – кластера «Фамилия» - который привлечет в город потенциальных инвесторов и поможет отреставрировать старые исторические дома, придав им новую жизнь.</li>

        </ol>

        <p class="small">Неожиданные решения</p>
        <p>
            Объединение шести домов в один туристический кластер «Фамилия», который сможет сделать территорию туристически привлекательной и узнаваемой
        </p>

        <p class="small">Значение для города <em>(что изменилось для жителей)</em></p>
        <p>Разрушенные дома приобретают новую жизнь, проще получить деньги на реставрацию домов и привлечь в город инвесторов. Дома превращаются из заброшенных и никому не нужных в привлекательные туристические объекты,  которые можно посещать всей семьей, появляются дополнительные площадки для досуга.
</p>

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