<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 26.07.2017
 * Time: 18:40
 */
$data = json_decode(APISearchCountry::search($param1), true);
$foundcountry = false;

foreach ($data["RestResponse"] as $key => $value)
{
   // echo "key: $key - value: $value <br>";
    if (($key == "result") && (is_array($value)))
    {
      if (count($value) > 0)
      {
        $foundcountry = true;
        foreach ($value as $key => $value)
        {
            echo "<pre>";
            print_r($value); //$value["name"]
            echo "</pre>";
        }
      }
    }
}

if (!$foundcountry)
    print_r(json_encode(array(
        'RestResponse'=>'COUNTRY NOT FOUND'
    )));
