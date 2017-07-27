<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 27.07.2017
 * Time: 17:26
 */

if (isset($_COOKIE["DFDTecnobyteBASKET"]))
{
    echo "<pre>";
    var_dump(json_decode($_COOKIE["DFDTecnobyteBASKET"], true));
    echo "</pre>";
}