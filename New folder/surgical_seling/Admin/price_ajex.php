<?php


	include("conection.php");

	$p_code = mysqli_real_escape_string($connect,$_GET['p_id']);
	
if($p_code != "")
{	
	
	$sql = mysqli_query($connect,"select * from purchase where p_id = '".$p_code."'");
	

		$a = mysqli_fetch_array($sql);
		if($a['price'] > 0)
		{
?>
		<input type='text' class='form-control' value='<?php echo($a['price']); ?>' readonly>
	<?php
		}
		else{
			
?>
		
		<input type='text' class='form-control' value='Please Insert Price of Product First in which you want to sale...' readonly>
<?php			
		}
}

?>