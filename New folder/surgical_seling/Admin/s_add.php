
<?php
	session_start();
	if(! isset($_SESSION['id']))
		header('location:login_form.php');
	
?>
<?php

include("conection.php");

$n = mysqli_real_escape_string($connect,$_POST['n']);
$d = mysqli_real_escape_string($connect,$_POST['d']);

$image = mysqli_real_escape_string($connect,$_FILES['image']['name']);

if($_FILES['image']['error'] > 0)
{
	$image="user.png";
}
else{
	$temp=$_FILES['image']['tmp_name'];
	move_uploaded_file($temp,"images/".$image);
}

$sqlchk="SELECT * FROM products WHERE sp_product LIKE '" .$n."' OR si_product LIKE '".$n."' ";
	$result=mysqli_query($connect,$sqlchk);
	$numrows= mysqli_affected_rows($connect);
	
	if($numrows > 0 ){
	echo '<script type="text/javascript">'; 
			echo 'alert("Sorry: Product already exist.");'; 
			echo 'window.location.href = "add_company.php";';
			echo '</script>';
	}
	else
	{
		if(mysqli_query($connect,("insert into products (sp_product,description,image) value "." ('".$n."','".$d."','".$image."')")))
		{
			echo '<script type="text/javascript">'; 
						echo 'alert("Congratulation.Successfully Added");'; 
						echo 'window.location.href = "add_company.php";';
						echo '</script>';
		}
	}		
					
 mysqli_close ($connect);
 

?>