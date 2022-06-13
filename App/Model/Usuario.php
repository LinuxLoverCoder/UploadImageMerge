<?php
namespace APP\Model;
class Usuario
{
    private $img, $id;


    public function getImg() {
        return $this->img;
    }

    public function setImg($img) {
        $this->img = $img;
    }

 public function getID() {
        return $this->id;
    }

    public function setID($id) {
        $this->id = $id;
    }


}