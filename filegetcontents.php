<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 26.07.2017
 * Time: 12:06
 */

$link = "https://www.google.at/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>