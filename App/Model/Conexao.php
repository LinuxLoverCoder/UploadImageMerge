<?php

namespace APP\Model;

class Conexao
{
    private static $instance;

    public static function getConn()
    {
        if (!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost;dbname=id19079412_projetoturma1a;', 'id19079412_root', 'nfQ$~GZj1kx2FR@J');
        endif;
        return self::$instance;
    }
}