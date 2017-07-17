<?php
require_once ('util'.DIRECTORY_SEPARATOR.'config.php');

/*$DBClass = new Dbconnect();

$mylogin = "superlogin999";
$mysenha = "superpass999";

//$DBClass->insertUsuario($mylogin, $mysenha);

$listausuarios = $DBClass->select("SELECT * FROM tb_usuarios");

echo json_encode($listausuarios);
*/

$user = new Usuario();

$user->loadById(3);

echo $user;

?>