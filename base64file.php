<?php
/**
 * Created by PhpStorm.
 * User: dante
 * Date: 23.07.2017
 * Time: 20:13
 */

$filename = "imageflw.jpg";

$base64 =base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>

<div>
    <a href="<?=$base64encode;?>" target="_blank">LINK TO THE FILE</a>
</div>

<div>
    <img src="<?=$base64encode;?>"
</div>