<?php 
$email=$_POST['email']; 
function isValidEmail($email)  
{ 
$pattern = '/^[^@]+(\.[^@]+)?@[^@]+\.[^@]+$/'; 
    if (preg_match($pattern, $email))  
    { 
        return true; 
    }  
    else  
    { 
        return false; 
    } 
} 
 
if (isValidEmail($email)) { 
    echo "The email address is valid."; 
} else { 
    echo "The email address is invalid."; 
} 
?>