<?php
$base_dir  = __DIR__;
// Absolute path to your installation, ex: /var/www/mywebsite
$doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME'].'/');
# ex: /var/www
$base_url  = preg_replace("!^${doc_root}!", '', $base_dir);
# ex: '' or '/mywebsite'
$protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
$port      = $_SERVER['SERVER_PORT'];
$disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
$domain    = $_SERVER['SERVER_NAME'];
$full_url  = "${protocol}://${domain}${disp_port}${base_url}";

$siteroot = $protocol.'://'.$domain;
if ($id != 'contents'){
$mainfolder = '/'.$parent.'/'.$id;
//$headimage = $siteroot.'/'.$parent.'/'.$id.'/img/hero-image.jpg';
$headimage = '/img/index.jpg';
$canonical = $siteroot.'/'.$parent.'/'.$id.'/';
}
else {
    $mainfolder = '';
    $headimage = $siteroot.'/img/index.jpg'; //path to main image
    $canonical = $siteroot;
}

//$headimage = $siteroot.$mainfolder.'/img/'.$id.'.jpg'; //path to leading image
$thispage = $domain.$mainfolder.'/'; //path to the current folder
$deldomain = (str_replace('index.php', '', $_SERVER['SCRIPT_NAME'])); //erase index.php

/*
//for bugtesting
echo 'mainfolder is '.$mainfolder.'<br>';
echo 'fullurl is '.$full_url.'<br>';
echo 'doc_root is '.$doc_root.'<br>';
echo 'baseurl is '.$base_url.'<br>';
echo 'siteroot is '.$siteroot.'<br>';*/
//Language differences in variables

//$canonical = $siteroot;
$tomainpage = '&larr;';
$contact = 'контакты';

if (ru()) {
$sign = date("Y").' — © Игорь Маковский | http://www.igormakovsky.ru/';
$title = $title_ru;
$description = $description_ru;
$headimage = 'http://matlasresort.com/img/index.jpg';
$keywords = 'матлас, курорт, дагестан, хунзах, '.$keywords_ru;
$author = 'Матлас';
$lang = 'ru';
$settolang = 'ENG';
}
else {
    $sign = date("Y").' — © Igor Makovsky | http://www.igormakovsky.com/';
    $title = $title_en;
    $description = $description_en;
    $headimage = 'http://matlasresort.com/img/index.jpg';
    $keywords = 'matlas, resort, dagestan, khuzakh, '.$keywords_en;
    $author = 'Matlas';
    $lang = 'en-US';
    $settolang = 'RU';
}

?>