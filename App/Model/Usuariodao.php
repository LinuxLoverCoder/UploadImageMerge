<?php

namespace APP\Model;

class Usuariodao
{

    public function __toString(){
        return $this->img() ;
    }


    public function uploadImg (Usuario $p) {
        $sql = "insert into imagens(`key`) VALUES(?)";
        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $p->getImg());
//        $stmt->bindValue(2, $p->getID());


        $stmt->execute();
    }

public function img()
{

    $sql = "SELECT `key` from imagens order by id desc";
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0):
        $resultado = $stmt->fetchColumn();
        return print_r($resultado, true);
    else:
        return false;
    endif;
}




}