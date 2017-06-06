<?php  
ob_start();
require("utility.php"); ?>

<?php
$u_name=$_POST['name'];
$r_num=$_POST['reg_no'];
$college=$_POST['clg'];
$dep=$_POST['dept'];
$yr=$_POST['year'];
$mob=$_POST['phone'];
$e_mail=$_POST['email'];



$sql=" INSERT INTO reg (name,reg_no,college,dept,year,phone,email) values ('$u_name','$r_num','$college','$dep','$yr','$mob','$e_mail')";

$result=connectdb($sql);

if($result)
{
	echo "<h1> YOU ARE REGISTERED </h1> " ;
	echo "Redirecting...";
        header("refresh:2;url=index.html");
}
else
{
	echo "<h1> Register again </h1> " ;	
	echo "Redirecting...";
        header("refresh:2;url=register.html");
}
?> 	