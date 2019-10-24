<?php

/*
 * Demetrios Felipe - demetriosfelipe@outlook.com
 
 */

class AjudaCarregaHeader {

    static function css($data) {
        foreach ($data as $css) {
            echo '<link rel="stylesheet" href="' . CSSPUBLIC . $css . '.css">' . "\n";
        }
    }

    static function js($data) {
        foreach ($data as $js) {
            echo '<script type="text/javascript" src="' . JSPUBLIC . $js . '.js"></script>' . "\n";
        }
    }

    static function nav($base, $arr) {
        $imagem = IMGPUBLIC . "logo.png";
        echo "<div class=\"navmenu clearfix\">\n
					<a href=\"home\" id=\"pull\"> <h1>K&F TAPETES</h1></a>
                        <ul class=\"clearfix\">	
					";

        foreach ($arr as $nav) {
            $link = AjudaTexto::limpar($nav);
            $novolink = str_replace("-", "_", $link);


            echo "<li><a href='" . BASEURL . $base . $novolink . "'>" . $nav . "</a></li>\n";
        }
        echo "	</ul>\n
	
	</div>";
    }

}
