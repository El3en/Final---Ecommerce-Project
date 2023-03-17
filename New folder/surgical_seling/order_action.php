
<?php 
		session_start();	
		if(!isset($_SESSION['user_id']))
		header("location:login.php");
		
?>


<?php


include("conection.php");
$id = mysqli_real_escape_string($connect,$_GET['u_id']);

$dd = mysqli_query($connect,"select * from cart where u_id = '".$id."'");
while($fet = mysqli_fetch_array($dd))
{
	$pr = $fet['price'];
	$q = $fet['quantity'];
	$p = $fet['p_id'];
	
	if(mysqli_query($connect,("INSERT INTO sale(price,quantity,p_id,u_id) VALUES "."
		('".$pr."','".$q."','".$p."','".$id."' )")))
	{
					echo '<script type="text/javascript">';  
					echo 'window.location.href = "user_profile.php";';
					echo '</script>';
	}
	else
		echo"1";

mysqli_query($connect,"delete from cart where c_id = '".$fet['c_id']."'");
}

mysqli_close($connect);		

?>