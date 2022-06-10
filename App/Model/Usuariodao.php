<?php

namespace APP\Model;

class Usuariodao
{


    public function uploadImg (Usuario $p) {
        $sql = "UPDATE img SET nome = ? WHERE username = ?";
        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $p->getImg());
        $stmt->bindValue(2, $_SESSION['username']);

        $stmt->execute();
    }

    public function mergeImg($imagem1, $imagem2){

    }




}