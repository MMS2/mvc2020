<?php

/**
 * Ajuda Carrinho de compras
 */
class AjudaCarrinho {
	

	
	
	
	function __construct() {
		
	}




	static public function pgsubtotal($for,$valor,$qtd){
		$subtotal = 0;
		
		foreach($for as $k){
			$totalm2 = number_format(implode(",", explode(".", $k[$valor])) * $k[$qtd],2);
 			  
	}
		
		echo $totalm2;	
		
		
		
	}
	
	
	
	
	
	
	
		static public function pgtotal($for,$valor, $desconto =null, $entrada = null){
		$total = 0;
		foreach($for as $item=>$p){
			$total += $p[$valor];		
		}
	echo number_format($total,2,',','.');	
	
	
	  $subtotal += $p['subtotal']-1+$cart;	
	
	
	}
		
		static public function pgtotalEntrada($for,$valor, $desconto = 0 , $entrada = 0){
		$total = 0;
		foreach($for as $item=>$p){
			$total += $p[$valor]-$desconto-$entrada;		
		}
	echo number_format($total,2,',','.');	
	}
			
		

		
		

}


?>