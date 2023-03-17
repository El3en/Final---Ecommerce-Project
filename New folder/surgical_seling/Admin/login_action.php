<?php

session_start();


include ("conection.php");


$uname=$_POST['a_user'];
$pass=$_POST['a_pass'];

$a="SELECT * FROM admin where a_email LIKE '".$uname."' AND a_pass='".$pass."' ";

$ql=mysqli_query($connect,$a);
if($f=mysqli_fetch_array($ql))
{
	$_SESSION['id'] = $f['a_id'];
	header('location:admin.php');
	}
else
	header('location:a_login.php');
	
?>