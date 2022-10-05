<?php

require_once("config.php");

//CARREGA UM USUÁRIO
//$root = new Usuario();
//$root->loaById(16);
//echo $root


//CARREGA UMA LISTA DE USUÁRIOS
//$lista = Usuario::getList();
//echo json_encode($lista);


//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
//$search = Usuario::search("jo");
//echo json_encode($search);


//CARREGA UM USUARIO USANDO UM LOGIN E A SENHA
//$usuario = new Usuario();
//$usuario->login("", ""); 
//echo $Usuario;


//Criando um novo usuario
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loaById(31);

$usuario->update("professor555", "!@#$%¨&*");

echo $usuario;


?>