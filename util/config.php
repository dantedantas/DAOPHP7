<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 17.07.2017
 * Time: 18:48
 */

//require_once ("autoload".DIRECTORY_SEPARATOR."util".DIRECTORY_SEPARATOR."myautoload.php");

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

require_once ("myautoload.php");

header('Content-Type: text/html; charset=utf-8 http-equiv=Content-Language content=pt-br');

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
