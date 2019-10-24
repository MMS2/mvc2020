<?php

/* 
 * Demetrios Felipe - demetriosfelipe@outlook.com
 * 
 * 
 */

class init

{

	// Vareaveis
	// private $adminfront = ADMINFRONT;
	private $_controle = BASEURLAPP;
	private $_metodo = 'index';
	private $_valor = array();

	// CONSTRUCT

	public

	function __construct()
	{
		$url = $this->url();
		//print_r($url);
		AjudaSessao::salva('base', $url[0]);
		$pasta = '_criacao/_app/_controle/' . $url[0] . '.php';
		if (file_exists($pasta)) {
			$this->_controle = $url[0];
			unset($url[0]);
		}

		if (isset($url[0])) {
			AjudaSessao::salva('uri', $url[0]);
			$erro = '    <div class="erropagina">
            <span class="header">Controle Erro #404</span><br>
            <span class="erropagina">O arquivo
                <b>' . $pasta  . '</b> não pode ser encontrado!</span>
        </div>
        <br>
        <span class="lead">  Por alguma razão, não pôde ser encontrado no nosso servidor o arquivo de configuração ' . $url[0] . '</span><br>
        <span class="lead">Volte para a página <a href="javascript:history.go(-1)">anterior</a> </span>';

			echo $erro;
		} else {
			require_once '_criacao/_app/_controle/' . $this->_controle . '.php';

			$this->_controle = new $this->_controle;
		}

		if (isset($url[1])) {
			if (method_exists($this->_controle, $url[1])) {
				$this->_metodo = $url[1];
				unset($url[1]);
			} else {
				$metodolocal = '_criacao/_app/_controle/' .  $url[1] . '.php';

				$erro2 = '<div class="erropagina">
            <span class="header">Erro #404</span><br>
            <span class="erropagina">Metodo O arquivo
                <b>' . $metodolocal . '</b> não pode ser encontrado!</span>
        </div>
        <br>
        <span class="lead">  Por alguma razão, não pôde ser encontrado no nosso servidor o arquivo de visualização ' . $url[1] . '</span><br>
        <span class="lead">Volte para a página <a href="javascript:history.go(-1)">anterior</a> </span>';
				echo $erro2;
			}
		} else { }

		$this->_valor = $url ? array_values($url) : array();
		call_user_func_array(array(
			$this->_controle,
			$this->_metodo
		), $this->_valor);
	}

	// URL

	public function url()
	{

		if (isset($_GET['url'])) {


			return $url = explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));
		} else { }
	}
}
