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


//arquivo da imagem base
$imageFile = __DIR__.'/uploads_img/moldura2222.png';

//arquivo merge

$watermarkFile = $_POST;

//buffer da imagem
$image = imagecreatefrompng($imageFile);

//buffer do merge
$watermark = imagecreatefromstring(file_get_contents($p->img()));

//tamanho da imagem merge
$watermarkWidth = imagesx($watermark);
$watermarkHeight = imagesy($watermark);

//tamanho da imagem padrao
$imageWidth = imagesx($image);
$imageHeight = imagesy($image);

//Posicao da marca dagua
$positionX = ($imageWidth / 2) - ($watermarkWidth / 2) ;
$positionY = ($imageHeight / 2) - ($watermarkHeight / 2) ;

//faz o merge das imagens
imagecopy($image,
    $watermark,
    (int)$positionX,
    (int)$positionY,
    0,
    0,
    $watermarkWidth,
    $watermarkHeight);

//download da imagem



//Imprime a imagem na pagina

header("Content-Type: image/png");

//echo $image;

imagepng($image);
imagedestroy($image);
imagedestroy($watermark);



?>
