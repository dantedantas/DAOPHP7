<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 27.07.2017
 * Time: 17:26
 */

if (isset($_COOKIE["DFDTecnobyteBASKET"]))
{
    $mycookie = json_decode($_COOKIE["DFDTecnobyteBASKET"]);
    echo "<pre>";
    print_r($mycookie->itens);
    echo "</pre>";
}