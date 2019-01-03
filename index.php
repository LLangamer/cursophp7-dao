<?php 


require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

//carrega 1 usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


//Carrega uma lista de usuarios

//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login

//$search = Usuario::search("jo");
//echo json_encode($search);


//carrega um usuario usando o login e senha

$usuario = new Usuario();

$usuario->login('jose','1234567890');

echo $usuario;




 ?>