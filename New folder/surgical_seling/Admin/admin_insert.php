<?php
include ("conection.php");

$name =$_POST['a_nme'];
$pass =$_POST['a_pass'];
$mail =$_POST['a_email'];
$phn =$_POST['a_phn'];
$addr =$_POST['a_addr'];
$image =$_FILES['image'] ['name'];
if($_FILES['image']['error'] >0)
{
	echo ('image not uploaded');
	
}
else
{
	
	$a=$_FILES['image']['tmp_name'];
	move_uploaded_file($a, "img/".$image);
	
	
}
$sql="INSERT INTO admin(a_nme,a_pass,a_email,a_phn,a_ddr,a_img)
      VALUES"."('".$name."' , '".$pass."' , '".$mail."' , '".$phn."' , '".$addr."' , '".$image."')";	
	  
	  $query=mysqli_query($connect,$sql);
	  
	  if($query>0)
{
	echo ('succesfully inserted');

	}
else
{
	echo('admin inserted failed');
}
?>