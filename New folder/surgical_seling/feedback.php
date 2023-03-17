  <?php
  include('conection.php');
  
   $n = $_POST['name'];
   $e = $_POST['email'];
   $s = $_POST['topic'];
   $m = $_POST['message'];
   
   
	$qub = "insert into feedback(name,email,topic,message)values "."('".$n."','".$e."','".$s."','".$m."') ";
	
	$exe = mysqli_query($connect,$qub);
	if($exe)
	{
		header("location:contact.php");
	}
	
	mysqli_close($connect);
?>