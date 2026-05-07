<?php 
$height=$_GET['a']; 
$radius=$_GET['b']; 
define("PI",3.14); 
$c=(2*PI*$radius)*($radius+$height); 
echo"area of a cylinder:$c<br>"; 
$d=PI*$radius*$radius*$height; 
echo"volume of cylinder:$d <br>"; 
?>