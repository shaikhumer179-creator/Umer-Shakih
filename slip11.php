<?php   
$name=$_POST['name']; 
$choice=$_POST['option'];  
switch($choice) 
{  
case 1: echo "<b>".strtoupper($name)."</b>"; 
        break; 
case 2: echo "<b>".ucfirst($name)."</b>"; 
        break; 
        default : echo "Please choose one operation"; 
    } 
?> 