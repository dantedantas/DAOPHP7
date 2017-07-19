<?php
require_once ('util'.DIRECTORY_SEPARATOR.'config.php');

/*$DBClass = new Dbconnect();

$mylogin = "superlogin999";
$mysenha = "superpass999";

//$DBClass->insertUsuario($mylogin, $mysenha);

$listausuarios = $DBClass->select("SELECT * FROM tb_usuarios");

echo json_encode($listausuarios);
*/

// Return 1 user by ID
//$user = new Usuario();
//$user->getById(3);
//echo $user;

//Get all users
//echo json_encode(Usuario::getAll());

//Search users
//echo json_encode(Usuario::search('bd'));

// Login
$user = new Usuario();
$user->login('bdantas5','ssdgdsgsds');
echo $user;

?>