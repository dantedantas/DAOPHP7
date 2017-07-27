<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 26.07.2017
 * Time: 18:40
 */
if ($param1 == "all")
   $data = APISearchCountry::search($param2, new SearchCountryAll());
elseif ($param1 == "2")
    $data = APISearchCountry::search($param2, new SearchCountryAlpha2());
elseif ($param1 == "3")
    $data = APISearchCountry::search($param2, new SearchCountryAlpha3());


if (is_array($data))
{
    if (!empty($data["name"]))
    {
        echo "<pre>";
        print_r($data); //$value["name"]
        echo "</pre>";
    }
    else
    {
        foreach ($data as $key => $value)
        {
            echo "<pre>";
            print_r($value); //$value["name"]
            echo "</pre>";
        }
    }
}
else
{
    echo "<pre>";
    print_r($data); //$value["name"]
    echo "</pre>";
}

/*
if ($param1 == "all")
   $data = APISearchCountry::search($param2, new SearchCountryAll());//json_decode(APISearchCountry::search($param2, new SearchCountryAll()), true);
elseif ($param1 == "2")
    $data = APISearchCountry::search($param2, new SearchCountryAlpha2());//json_decode(APISearchCountry::search($param2, new SearchCountryAlpha2()), true);
elseif ($param1 == "3")
    $data = APISearchCountry::search($param2, new SearchCountryAlpha3());//json_decode(APISearchCountry::search($param2, new SearchCountryAlpha3()), true);
 */