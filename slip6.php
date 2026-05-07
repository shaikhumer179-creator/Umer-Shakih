<?php 
$string=$_GET["s"]; 
if(strcmp($string,strrev($string))==0) 
{ 
echo"$string is palindrome"; 
} 
else 
{ 
echo"$string is not palindrome"; 
} 
?>