<?php

/* 
 * Demetrios Felipe - demetriosfelipe@outlook.com | demetrios@midiakitcom.com.br
 * 
 * Mídia Kitcom Comunicação | www.midiakitcom.com.br
 */

class DmControle{
    
    
// VAREAVEIS    
public $modelo;
public $ver;
public static $data = array();
    
// modelo
    public function modelo($pasta = null, $modelo){
    $md = "_criacao/_app/_modelo/".$pasta."/".$modelo.".php";
        if(file_exists($md)){
            require_once($md);
            return new $modelo();
        }else {
        
           $erro = '    <div class="erropagina">
            <span class="header">Erro #404</span><br>
            <span class="erropagina">O arquivo
                <b>'.$modelo.'</b> não pode ser encontrado!</span>
        </div>
        <br>
        <span class="lead">  Por alguma razão, não pôde ser encontrado no nosso servidor o arquivo de configuração '. $md.'</span><br>
        <span class="lead">Volte para a página <a href="javascript:history.go(-1)">anterior</a> </span>';      
            
            
  die($erro);
        }
    
    }
    
// vizualizaÃ§Ã£o
    public function html($ver, $data = array()){

        
    $vr = "_criacao/_html/".$ver.".php";
        
        if(file_exists($vr)){
        self::$data = array_merge(self::$data, $data);
    $extrair = extract(self::$data);
    require_once ($vr);
    return $extrair;
        
        }
 else{
      $erro = '<div class="erropagina">
            <span class="header">Erro #404</span><br>
            <span class="erropagina">O arquivo
                <b>'.$vr.'</b> não pode ser encontrado!</span>
        </div>
        <br>
        <span class="lead">  Por alguma razão, não pôde ser encontrado no nosso servidor o arquivo de visualização '.$vr.'</span><br>
        <span class="lead">Volte para a página <a href="javascript:history.go(-1)">anterior</a> </span>';     
            
            
  die($erro);
        
    }

}

}