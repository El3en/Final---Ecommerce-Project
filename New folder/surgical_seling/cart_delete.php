<?php
	session_start();
?>
<?php

	
	include('conection.php');
		$d = mysqli_real_escape_string($connect,$_GET['c_id']);

		
$t =mysqli_query($connect,("select * from cart where c_id = '".$d."'  "));
	$row = mysqli_fetch_array($t);

				if( mysqli_query($connect,("delete from cart where c_id = '".$d."' ")))
				{
					echo '<script type="text/javascript">';  
					echo 'window.location.href = "user_cart.php";';
					echo '</script>';							
				}		
						
	mysqli_close($connect);
?>
