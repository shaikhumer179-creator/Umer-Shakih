<?php  
$name=$_POST['a']; 
$number=$_POST['b']; 
$unit=$_POST['c']; 
$amt=0; 
if($unit>0 && $unit<=50) 
{ 
    $amt=$unit+3.50+150; 
    echo"Total is $amt"; 
} 
else if($unit>50 && $unit<=150) 
{ 
    $amt=$unit+4.00+150; 
    echo"Total is $amt"; 
} 
else if($unit>150 && $unit<=250) 
{ 
    $amt=$unit+5.20+150; 
    echo"Total is $amt"; 
} 
else  
{ 
    $amt=$unit+6.50+150; 
    echo"Total Bill amount is : $amt";}?>