<?php

/* 
 * Demetrios Felipe - demetriosfelipe@outlook.com 
 * 
 */

class AjudaImagem 
{
	   public $array = array();

	   
    static function imglib($img, $alt = null, $adicional = null) {
        echo "<img src='" . IMGLIB . $img . ".jpg' alt='" . $alt . "' " . $adicional . "/>";
    }
    static function jpg($img, $alt = null, $adicional = null) {
        echo "<img src='" . IMGPUBLIC . $img . ".jpg' alt='" . $alt . "' " . $adicional . "/>";
    }

    static function png($img, $alt = null, $adicional = null) {
        echo "<img src='" . IMGPUBLIC . $img . ".png' alt='" . $alt . "' " . $adicional . "/>";
    }

    static function imgfora($img, $alt = null, $adicional = null) {
        echo "<img src='" . $img . "' alt='" . $alt . "' " . $adicional . "/>";
    }
    
    static function imgup($img, $alt = null, $adicional = null) {
        echo "<img src='" . PUBLICURL."_upload/" . $img . "' alt='" . $alt . "' " . $adicional . "/>";
    }

      static function imguplink($a, $img, $titulo = null) {
        echo "<a href='" . strtolower(BASEURL . $a) . "' title='" . $titulo . "'  >\n";
        echo "<b>".$titulo."</b>";
        echo "<img src='" . PUBLICURL ."_upload/" . $img . "' alt='" . $img ." - " . $titulo. "' />";
        echo "</a>\n";
       
    }

    
    
//IMAGEM LINK
    static function linkimagempasta($a, $titulo, $img, $array1, $array2) {
        echo "<a href='" . strtolower(BASEURL . $a) . "' title='" . $titulo . "' ".$array1." >\n";
        echo "<img src='" . IMGPUBLIC . $img . "' $array2 />";
        echo "</a>\n";
    }

    static function linkimagemurl($a, $titulo, $img, $array) {
        echo "<a href='" . strtolower($a) . "' title='" . $titulo . "'  >\n";
        echo "<img src='" . $img . "' $array />";
        echo "</a>\n";
    }



}