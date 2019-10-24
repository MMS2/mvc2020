<?php

/*
 * Demetrios Felipe - demetriosfelipe@outlook.com 
/

/**
 * Description of upload
 *
 * @author Design
 */
class AjudaUpload  {
    //put your code here

    


    
 static  function upload($imagem,$pasta){
   

    
     $PastaUpload = $pasta;
      $ext =  explode(".", $imagem['name']);
      $ext = end($ext);
      
      echo $pasta;
      
      
      if(file_exists($PastaUpload)){
               echo "<br>";
       echo "pasta existe<br>";
        } else {
       mkdir($PastaUpload, 0777, true);
        }    
        
        
       $imageLimpa = AjudaTexto::limpar($imagem['name']).".".$ext;  
       
       
       $salvarPasta =   move_uploaded_file($imagem['tmp_name'], $PastaUpload."/".  $imageLimpa);
       
       
       
        if($salvarPasta){
                 echo "<br>";
        echo "imagem Cadastrada<br>";
        echo  $imageLimpa;
        }else {
            echo "<br>";
       echo "falha ao cadastrar foto<br>";
     
       echo $imagem['name']['error'];
      }
      

      
      
    }
	
	
	
	static function multipleupload($img, $pasta){
		
		
		
			$i = 0 ;
		$imagem = $img;
		
		$dirRaiz = "_html/_upload/";
		  if(file_exists($dirRaiz.$pasta)){
       echo "<br>";
       echo "pasta existe<br>";
        } else {
       mkdir($dirRaiz.$pasta, 0777, true);
			
        }    
        
		
		
    foreach ($imagem['name'] as $file)
            {
                    print_r($file);
                    echo "<br>";
										$ext =  explode(".", $file);
				    				$ext = end($ext);
                    $errors= array();
                    $file_name = $imagem['name'][$i];
                    $file_size =$imagem['size'][$i];
                    $file_tmp =$imagem['tmp_name'][$i];
                    $file_type=$imagem['type'][$i]; 
										
			
										$imageLimpa = AjudaTexto::limpar($imagem['name'][$i]).".".$ext;  
										$imgup = "_html/_upload/".$pasta.$imageLimpa;
			
                  $file = $imgup; 
									$file2 = $file_tmp.".".$ext; 	
			
                 
								
									move_uploaded_file($file_tmp,$file);     

			
			
			
			
			
			
			
			
			
			
			
                    //File Loading Successfully
               $i++;
            }
			}
		
		
	static	function  delTree($dir) { 
      $files = array_diff(scandir($dir), array('.','..')); 
      foreach ($files as $file) { 
        (is_dir("$dir/$file")) ?  delTree("$dir/$file") : unlink("$dir/$file"); 
      } 
      return rmdir($dir); 
    }

  
	
		

	
}
