
<?php
	session_start();
	if(! isset($_SESSION['id']))
		header('location:login_form.php');
	
?>
<?php

include("conection.php");

		$conection=mysqli_connect('127.0.0.1','root','');

		mysqli_select_db($conection,'awais');

		$sql = "DELETE FROM products WHERE p_id='$_GET[p_id]'";

		if(mysqli_query($conection,$sql))
		header("refresh:1; url=admin.php");
		else
			echo "Not Deleted";
		
		mysqli_close ($connect);
 

?>