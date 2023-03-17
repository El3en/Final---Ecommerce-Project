<?php

include("conection.php");

$fn = mysqli_real_escape_string($connect,$_POST['fname']);
$u = mysqli_real_escape_string($connect,$_POST['username']);
$p = mysqli_real_escape_string($connect,$_POST['pass']);
$ph = mysqli_real_escape_string($connect,$_POST['ph']);
$c = mysqli_real_escape_string($connect,$_POST['city']);
$add = mysqli_real_escape_string($connect,$_POST['add']);

$image = mysqli_real_escape_string($connect,$_FILES['image']['name']);


if($_FILES['image']['error'] > 0)
{
	$image="user.png";
}
else{
	$temp=$_FILES['image']['tmp_name'];
	move_uploaded_file($temp,"images/".$image);
}

	$a = "SELECT * FROM user WHERE username LIKE '" .$u."' ";
	$a1 = mysqli_query($connect,$a);
	$a2 = mysqli_affected_rows($connect);
	
	if($a2 > 0 ){
			echo '<script type="text/javascript">'; 
			echo 'alert("Sorry: Username already exist.");'; 
			echo 'window.location.href = "login.php";';
			echo '</script>';
	}
	else
	{
		$f = "insert into user(name,username,password,address,image,city,number)values "."('".$fn."','".$u."','".$p."','".$add."','".$image."','".$c."','".$ph."')";
		$f1 = mysqli_query($connect,$f);

		if($f1 > 0 )
		{
			header('location:login.php');
		}
		else{
			echo '<script type="text/javascript">'; 
			echo 'alert("Something wrong enter");'; 
			echo 'window.location.href = "login.php";';
			echo '</script>';
		}
	}
	
 mysqli_close ( $connect );
 

?>