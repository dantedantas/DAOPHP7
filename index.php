<?php

require_once ('util'.DIRECTORY_SEPARATOR.'config.php');

$url = explode('/',$_GET['url']);
$page = !empty($url[0]) ? $url[0] : 'home';
$param1 = !empty($url[1]) ? $url[1] : null;
$param2 = !empty($url[2]) ? $url[2] : null;

    if (file_exists($page.'.php')) {
        include $page.'.php';
    } else {
        include 'filenotfound.php';
    }



?>