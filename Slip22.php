<?php 
$op=$_POST['op']; 
switch($op) 
{ 
case 1 : echo "File name : ".$_FILES['file']['name']."</br>"; 
         $t=$_FILES['file']['type']; 
         echo "Type  :".$t."</br>"; 
         break; 
                                                                      
        
case 2 :  $f_name=$_FILES['file']['name']; 
          $fh = fopen('$f_name','a'); 
          fclose($fh); 
          unlink($f_name); 
          echo "Deleted file is : ".$_FILES['file']['name']."</br>"; 
          break; 
}?>