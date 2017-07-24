<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
<!--
enctype let you inform what kind of info you are sending to the server
-->
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Enviar</button>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

    // $_FILES["fileUpload"] - $_FILES is a global attribute for use to files
    // In case of a string, and on this FORM we msut use $_POST
    $file = $_FILES["fileUpload"];

    if($file["error"]){
        throw new Exception("Erro:".$file["error"]);
    }

    $dirUploads="uploads";

    if(!is_dir($dirUploads)){

        mkdir($dirUploads);
    }

    // $file["tmp_name"] - Temporary name on the server
    // $file["name"] - Real name of the file

    if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){

        echo "Upload OK!!!";

    }else{
        throw new Exception("Wow! Something gone wrong!");

    }
}

?>