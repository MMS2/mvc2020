<?php

/* 
 * Demetrios Felipe - demetriosfelipe@outlook.com | demetrios@midiakitcom.com.br
 * 
 * Mídia Kitcom Comunicação | www.midiakitcom.com.br
/
 * 
 */
$alert_sucesso = "<script type='text/javascript'>"
. "alert('O cadastro foi realizado com sucesso.');"
. "window.location.href='javascript: history.back()';"       
 ."</script>";

$alert_esclusao = "<script type='text/javascript'>"
. "alert('O cadastro foi excluido com sucesso.');"
. "window.location.href='javascript: history.back()';"   
 ."</script>";


define("EM1", "Erro Mysql ");
define("EM2",  $alert_esclusao);
define("EM3", $alert_sucesso);