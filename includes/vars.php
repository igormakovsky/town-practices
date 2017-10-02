<?php
$docroot = $_SERVER['DOCUMENT_ROOT'] . '/';
$base_dir  = __DIR__;
// Absolute path to your installation, ex: /var/www/mywebsite
$doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME'].'/');
# ex: /var/www
$base_url  = preg_replace("!^${doc_root}!", '', $base_dir);
# ex: '' or '/mywebsite'
//$protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
$protocol  = 'http';
$port      = $_SERVER['SERVER_PORT'];
$disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
$domain    = $_SERVER['SERVER_NAME'];
$full_url  = "${protocol}://${domain}${disp_port}${base_url}";
$siteroot = $protocol.'://'.$domain;

if ($id != 'index'){
$mainfolder = '/'.$parent.'/'.$id;
$headimage = $siteroot.'/'.$parent.'/'.$id.'/img/index.jpg';
$canonical = $siteroot.'/'.$parent.'/'.$id.'/';
}
else {
    $mainfolder = '';
    $headimage = $siteroot.'/img/index.jpg'; //path to main image
    $canonical = $siteroot;
}

$thispage = $domain.$mainfolder.'/'; //path to the current folder
$deldomain = (str_replace('index.php', '', $_SERVER['SCRIPT_NAME'])); //erase index.php

//for bugtesting
/*echo 'mainfolder is '.$mainfolder.'<br>';
echo 'fullurl is '.$full_url.'<br>';
echo 'doc_root is '.$doc_root.'<br>';
echo 'baseurl is '.$base_url.'<br>';
echo 'siteroot is '.$siteroot.'<br>';*/

$tomainpage = '&larr;';
$contact = 'контакты';

$project_title = 'Лучшие практики малых городов России';
$copyright = date("Y").' — © Наталья Рыбальченко и Игорь Маковский | www.pointofprogress.ru | www.igormakovsky.ru';
$keywords = 'россия, город, лучшие, практики, малые города';
$author = 'Наталья Рыбальченко';
$facebook_author = 'natalia.ribalchenko';
$google_author = '';

$type_0 = '';
$type_0_id = 'none';
$type_1 = 'Малый бизнес, молодежные проекты и стартапы';
$type_1_id = 'business';
$type_2 = 'Социальные проекты и вовлечение жителей';
$type_2_id = 'social';
$type_3 = 'Образование и новые технологии';
$type_3_id = 'education';
$type_4 = 'События';
$type_4_id = 'events';
$type_5 = 'Гастрономия и сельское хозяйство';
$type_5_id = 'gastronomy';
$type_6 = 'Туризм и продвижение';
$type_6_id = 'tourism';
$type_7 = 'Культура и эстетика';
$type_7_id = 'culture';

//практики
$practice_1 = 'Фестиваль шляп «Карнавал цвета»';
$practice_1_id = 'flower-carnival';
$practice_1_town = 'Вятские поляны';
$practice_1_town_id = 'vyatskiepolyani';
$practice_1_oblast = 'Кировская область';
$practice_1_oblast_id = 'kirovskaya';
$practice_1_type = $type_4_id;
$practice_1_types = $type_4_id;

$practice_2 = 'Школа стартапов';
$practice_2_id = 'startup-school';
$practice_2_town = 'Каргополь';
$practice_2_town_id = 'kargopol';
$practice_2_oblast = 'Архангельская область';
$practice_2_oblast_id = 'arhangelskaya';
$practice_2_type = $type_1_id;
$practice_2_types = $type_1_id;

$practice_3 = 'Музей «Коломенская пастила»';
$practice_3_id = 'kolomna-candy';
$practice_3_town = 'Коломна';
$practice_3_town_id = 'kolomna';
$practice_3_oblast = 'Московская область';
$practice_3_oblast_id = 'moskovskaya';
$practice_3_type = $type_1_id;
$practice_3_types = $type_1_id.' '.$type_5_id;

