
<?php
	session_start();
	if(! isset($_SESSION['id']))
		header('location:login_form.php');
	
?>
<?php

include("conection.php");

$id = mysqli_real_escape_string($connect,$_POST['id']);
$n = mysqli_real_escape_string($connect,$_POST['n']);
$d = mysqli_real_escape_string($connect,$_POST['d']);

$image = mysqli_real_escape_string($connect,$_FILES['image']['name']);


$a1="SELECT * FROM products WHERE p_id = '".$id."' ";
	$a2=mysqli_query($connect,$a1);
	$a3= mysqli_fetch_array($a2);


if($_FILES['image']['error'] > 0)
{
	$image=$a3['image'];
}
else{
	$temp=$_FILES['image']['tmp_name'];
	move_uploaded_file($temp,"images/".$image);
}


		if(mysqli_query($connect,("update products set si_product = '".$n."',description = '".$d."',image = '".$image."' where p_id = '".$id."'") ))
		{
			echo '<script type="text/javascript">'; 
						echo 'alert("Congratulation.Successfully Update");'; 
						echo 'window.location.href = "surgical_instrument.php";';
						echo '</script>';
		}
			
					
 mysqli_close ($connect);
 

?>