<?php   
$id     = 'index'; // id страницы
$parent = ''; // родительский элемент

require $_SERVER['DOCUMENT_ROOT'] . '/includes/vars.php';

$keycolor = '#354452';
$seccolor = '#6895ab';
$title = $project_title;
$place = '';
$town = '';
$date = '';
$description = 'Интерактивная карта лучших практик малых городов';
$keywords = 'стартап, школа';

require $docroot . 'includes/head.php';

?>

<section class="width1000" style="height:12rem;">
    <h1 style="margin-top:5.5rem;">
        <?=$project_title;?>
    </h1>
    <p class="small">
        Проект создан на средства гранта президента РФ
    </p>
</section>

<section class="width1000" style="height:25rem;">
    <h3>Здесь большая карта</h3>
    <div id="mapid" style="height: 100%">

    </div>
</section>

<section class="index_list center" style="margin-top:5rem;">

    <h3>
        Выбор практик по типу деятельности
    </h3>

    <nav>
        <ul>
            <li><a class="chooser" href="#" id="choose_all">Показать все практики</a></li>
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_business_id;?>">
                    <?=$type_business;?>
                </a>
            </li>
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_social_id;?>">
                    <?=$type_social;?>
                </a>
            </li>
            <!-- <li>
                <a class="chooser" href="#" id="choose_<?=$type_education_id;?>">
                    <?=$type_education;?>
                </a>
            </li> -->
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_events_id;?>">
                    <?=$type_events;?>
                </a>
            </li>
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_gastronomy_id;?>">
                    <?=$type_gastronomy;?>
                </a>
            </li>
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_tourism_id;?>">
                    <?=$type_tourism;?>
                </a>
            </li>
            <li>
                <a class="chooser" href="#" id="choose_<?=$type_culture_id;?>">
                    <?=$type_culture;?>
                </a>
            </li>
        </ul>
    </nav>

    <!-- <script>
        $(document).ready(function() {
            var template = $('#template').html()
            Mustache.parse(template) // optional, speeds up future uses
            var output = Mustache.render(template, {
                practices: practicesListArray
            })
            if (document.getElementById('practicesList')) {
                document.getElementById('practicesList').innerHTML = output
            }
        })
    
    </script> -->

    <!-- <script id="template" type="x-tmpl-mustache">
        {{#practices}}
        <div class="list_card {{id}} {{types}}">
            <p><a href="{{link}}" class="">{{title}}</a></p>
        </div>
        {{/practices}}
    </script> -->

    <!-- <div class="list-container" id="practicesList"></div> -->

</section>

<script src="/js/leaflet.js"></script>
<script src="/js/leaflet.markercluster.js"></script>
<script src="/js/leaflet-settings.js"></script>

<?
require $docroot.'includes/bottom.php';
?>
