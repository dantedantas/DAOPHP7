<?php


/*

$DBClass = new Dbconnect();

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
echo json_encode(Usuario::getAll());

//Search users
//echo json_encode(Usuario::search('bd'));

// Login
/*
$user = new Usuario("","",5);
$user->login('bdantas5','ssdgdsg');
echo $user;
*/

// Insert obj user
/*
$newuser = new Usuario("lobo", "mau");
//$newuser->setDeslogin("aluno");
//$newuser->setDessenha("@lun@");
$newuser->insert();
echo $newuser;
*/

// Update the user 5
/*
$user = new Usuario();
$user->getById(5);
$user->update("zionflash","!§$%&");
echo $user;
*/

// Delete the user 10
/*
$user = new Usuario();
$user->getById(10);
$user->delete();
echo $user;
*/
?>