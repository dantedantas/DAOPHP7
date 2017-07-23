<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 23.07.2017
 * Time: 10:57
 */

//echo "<pre>";
if (!isset($parametro) or empty($parametro))
    $parametro = ".";

$images = scandir($parametro); //util
$data = array();

foreach ($images as $img) {
    if ( !in_array($img, array(".", "..")) ) {

        $filename = $parametro. DIRECTORY_SEPARATOR . $img;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["type"] = filetype($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost:8080/cursophp7/DAO/". str_replace("\\", "/", $filename);
        $info["locale"] = __DIR__ . DIRECTORY_SEPARATOR . $filename;

        array_push($data, $info);
    }
}

echo json_encode($data);

//echo "</pre>";
 ?>