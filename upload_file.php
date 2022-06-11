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
echo "<a href=upload_file.php:36' class='btn btn-primary'>Clique aqui gerar a moldurar</a> ";
}
}





//    $dest = imagecreatefrompng('uploads_img/moldura2222.png');
//    $src = imagecreatefromjpeg("uploads_img/1654832045 mr robot.jpeg");
//
//    imagealphablending($dest, false);
//    imagesavealpha($dest, true);
//
//    imagecopymerge($dest, $src, 10, 9, 0, 0, 181, 180, 100); //have to play with these numbers for it to work for you, etc.
//
//    header('Content-Type: image/png');
//    imagepng($dest);
//
//    imagedestroy($dest);
//    imagedestroy($src);

?>