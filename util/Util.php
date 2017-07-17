<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 17.07.2017
 * Time: 18:58
 */

class Util
{

    static function dataLonga(int $mytime): string
    {

        return utf8_encode(ucfirst(strftime("%A, %d", $mytime)))." de ".utf8_encode(ucfirst(strftime("%B", $mytime)))." de ".utf8_encode(ucfirst(strftime("%Y - %I:%M:%S %p", $mytime)));

    }
}
