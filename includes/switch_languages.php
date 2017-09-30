<?php
if( isset( $_POST["lang"] ) ) {
    $langs = $_POST["lang"];
    setcookie ( 'matlas-lang', $langs, time() + 60*60*24*30, '/', 'matlasresort.com'); //.dev
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else {
    $langs = 'ru';
}