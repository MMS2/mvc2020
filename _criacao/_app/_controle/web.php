<?php

/**
 * Demetrios Felipe, demtriosfelipe@outlook.com
 * instagram: dmobass
 * facebook: demetriosf.felipe
 */
class Web extends DmControle
{

    /**
     * Página inicial - index() após o login,
     * nele terá as informações de relatorio mensal
     */


    public function __construct(){
 
    }

    public function get_ip()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

    function index()
    {
        $arr = [
            'conteudo' => 'paginas/index/indexHome'
        ];
        $this->html('template/indexTemplate', $arr);
    }
}
