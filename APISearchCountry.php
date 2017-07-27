<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 26.07.2017
 * Time: 18:42
 */
class APISearchCountry
{

    public static function search(String $mystring, ISearchCountry $SC)
    {

        $response = $SC::search($mystring);

        return $response;
    }
}