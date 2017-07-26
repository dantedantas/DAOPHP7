<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 26.07.2017
 * Time: 18:42
 */
class APISearchCountry
{

    public static function search(String $mystring)
    {
        $link = "http://services.groupkt.com/country/search?text=$mystring";

        $ch = curl_init($link);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($ch);

        curl_close($ch);

        return $response;
    }
}