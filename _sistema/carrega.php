<?php
/**
* Class and Function List:
* Function list:
* Classes list:
*/
/*
*/

date_default_timezone_set('America/Sao_Paulo');
ob_start();
session_start();
$mostraerro =1;
ini_set('display_errors', $mostraerro);
ini_set('display_startup_erros', $mostraerro);

error_reporting(E_ALL ^ E_DEPRECATED);

//STRINGS PASTA DA APLICAÇÃO
$url = "http://" . $_SERVER['SERVER_NAME'] . "/MVC2020/";
$titulo = "Kian Arte em Tapetes";

$baseurlapp = "web";


$versao = "0.0.2";

define("__VERSAO__", $versao);

//STRINGS CONNSTANTES DEFINITIVAS
define('BASEURL', $url);
define('TITULOAPP', $titulo);


define('PUBLICURL', BASEURL . "_html/");
define('IMGPUBLIC', PUBLICURL . '_images/');
define('JSPUBLIC', PUBLICURL . '_js/');
define('CSSPUBLIC', PUBLICURL . '_css/');

define('BASEURLAPP', $baseurlapp);
define('NOMESITE', $titulo);

// CARREGAR SISTEMA
require ("_sistema/init.php");
require ("_sistema/_incluir/carregaClasse.php");
require ("_sistema/_incluir/bancodedados.php");
require ("_sistema/_incluir/_app/dmModel.php");
require ("_sistema/_incluir/_app/dmControle.php");

// CARREGAR CLASSES
$array = array(
    'AjudaCarregaHeader',
    'AjudaImagem',
    'AjudaForm',
    'AjudaSessao',
    'AjudaUpload',
		'PHPExcel',	'AjudaCarrinho'
		
);
CarregaClasse::arrayClasse($array);
// include("pdf-php/class.ezpdf.php");
require ("_sistema/_incluir/pdf/src/Cezpdf.php");
require ("_sistema/_incluir/fpdf/fpdf.php");
require ("_sistema/_incluir/fpdf/barcode.php");
require ("_sistema/_incluir/fpdf/FPDF_EXTENDS.php");
//require ("_sistema/_incluir/Zebra/Zebra_Form.php");
//require_once ("_sistema/_incluir/excel/Classes/PHPExcel.php");	 


$h = "localhost";
$u = "root";
$p = "";
$b = "";

define("HOST", $h);
define("USER", $u);
define("PASS", $p);
define("BD", $b);



$senhaAdm = '123456';
define("__USERPASSMYSQL__",$senhaAdm);




$bancos = array( array('code' => '001', 'name' => 'Banco do Brasil'),
 array('code' => '341', 'name' => 'Banco Itaú S.A'),
 array('code' => '184', 'name' => 'Banco Itaú BBA S.A.'),
 array('code' => '033', 'name' => 'Banco Santander (Brasil) S.A.'),
 array('code' => '356', 'name' => 'Banco Real S.A. (antigo)'),
 array('code' => '652', 'name' => 'Itaú Unibanco Holding S.A.'),
 array('code' => '237', 'name' => 'Banco Bradesco S.A.'),
 array('code' => '745', 'name' => 'Banco Citibank S.A.'),
 array('code' => '399', 'name' => 'HSBC Bank Brasil S.A. – Banco Múltiplo'),
 array('code' => '104', 'name' => 'Caixa Econômica Federal'),
 array('code' => '389', 'name' => 'Banco Mercantil do Brasil S.A.'),
 array('code' => '453', 'name' => 'Banco Rural S.A.'),
 array('code' => '422', 'name' => 'Banco Safra S.A.'),
 array('code' => '633', 'name' => 'Banco Rendimento S.A.'),
 array('code' => '753', 'name' => 'Banco SICOOB'), 
 
);

sort($bancos);

define('BANCOS__', $bancos);




//AjudaSessao::apagasessao();