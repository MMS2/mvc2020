<?php

/* 
 * Demetrios Felipe - demetriosfelipe@outlook.com
 * 
 */

class AjudaTexto{
    //HEADERS
    static function h1($h1) {
        echo "<h1>" . $h1 . "</h1>";
    }

    static function h2($h2) {
        echo "<h2>" . $h2 . "</h2>";
    }

    static function h3($h3) {
        echo "<h3>" . $h3 . "</h3>";
    }

    static function h4($h4) {
        echo "<h4>" . $h4 . "</h4>";
    }

    static function h5($h5) {
        echo "<h5>" . $h5 . "</h5>";
    }

    static function h6($h6) {
        echo "<h6>" . $h6 . "</h6>";
    }

//LINKS
    static function linkfora($a, $titulo, $adicional = null) {
        echo "<a href='" . strtolower($a) . "' title='" . $titulo . "' target='new'" . $adicional . ">" . $titulo . "</a>";
    }

    static function link($a, $titulo, $adicional = null) {
        echo "<a href='" . strtolower(BASEURL . $a) . "' title='" . $titulo . "'" . $adicional . ">" . $titulo . "</a>";
    }

//URI
    static function uri($i) {
        $pagina_url = explode("/", $_GET['url']);
        $pagina = $pagina_url[$i];
        return $pagina;
    }

// URL ATUAL


//RESUMIR

    static function urlatual() {

        $server = $_SERVER['SERVER_NAME'];
        $endereco = $_SERVER ['REQUEST_URI'];
        echo "http://" . $server . $endereco;
    }

//REDIRECT
    static function redireciona($a) {
        header('Location: ' . BASEURL . $a);
    }
	
	   static function redirecionaTempo($tempo,$a) {
        header('Refresh: '.$tempo.'; URL=' . BASEURL . $a);
    }


    static function imprimir(){

        $print = '<script type="text/javascript">
        window.print();
        </script>';
        
 echo $print;


    }

    
//LIMPAR ACENTOS

    static function limpar($string) {
        $a = 'àáâãäèéêëìíîïòóôõöùúûüÀÁÂÃÄÈÉÊËÌÍÎÒÓÔÕÖÙÚÛÜçÇñÑ -~°ºª%&$,.!';
        $b = 'aaaaaeeeeiiiiooooouuuuAAAAAEEEEIIIOOOOOUUUUcCnN------------';
        $string = utf8_decode($string);
        $string = strtr($string, utf8_decode($a), $b);
        $string = strtolower($string);
        return utf8_encode($string);
    }
    static function resumo($string, $chars) {

        if (strlen($string) > $chars) {
            while (substr($string, $chars, 1) <> ' ' && ($chars < strlen($string))) {
                $chars++;
            }
        }

        if ($chars > strlen($string)) {
            echo substr($string, 0, $chars);
        } else {
            echo substr($string, 0, $chars) . "...";
        }
    }
	
	
	
	/**
     * NAO ARREDONDANDO
     */
	static function sema($num, $precision = 2){
        return floor($num).substr($num-floor($num),1,$precision+1);
    }
    
	
    static function alerta($msg, $redidect){
        
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('".$msg."');
          window.location.href='".BASEURL.$redidect."';
       </script>");


    }
    

	
	
	static function calcpa($valor,$nParcelas,$dataPrimeiraParcela = null, $mesincial = null){
  if($dataPrimeiraParcela != null){
    $dataPrimeiraParcela = explode( "/",$dataPrimeiraParcela);
    $dia = $dataPrimeiraParcela[0];
    $mes = $dataPrimeiraParcela[1];
    $ano = $dataPrimeiraParcela[2];
  } else {
    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");
  }
 
  echo "<table>
	  <thead>
	  <th>
	  NUMERO DA PARCELA
	  </th>
	   <th>
	  VALOR DA PARCELA
	  </th>
	   <th>
	  VENCIMENTO DA PARCELA
	  </th>
	  </thead>
	  <tbody>";
	  
	  
	    for($x = 0; $x < $nParcelas; $x++){
			$numerodaparcela = $x+1;
	
	
			$valor1 =  str_replace('.','',$valor);
			$valor2 = str_replace(',','.',$valor1);
				
	
					
					$mesincial = 0;
		
				
				
	$valorparcela = number_format($valor2/$nParcelas,2,',','.');
	$datavencimento = date("d/m/Y",strtotime("+".$x." month",mktime(0, 0, 0,$mes+$mesincial,$dia,$ano)));
	 

 echo"
	  <tr>
	 <td>".$numerodaparcela."</td>
	  <td> R$ ".$valorparcela."</td>
	  <td>".$datavencimento."</td>
	 ";


	         $array = array(
				//'bancodoc' => $_POST['bancodoc'], 
				'numerodoc' => $numerodaparcela, 
				'valordoc' => $valorparcela,
				 'datadoc' => $datavencimento, 
				// 'remetdoc' => $_POST['remetdoc']
				);
                         $contagem = count($_SESSION['pagamento']);
    if (empty($_SESSION['pagamento']))
                    {
                          $_SESSION['pagamento'][0]=$array;
                    }
                    else
                    {
                        $idArray     = array_column($_SESSION['pagamento'], 'numerodoc');
                        if (!in_array($numerodaparcela, $idArray))
                        {
                     
                        $_SESSION['pagamento'][$contagem]=$array;
                        }
                        else
                        {
                   		unset($_SESSION['pagamento']);
                        $_SESSION['pagamento'][$contagem]=$array;
                        }

                    }	
	

	
	
  }



  echo " </tbody>
	  </table>";
	 
}
	
	
	
    
}