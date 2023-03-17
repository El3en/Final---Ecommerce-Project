<?php
session_start();


include ("conection.php");

$name =$_POST['a_nme'];
$pass =$_POST['a_pass'];
$mail =$_POST['a_email'];
$phn =$_POST['a_phn'];
$addr =$_POST['a_addr'];

$id =$_SESSION['id'];

$sql=" update admin set a_nme = '".$name."' ,a_pass = '".$pass."' ,a_email = '".$mail."' ,a_phn = '".$phn."' ,a_addr = '".$addr."' where a_id = '".$id."'";	
	  
	  $query=mysqli_query($connect,$sql);
	  
	  if($query>0)
{
	header("location:profile.php");

	}
else
{
	echo('admin inserted failed');
}
?>