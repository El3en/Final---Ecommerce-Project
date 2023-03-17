     <div class="header-top">
	   <div class="wrap"> 
			  <div class="header-top-left">
			  	  <ul>
						<li><a href="policy.php" >Privacy</a></li> 
						<li><a href="term.php" >Terms</a></li>						
					</ul>	
   				    
					<div class="clear"></div>
					
   			 </div>
			 	<!--/services-->

	<div class="contact" style="padding-top:15px;">
			<form name="fm1" action="filter_action.php" method="POST">
				 <select id="continent" onchange="countryChange(this);" name="product_type" required>
					  <option  value="empty">Product Category</option>
					  <option  value="1">Surgical Products</option>
					  <option  value="2">Surgical Instruments</option>
				 </select>
				  <input type="text" id="div_state" placeholder="Insert Product Name" name="p" maxlength="33" required>
				 <button type="submit" >Submit</button>
			</form>
	</div>
			 <div class="cssmenu" style="margin-top:-30px;">
				<ul>
					 
<?php 
	include("conection.php");
	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$cart = mysqli_query($connect,"select * from cart where u_id = '".$id."'");
		$bba = mysqli_num_rows($cart);

?>
					<li><a href="logout.php">Logout</a></li> 
					<li><a href="user_profile.php">My Account</a></li> 
					<li><a href="user_cart.php" class="simpleCart_empty"><img src="images/cart.png" alt=""/>&nbsp Cart &nbsp (<?php echo($bba);?> items) </a></li>

<?php
	}
?>
<?php 
	if(!isset($_SESSION['user_id']) )
	{
?>
					<li><a href="login.php">Login</a></li> 
					<li><a href="login.php">Register</a></li>
					<li><a href="login.php" class="simpleCart_empty"><img src="images/cart.png" alt=""/>&nbsp Cart &nbsp (items) </a></li>
<?php
	}
?>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>