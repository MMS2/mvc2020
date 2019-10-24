<?php
/**
* Class and Function List:
* Function list:
* - __construct()
* - retorna()
* - cadastra()
* - query()
* - altera()
* - apaga()
* Classes list:
* - DmModel extends Bancodedados
*/
/*
 * Demetrios Felipe - demetriosfelipe@outlook.com
*/
include ("_sistema/_incluir/_erro/erroMysql.php");

class DmModel extends Bancodedados
{
    /* Retorna */
	public $pref 		 = null; /*pref - MAX, DISTINCT ETC*/
    public $orderid      = null; /* ORDER BY ID */
    public $ordervalor   = null; /* ORDER BY VALOR */
    public $limite       = null; /* LIMITE 0,0 / 0 */
    public $onde         = null; /* Where ID = Busca */
    public $apagaid      = null; // INDICE DE EXCLUSAO
    public $apagavalor   = null; // VALOR A SER EXCLUIDO
    public $atualizaid   = null; // INDICE DE ATUALIZAÇÃO
    public $atualzavalor = null; // VALOR DO ID A SER ATUALIZADO
	public $join 		 = null; //JOIN
	public $list		 = null; /*LISTA  select "NOME", TESTE ... FROM*/
	public $data         = null;
    function __construct()
    {

        parent::__construct();
    }

    /* RETORNA REGISTRO */

    function retorna($tabela    = null)
    {

        $ondebusca = (isset($this->onde)) ? " WHERE " . $this->onde . " " : " ";
        $orderby   = " Order By " . $this->orderid . " " . $this->ordervalor;
        $order     = (isset($this->orderid)) ? $orderby : " ";
        $limite    = (isset($this->limite)) ? " Limit " . $this->limite : " ";
		$ast    = (isset($this->list)) ?  $this->list : " * ";
		
		
		
		
echo "<b>SELECT ".$this->pref." ". $ast ." from " . $tabela . " " . $ondebusca . " ".$this->join."  " . $order . " " . $limite."</b>";
        $bd        = $this
            ->banco
            ->prepare("SELECT ".$this->pref." ". $ast ." from " . $tabela . " " . $ondebusca . " ".$this->join."  " . $order . " " . $limite);
        $bd->execute();
        return $bd->fetchAll(PDO::FETCH_OBJ);
    }




    function retornaq($tabela    = null)
    {

   
		
	echo 		 $tabela;
        $bd        = $this
            ->banco
            ->prepare($tabela);
        $bd->execute();
        return $bd->fetchAll(PDO::FETCH_OBJ);
    }






    /* CADASTRA */

    function cadastra($tabela, $data)
    {
 echo $cadastra = " (`" . implode("`, `", array_keys($data)) . "`) VALUES ('" . implode("', '", $data) . "') ";
        $bd       = $this
            ->banco
            ->prepare("INSERT INTO " . $tabela . " " . $cadastra);
        $bd->execute();

        if ($bd->rowCount() > 0)
        {

        }
        else
        {
           //erro
   //	echo "<pre>";
     //     print_r($bd->errorInfo());
	//	  echo "</pre>";
        }
    }



    /* CADASTRA */

    function altera($tabela, $data)
    {

        /*         * UPDATE nome_tabela
          /SET CAMPO = "novo_valor"
          /WHERE CONDIÃƒâ€¡ÃƒÆ’O
        */

  
     
       $altera = "SET " . $data;
	   
	   echo "UPDATE " . $tabela . "  " . $altera . " where $this->atualizaid =  ?"; 
		  
        $bd     = $this
            ->banco
            ->prepare("UPDATE " . $tabela . "  " . $altera . " where $this->atualizaid =  ?");
        $bd->bindValue(1, $this->atualzavalor);
        $bd->execute();
        if ($bd->rowCount() > 0)
        {

        }
        else
        {
        	//echo "<pre>";
        //  print_r($bd->errorInfo());
		//  echo "</pre>";
        }

     
    }

    function apaga($tabela)
    {
        $bd = $this
            ->banco
            ->prepare("DELETE FROM " . $tabela . " WHERE " . $this->apagaid . " = ? ");

        // $bd = $this->banco->prepare("DELETE FROM " . $tabela . " WHERE id = ?");
        $bd->bindValue(1, $this->apagavalor);
        $bd->execute();
        if ($bd->rowCount() > 0)
        {

        }
        else
        {
        //erro
        //      	echo "<pre>";
       //   print_r($bd->errorInfo());
		//  echo "</pre>";
        }
    }

}