$practice_4 = 'Том Сойер Фест';
$practice_4_id = 'tomsoyer';
$practice_4_town = 'Калуга';
$practice_4_town_id = 'moscow';
$practice_4_oblast = 'Калужская область';
$practice_4_oblast_id = 'kaluzhskaya';
$practice_4_type = $type_7_id;
$practice_4_types = $type_7_id;

$practice_5 = 'Организация работы ТИЦ';
$practice_5_id = 'uglich-tic';
$practice_5_town = 'Углич';
$practice_5_town_id = 'uglich';
$practice_5_oblast = 'Ярославская область';
$practice_5_oblast_id = 'yaroslavskaya';
$practice_5_type = $type_4_id;
$practice_5_types = $type_4_id.' '.$type_6_id;

$practice_6 = 'Создание кластера «Фамилия»';
$practice_6_id = 'familia-cluster';
$practice_6_town = 'Каргополь';
$practice_6_town_id = 'kargopol';
$practice_6_oblast = 'Архангельская область';
$practice_6_oblast_id = 'arhangelskaya';
$practice_6_type = $type_1_id;
$practice_6_types = $type_1_id;

$practice_7 = 'Лекарства для домов';
$practice_7_id = 'house-medicine';
$practice_7_town = 'Крапивна';
$practice_7_town_id = 'krapivna';
$practice_7_oblast = 'Тульская область';
$practice_7_oblast_id = 'tulskaya';
$practice_7_type = $type_7_id;
$practice_7_types = $type_7_id;

$practice_8 = 'Бумажный город на воде';
$practice_8_id = 'papertown';
$practice_8_town = 'Сясьстрой';
$practice_8_town_id = 'syasstroy';
$practice_8_oblast = 'Ленинградская область';
$practice_8_oblast_id = 'leningradskaya';
$practice_8_type = $type_7_id;
$practice_8_types = $type_7_id.' '.$type_6_id;

$practice_9 = 'Бензар: туристическая заправка';
$practice_9_id = 'tourist-petrol';
$practice_9_town = 'Зарайск';
$practice_9_town_id = 'zaraysk';
$practice_9_oblast = 'Московская область';
$practice_9_oblast_id = 'moskovskaya';
$practice_9_type = $type_1_id;
$practice_9_types = $type_1_id.' '.$type_6_id;;

$practice_10 = 'Лесная кухня';
$practice_10_id = 'forest-cousine';
$practice_10_town = 'Перемышль';
$practice_10_town_id = 'peremyshl';
$practice_10_oblast = 'Калужская область';
$practice_10_oblast_id = 'kaluzhskaya';
$practice_10_type = $type_5_id;
$practice_10_types = $type_5_id;

$practice_11 = 'Исторические граффити в Боровске';
$practice_11_id = 'historical-graffiti';
$practice_11_town = 'Боровск';
$practice_11_town_id = 'borovsk';
$practice_11_oblast = 'Калужская область';
$practice_11_oblast_id = 'kaluzhskaya';
$practice_11_type = $type_7_id;
$practice_11_types = $type_7_id.' '.$type_6_id;;

$practice_12 = 'Мастер-классы по кубовой набойке';
$practice_12_id = 'cubicle-stamps';
$practice_12_town = 'Очер';
$practice_12_town_id = 'ocher';
$practice_12_oblast = 'Пермский край';
$practice_12_oblast_id = 'pemskiy';
$practice_12_type = $type_7_id;
$practice_12_types = $type_7_id;

$practice_13 = 'Холмогорская резьба по кости';
$practice_13_id = 'bonecarving';
$practice_13_town = 'Ломоносово';
$practice_13_town_id = 'lomonosovo';
$practice_13_oblast = 'Архангельская область';
$practice_13_oblast_id = 'arhangelskaya';
$practice_13_type = $type_7_id;
$practice_13_types = $type_7_id.' '.$type_3_id;
?>
