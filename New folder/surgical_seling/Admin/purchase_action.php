
<?php
	session_start();
	if(! isset($_SESSION['id']))
		header('location:login_form.php');
	
?>
<?php

include("conection.php");

$id = mysqli_real_escape_string($connect,$_POST['p_id']);
$pn = mysqli_real_escape_string($connect,$_POST['pn']);
$q = mysqli_real_escape_string($connect,$_POST['q']);
$p = mysqli_real_escape_string($connect,$_POST['p']);
$d = mysqli_real_escape_string($connect,$_POST['d']);

		if(mysqli_query($connect,("insert into purchase (p_name,quantity,price,date,p_id) values "." ('".$pn."','".$q."','".$p."','".$d."','".$id."')")))
		{
			echo '<script type="text/javascript">'; 
						echo 'alert("Congratulation.Successfully Added");'; 
						echo 'window.location.href = "surgical_product_detail.php?p_id='.$id.' ";';
						echo '</script>';
		}
					
 mysqli_close ($connect);
 

?>