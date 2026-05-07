<?php 
$id=$_GET["a"]; 
$name=$_GET["b"]; 
$sold=$_GET["c"]; 
$rate=$_GET["d"]; 
$total=0; 
echo"your product id is:$id <br>"; 
echo"your product name is:$name <br>"; 
echo"your product unit is:$sold <br>"; 
echo"your product rate is:$rate <br>"; 
$total=$rate*$sold; 
echo"your total is:$total <br>"; 
?>