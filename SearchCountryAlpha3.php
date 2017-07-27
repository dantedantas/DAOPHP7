<?php

/**
 * Created by PhpStorm.
 * User: dante
 * Date: 26.07.2017
 * Time: 18:42
 */
class SearchCountryAlpha3 implements ISearchCountry
{

    public static function search(String $mystring)
    {
        $link = "http://services.groupkt.com/country/get/iso3code/$mystring";

        $ch = curl_init($link);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($ch);

        $response = json_decode($response, true);

        curl_close($ch);

        if ($response["RestResponse"]["result"] == 0)
            return json_encode(array(
                'RestResponse'=>'COUNTRY NOT FOUND'
            ));
        return $response["RestResponse"]["result"];
    }
}