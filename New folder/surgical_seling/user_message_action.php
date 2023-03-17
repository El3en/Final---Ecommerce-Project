<?php 

		session_start();	
		if(!isset($_SESSION['user_id']))
		header("location:login.php");
		


include("conection.php");

$m = mysqli_real_escape_string($connect,$_POST['message']);
$id = mysqli_real_escape_string($connect,$_POST['id']);

	if (mysqli_query($connect,("INSERT INTO message(message,date,u_id)VALUES "."( '".$m."','".date('d M Y')."','".$id."' )")))	   
	{
		echo '<script type="text/javascript">'; 
		echo 'window.location.href = "message.php";';
		echo '</script>';		
	}
				
else
{
	echo"0 error";
}
	

 mysqli_close ( $connect );
		
 ?>