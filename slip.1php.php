<?php 
$n1=$_GET["num1"]; 
$n2=$_GET["num2"]; 
$ch=$_GET["c"]; 
if($ch=="1") 
{ 
    $ch=$n1+$n2; 
    echo"Addition is:$ch"; 
} 
else if($ch=="2") 
{ 
    $ch=$n1-$n2;  
    echo"Subtraction is:$ch"; 
} 
else if($ch=="3") 
{ 
    $ch=$n1*$n2; 
    echo"Multiplication is:$ch"; 
} 
else if($ch=="4") 
{ 
    $ch=$n1/$n2; 
} 
echo"Division is:$ch"; 
?>