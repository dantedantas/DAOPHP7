<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 05.07.2017
 * Time: 10:17
 */spl_autoload_register(function ($myclass){
    $keyclass = substr($myclass, 0, 1);

    switch ($keyclass) {
        case 'c':
            if (file_exists("class".DIRECTORY_SEPARATOR.$myclass.".php") === true)
                require_once ("class".DIRECTORY_SEPARATOR.$myclass.".php");
            break;
        case 'i':
            if (file_exists("interface".DIRECTORY_SEPARATOR.$myclass.".php") === true)
                require_once ("interface".DIRECTORY_SEPARATOR.$myclass.".php");
            break;
        case 'a':
            if (file_exists("abstract".DIRECTORY_SEPARATOR.$myclass.".php") === true)
                require_once ("abstract".DIRECTORY_SEPARATOR.$myclass.".php");
            break;
        default:
            if (file_exists($myclass.".php") === true)
            {
                require_once ($myclass.".php");
            }
            else
            {
                require_once ("util".DIRECTORY_SEPARATOR.$myclass.".php");
            }

    }

});