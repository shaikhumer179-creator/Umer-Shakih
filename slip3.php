<?php 
$ch=$_GET["ch"]; 
echo"$ch <br>"; 
$arr=array('one'=>1,'Two'=>2,'Three'=>3,'Four'=>4,'five'=>5,'six'=>6,'seven'=>7); 
switch($ch) 
{ 
    case 1: 
        echo"the initial array is:"; 
        print_r($arr); 
        break; 
 
    case 2: 
        $c=count($arr); 
        echo"$c"; 
    break; 
    
    case 3: 
        $index=$_GET['index']; 
        $index=$index-3; 
        $temp=array_splice($arr,$index,2); 
        echo"the new array is::"; 
        print_r($arr); 
        echo"the deleted elements are:"; 
        print_r($temp); 
        break; 
 
    case 4: 
        $array=array_flip($arr); 
        echo"the flipped elements are::"; 
        print_r($array); 
        break; 
 
    case 5: 
        shuffle($arr); 
        echo"the shuffled elements are::"; 
        print_r($arr); 
        break; 
} 
?> 
