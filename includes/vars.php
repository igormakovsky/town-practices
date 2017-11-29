<?
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
$author_facebook = 'natalia.ribalchenko';
$author_google = '';

$type_business = 'Малый бизнес, стартапы';
$type_business_id = 'business';
$type_social = 'Социальные проекты и вовлечение жителей';
$type_social_id = 'social';
$type_education = 'Образование и новые технологии';
$type_education_id = 'education';
$type_events = 'События';
$type_events_id = 'events';
$type_gastronomy = 'Гастрономия и сельское хозяйство';
$type_gastronomy_id = 'gastronomy';
$type_tourism = 'Туризм и продвижение';
$type_tourism_id = 'tourism';
$type_culture = 'Культура и эстетика';
$type_culture_id = 'culture';
?>
