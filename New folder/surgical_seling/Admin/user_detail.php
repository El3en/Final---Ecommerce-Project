
<!DOCTYPE html>
<?php

session_start();

include("conection.php");
$id=$_SESSION['id'];



?>
<head>
<title>Surgical Products</title>

<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>

<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

<link href="css/profilestyle.css" rel="stylesheet" type="text/css" media="all" />

</head>


<body>
<section id="container">

<?php
	include("header.php");
	include("left.php");
?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		
		
	<?php
	$i = $_GET['u_id'];
	
$query = "SELECT * FROM user where u_id= '".$i."'";
$run =mysqli_query($connect,$query);
$fetch =mysqli_fetch_array($run); 

?>	
			 
		 <div class="banner_body">
		<div class="container">
		
			<div class="w3ls_logo_nav">
				<div class="w3ls_logo_nav_right">
					<div class="sap_tabs">
						<div class="w3ls_logo_nav_left">
							
						</div>
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<div class="resp-tabs-container">
								
								<ul class="resp-tabs-list">
									<li class="resp-tab-item" aria-controls="tab_item-1" id="tab_item-1"></li>
									
								</ul>
								
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1" >
				<!-- home -->					
									<div class="wthree_tab_content">
									
										<img src="<?php echo("../images/".$fetch['image']); ?>" width="400px" style="margin-left:300px"  class="img-responsive" />
										
										<div class="wthree_tab_content_pos">
											<div class="wthree_tab_content_pos_grid">
												<h2>Hello</h2>
												<h3>He's <?php echo($fetch['name']);?></h3>
										
												<ul class="address">
													<li>
														<ul class="address-text">
															<li><b>Username </b></li>
															<li><?php echo($fetch['username']);?></li>
														</ul>
													</li>
													<li>
														<ul class="address-text">
															<li><b>Password </b></li>
															<li><?php echo($fetch['password']);?></li>
														</ul>
													</li>
													<li>
														<ul class="address-text">
															<li><b>Phone </b></li>
															<li><?php echo($fetch['number']);?></li>
														</ul>
													</li>
													<li>
														<ul class="address-text">
															<li><b>Address </b></li>
															<li><?php echo($fetch['address']);?></li>
														</ul>
													</li>
													<li>
														<ul class="address-text">
															<li><b>City </b></li>
															<li><?php echo($fetch['city']);?></li>
														</ul>
													</li>
												</ul>
												
									 </div>
										</div>
									</div>
				<!-- //home -->
								</div>
								
			<!-- //contact -->
							</div>
						</div>
						
					</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
		
		
		
		
		
		
 <!-- footer -->
		 <?php
	include("footer.php");
?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
</section>

							



<script src="js/jquery2.0.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.nicescroll.js"></script>


<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
						<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
							});
							});			
						</script>

<script src="js/profileeasyResponsiveTabs.js" type="text/javascript"></script>
</body>
</html>