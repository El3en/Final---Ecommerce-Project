
<?php
	session_start();
	if(! isset($_SESSION['id']))
		header('location:login.php');
	
?>
<?php

include ("conection.php");


$c = trim(mysqli_real_escape_string($connect,$_POST['p_id']));
$p = trim(mysqli_real_escape_string($connect,$_POST['price']));

	if(mysqli_query($connect,("insert into price_insert (p_id,price) values "." ('".$c."','".$p."') ")))
	{
				echo '<script type="text/javascript">'; 
						echo 'alert("Congratulation.Successfully Added Price");'; 
						echo 'window.location.href = "p_i.php";';
						echo '</script>';	
	}
					
 mysqli_close ( $connect );
 

?>