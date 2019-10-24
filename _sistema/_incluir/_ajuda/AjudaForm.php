<?php

/*
 * Demetrios Felipe - demetriosfelipe@outlook.com 
 * 
 */

/**
 * Description of ajudaForm
 *
 * @author Design
 */
class AjudaForm {

    //AjudaForm::abreformulario('Acao', "Metodo", 'encryptd');


    static function abreformulario($acao, $metodo) {
        echo "\n<form action=\"".BASEURL .$acao."\" method=\"$metodo\"  enctype=\"multipart/form-data\">\n";
    }

    static function campoTexto($nome, $value = null, $adicional = null) {
        echo "<input type=\"text\" name=\"$nome\" value=\"$value\" $adicional required>\n";
    }

    static function campoSelect($nome, $array) {
        echo "<select name=\"$nome\">\n";
        foreach ($array as $arrValor => $option) {
            echo "<option value=\"$arrValor\">$option</option>\n";
        }
        echo "</select>\n";
    }

        static function campoAreadeTexto($nome, $value = null) {
        echo "<textarea name=\"$nome\">\n";
        echo utf8_encode($value);
        echo "</textarea>";
    }
    
            static function campoPersonalizado($valores = null) {
     echo "<input $valores required>\n";
    }
    
    
     static function campoImagem($nome, $value = null, $adicional = null) {
              echo "<label for=\"file-upload\" class=\"file-upload\" required>
    Carregar Imagem
</label>";
 echo "<input type=\"file\" name=\"$nome\" value=\"$value\" id=\"file-upload\" >\n";

        print_r($value);
    }
    
    
             static function campoBotao($valores = null) {
     echo "<input type=\"submit\" $valores >\n";
    }
    
    
    
    static function fechaformulario() {
        echo "</form>";
    }

}
