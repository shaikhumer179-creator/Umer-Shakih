<?php 
$name=$_POST['name']; 
$class=$_POST['class']; 
$address=$_POST['address']; 
setcookie("name","$name",time()+3660); 
setcookie("class","$class",time()+3600); 
setcookie("address","$address",time()+3600); 
?> 
<html> 
<body> 
<head><title>ACCEPT THE MARKS OF SUBJECT</title></head> 
<form action="form3.php" method="post"> 
Enter MARKS OF PHYSICS<input type="text"name="phy" value=""><br> 
Enter  MARKS OF CHEM<input type="text"name="chem" value=""><br> 
Enter  MARKS OF BIOLOGY<input type="text"name="bio" value=""><br> 
Enter MARKS OF MATHS<input type="text"name="maths" value=""><br> 
Enter  MARKS OF MARATHI<input type="text"name="marathi" value=""><br> 
Enter  MARKS OF ENGLISH<input type="text"name="eng" value=""><br> 
<input type="submit"name="submit" value="submit"> 
</form> 
</body> 
</html>
