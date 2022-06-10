<?php

use APP\Model\Conexao;
use App\Model\Usuario;
use App\Model\Usuariodao;

session_start();
//require_once  "App/Model/Conexao.php";
//require_once  "App/Model/Usuario.php";
//require_once  "App/Model/Usuariodao.php";
//$conn = Conexao::getConn();
//$p = new Usuariodao();
//$user = new Usuario();
//$username = $_SESSION['username'];


if(isset($_POST['upload']) && $_POST['upload'] == 'enviar_arquivos') {
$upload_dir = "uploads_img/";
if ($_FILES['userfile']['error'] == UPLOAD_ERR_OK) {
$tmp_name = $_FILES['userfile']['tmp_name'];
$name = strval(time()) . " " . basename($_FILES['userfile']['name']);
$uploadfiles = $upload_dir . '/' . $name;
move_uploaded_file($tmp_name, $uploadfiles);

//$user->setUsername($username);
//$user->setImg($name);


//var_dump($name);
//$p->uploadImg($user);

echo "Finalizado \n";
echo "<a href='index.php?' class='btn btn-primary'>Clique aqui para retornar</a> ";
}
}
$imagem2 = "imagem2";
$imagem1 = "uploads_img/moldura2222.png";

//if($_FILES['userfile']){
    $imagem2 = "uploads_img/1654828590 mr robot.jpeg";  //$uploadfiles;  //;
    list($width, $height) = getimagesize($imagem2);

    $imagem1 = imagecreatefromstring(file_get_contents($imagem1));
    $imagem2 = imagecreatefromstring(file_get_contents($imagem2));

    imagecopymerge($imagem1, $imagem2, 200, 158, 0  , 0, $width, $height, 50);
    header("Content-Type: image/png");
    imagepng($imagem1);
//}
?>