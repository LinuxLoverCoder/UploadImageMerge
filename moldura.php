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
//(int) $positionY
//(int) $positionX
imagecopymerge(
    dst_image: $image,
    src_image: $watermark,
    dst_x: 0,
    dst_y: 0,
    src_x: -215,
    src_y: 300,
    src_width: 1280,
    src_height: 1280,
      pct: 55
);       // (int)$positionX,
//        (int)$positionY,

//imagecopymerge(
//  $image,
//  $watermark,
//  100 ,
//  100,
//  100,
//  100 ,
//  100 ,
//  100,
//    pct: 1
//);



//download da imagem



//Imprime a imagem na pagina

header("Content-Type: image/png");

//echo $image;

imagepng($image);
imagedestroy($image);
imagedestroy($watermark);




