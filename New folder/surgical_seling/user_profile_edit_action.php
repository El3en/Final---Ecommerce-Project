
<?php  session_start();	
		if(!isset($_SESSION['user_id']))
		header("location:login_form.php");
		
		?>
<?php

include("conection.php");

$id = mysqli_real_escape_string($connect,$_POST['id']);
$fn = mysqli_real_escape_string($connect,$_POST['fname']);
$p = mysqli_real_escape_string($connect,$_POST['password']);
$ph = mysqli_real_escape_string($connect,$_POST['phone']);
$c = mysqli_real_escape_string($connect,$_POST['city']);
$add = mysqli_real_escape_string($connect,$_POST['address']);
	
	$b = "update user set name = '".$fn."',password = '".$p."',address = '".$add."',city = '".$c."',number = '".$ph."' where u_id = '".$id."'";
	$b1 = mysqli_query($connect,$b);
	
	
	
	if($b1 > 0 )
	{
		header('location:user_profile.php');
	}
	else
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("Sorry,You enterd invalid input");'; 
		echo 'window.location.href = "user_profile.php?u_id='.$id.'";';
		echo '</script>';
	}
	
	mysqli_close ( $connect );
 

?>