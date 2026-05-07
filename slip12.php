<?php 
$correctUsername = "admin"; 
$correctPassword = "password"; 
$username = $_POST['username']; 
$password = $_POST['password']; 
if($username === $correctUsername && $password === $correctPassword) 
{ 
echo "<form>"; 
echo "<h2>Welcome, $username!</h2>"; 
echo "</form>"; 
}  
else  
{ 
echo "<h2>Error: Invalid username or password.</h2>"; 
} 
?>