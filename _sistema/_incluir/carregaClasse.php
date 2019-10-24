<?php

/*
 * Demetrios Felipe - demetriosfelipe@outlook.com | demetrios@midiakitcom.com.br
 * 
 * Mídia Kitcom Comunicação | www.midiakitcom.com.br
 */

class CarregaClasse {

    public function __construct() {
        spl_autoload_register(array($this, 'carrega'));
    }

    private function carrega($classe) {
        $carrega = "_sistema/_incluir/_ajuda/" . $classe . ".php";
  // echo 'Carregando ', $classe, ' via ', __METHOD__, "()\n<br>";
        if (file_exists($carrega)) {

            include $carrega;
        } else {
            echo '<b>Erro ao carregar ', $classe, ' via ', __METHOD__, "()\n</b><br>";
        }
    }

    // Array Classes   
    static function arrayClasse($array) {

        foreach ($array as $arrayClasse) {
            new $arrayClasse();
        }
    }

}

new CarregaClasse();
