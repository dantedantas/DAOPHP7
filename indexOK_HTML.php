<?php

require_once ('util'.DIRECTORY_SEPARATOR.'config.php');

$url = explode('/',$_GET['url']);
$pagina = !empty($url[0]) ? $url[0] : 'home';
$parametro = !empty($url[1]) ? $url[1] : null;
$parametro2 = !empty($url[2]) ? $url[2] : null;


    if (file_exists($pagina.'.php')) {
        include $pagina.'.php';
    } else {
        include 'filenotfound.php';
    }



?>