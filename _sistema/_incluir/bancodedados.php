<?php

/*
 * Demetrios Felipe - demetriosfelipe@outlook.com | demetrios@midiakitcom.com.br
 * 
 * Mídia Kitcom Comunicação | www.midiakitcom.com.br
 */
require_once("_sistema/carrega.php");

class Bancodedados {

    public $banco;

    function __construct() {
        try {
            $dsn = "mysql:host=" . HOST . "; dbname=" . BD.";charset=utf8";
            $banco = new pdo($dsn, USER, PASS);
						$banco->exec("set names utf8");
						$arr = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
												 	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $banco->getAttribute($arr);
					
            $this->banco = $banco;
        } catch (PDOException $e) {
            echo "erro no " . $e->getMessage();
        }
    }

}
