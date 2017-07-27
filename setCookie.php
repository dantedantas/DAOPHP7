<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 27.07.2017
 * Time: 17:16
 */

$data = array(
    "company" => "DFDTecnobyte",
    "date" => time(),
    "itens" => array(
                   array("id" => "26", "desc" => "Memory DDR4", "qtd" => "2", "ucost" => "120"),
                   array("id" => "87", "desc" => "FastFun Cooler", "qtd" => "1", "ucost" => "78"),
                   array("id" => "258", "desc" => "Toilet Paper", "qtd" => "20", "ucost" => "20")
    )
);

setcookie("DFDTecnobyteBASKET", json_encode($data), time()+432000);

echo "Cookie created!";