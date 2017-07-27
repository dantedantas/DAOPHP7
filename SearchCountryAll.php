<?php

/***
 * Created by PhpStorm.
 * User: dante
 * Date: 26.07.2017
 * Time: 18:42
 */
class SearchCountryAll implements ISearchCountry
{

    public static function search(String $mystring)
    {
        $link = "http://services.groupkt.com/country/search?text=$mystring";

        $ch = curl_init($link);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($ch);
        $data = json_decode($response, true);

        curl_close($ch);

        $foundcountry = false;

        foreach ($data["RestResponse"] as $key => $value)
        {
            if (($key == "result") && (is_array($value)))
            {

                    if (count($value) == 1)
                    {
                        $foundcountry = true;
                        foreach ($value as $newvalue)
                        {
                            $response = $newvalue;
                        }

                    } elseif (count($value) > 1)
                    {
                        $foundcountry = true;
                        $response = $value;

                    }
            }
        }

        if (!$foundcountry)
            $response = json_encode(array(
                'RestResponse'=>'COUNTRY NOT FOUND'
            ));

        return $response;
    }
}