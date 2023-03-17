<?php
	session_start();
	
?>
<?php
  include("conection.php");

	$user = mysqli_real_escape_string($connect,$_POST['name']);
	$pass = mysqli_real_escape_string($connect,$_POST['pass']);
	
	$query ="SELECT * FROM user where username LIKE '".$user."' AND password LIKE '".$pass."' ";
	
	$execute = mysqli_query($connect,$query);
	$row = mysqli_fetch_array($execute);
	
	if ($row > 0)
	{
		$_SESSION['user_id'] = $row['u_id'];
		header('location:user_profile.php');
	}
	
	else{
		
		echo '<script type="text/javascript">'; 
		echo 'alert("Sorry: You entered wrong information.");'; 
		echo 'window.location.href = "login.php";';
		echo '</script>';
	}
	
	mysqli_close($connect);
	
	?>
