<?php
	session_start();	
	if(!isset($_SESSION['user_id']))
		header('location:login.php');
?>
<?php
include("conection.php");

$id = $_SESSION['user_id'];

$p = mysqli_real_escape_string($connect,$_POST['pid']);
$price = mysqli_real_escape_string($connect,$_POST['price']);
$quantity = mysqli_real_escape_string($connect,$_POST['quantity']);

$q = mysqli_query($connect,"select * from cart where u_id = '".$id."'");
$q1 = mysqli_num_rows($q);
if($q1 < 5)
{	
		if(mysqli_query($connect,("insert into cart(price,quantity,p_id,u_id)values"."('".$price."','".$quantity."',
		'".$p."','".$id."')")))
		{
			header('location:user_cart.php');
		}
		else{
			echo("dfdf");
		}
}
else{
			echo '<script type="text/javascript">'; 
			echo 'alert("Sorry: Your Cart List are full please Order that first....");'; 
			echo 'window.location.href = "user_cart.php";';
			echo '</script>';
	}

 mysqli_close ( $connect );
 

?>