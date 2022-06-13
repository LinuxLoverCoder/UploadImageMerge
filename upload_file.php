<?php

use APP\Model\Conexao;
use App\Model\Usuario;
use App\Model\Usuariodao;

session_start();
require_once  "App/Model/Conexao.php";
require_once  "App/Model/Usuario.php";
require_once  "App/Model/Usuariodao.php";
$conn = Conexao::getConn();
$p = new Usuariodao();
$user = new Usuario();
//$id = 13;


if(isset($_POST['upload']) && $_POST['upload'] == 'enviar_arquivos') {
$upload_dir = "uploads_img";
if ($_FILES['userfile']['error'] == UPLOAD_ERR_OK) {
$tmp_name = $_FILES['userfile']['tmp_name'];
$name = strval(time()) . " " . basename($_FILES['userfile']['name']);
$uploadfiles = $upload_dir . '/' . $name;
move_uploaded_file($tmp_name, $uploadfiles);

//$user->setID($id);
$user->setImg($uploadfiles);


//var_dump($name);
$p->uploadImg($user);

echo "Finalizado \n";
echo "<a href='moldura.php' class='btn btn-primary'>Clique aqui gerar a moldurar</a> ";
}
}




?>