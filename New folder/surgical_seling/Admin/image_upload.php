<?php  session_start();	
		
		?>
<?php

include("conection.php");
$id = mysqli_real_escape_string($connect,$_POST['id']);

$i = "select * from admin where a_id = '".$id."'";
$row = mysqli_fetch_array (mysqli_query($connect,$i));

$image=mysqli_real_escape_string($connect,$_FILES['image']['name']);

if($_FILES['image']['error'] > 0)
{
$image = $row['image'];
}
else{
	$temp=$_FILES['image']['tmp_name'];
	move_uploaded_file($temp,"images/".$image);
}

	
	
			 if(mysqli_query($connect,("update admin set a_img = '".$image."'  where a_id = '".$id."'")))			 
					{
						echo '<script type="text/javascript">'; 
						echo 'alert("Congratulation.Successfully Updated");'; 
						echo 'window.location.href = "profile.php";';
						echo '</script>';
						
					}
			
			
			else
				echo"1 error";
	
	

	
 mysqli_close ( $connect );

?>