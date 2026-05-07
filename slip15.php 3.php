<?php 
$x=$_COOKIE['name']; 
$y=$_COOKIE['class']; 
$z=$_COOKIE['address']; 
$bio=$_POST['bio']; 
$chem=$_POST['chem']; 
$maths=$_POST['maths']; 
$mara=$_POST['marathi']; 
$eng=$_POST['eng']; 
$phy=$_POST['phy']; 
$total=$chem+$bio+$phy+$maths+$mara+$eng; 
$per=$total/6.0; 
?> 
<html> 
<table border="2"> 
<tr> 
<th colspan="5">MARKSHEET</th> 
</tr> 
<tr> 
<td colspan="5"><b>NAME:</b><?php echo "$x"?><br> 
<b>CLASS:</b><?php echo "$y"?><br> 
<b>ADDRESS:</b><?php echo "$z"?><br> 
</tr> 
<tr> 
<td colspan="2">PHYSICS 
<td><?php echo "$phy"?></td> 
</tr> 
<tr> 
<td colspan="2">CHEMISTRY 
<td><?php echo "$chem"?></td> 
</tr> 
<tr> 
<td colspan="2">BIOLOGY 
<td><?php echo "$bio"?></td> 
</tr> 
<tr> 
<td colspan="2">MATHS 
<td><?php echo "$maths"?></td> 
</tr> 
<tr> 
<td colspan="2">MARATHI 
<td><?php echo "$mara"?></td> 
</tr> 
<tr> 
<td colspan="2">ENGLISH 
<td><?php echo "$eng"?></td> 
</tr> 
<tr> 
<td colspan="2">TOTAL 
<td><?php echo "$total"?></td> 
</tr> 
<tr> 
<td colspan="2">PERCENTAGE 
<td><?php echo "$per"?></td> 
</tr> 
</table> 
</html>