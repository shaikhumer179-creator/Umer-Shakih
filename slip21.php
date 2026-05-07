<?php 
base=$_POST['base']; 
h=$_POST['h']; 
l=$_POST['l']; 
b=$_POST['b']; 
r=$_POST['r']; 
interface findarea 
{ 
function area($l,$c); 
} 
class rectangle implements findarea 
{ 
    function area($l,$b) 
    { 
        $area=$l*$b; 
        echo"Area of Rectangle :".$area."<br>"; 
    } 
} 
class Triangle extends rectangle  
{ 
    function area($base,$h) 
 
{ 
    $area=$base*$h; 
    echo"Area of Triangle :".$area."<br>"; 
} 
} 
class circle  
{ 
    function area($r,$r1) 
    { 
        $area=0.5*$r*$r1; 
        echo"Area of Circle :".$area."<br>"; 
    } 
} 
$fr=new rectangle; 
$fr->area($l,$b); 
 
$ft=new Triangle; 
$ft->area($base,$h); 
 
$fc=new circle(); 
$fc->area($r,$r); 
?>