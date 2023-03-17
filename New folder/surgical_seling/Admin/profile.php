
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
$query = "SELECT * FROM admin  where a_id= '".$id."'";
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
									<div class="pull-left alert alert-success no-margin alert-dismissable">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>

										<i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
										Click on the image below or on profile fields to edit them ...
									</div>
								</ul>
								
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1" >
				<!-- home -->					
									<div class="wthree_tab_content">
									
										<img src="<?php echo("images/".$f['a_img']); ?>" href="#myModal" role="button" data-toggle="modal" class="img-responsive" />
										
										<div class="wthree_tab_content_pos">
											<div class="wthree_tab_content_pos_grid">
												<h2>Hello</h2>
												<h3>I'm <?php echo($fetch['a_nme']);?></h3>
										
												<ul class="address">
													<li>
														<ul class="address-text">
															<li><b>Password </b></li>
															<li><?php echo($fetch['a_pass']);?></li>
														</ul>
													</li>
													<li>
														<ul class="address-text">
															<li><b>Phone </b></li>
															<li><?php echo($fetch['a_phn']);?></li>
														</ul>
													</li>
													<li>
														<ul class="address-text">
															<li><b>Address </b></li>
															<li><?php echo($fetch['a_addr']);?></li>
														</ul>
													</li>
													<li>
														<ul class="address-text">
															<li><b>Email </b></li>
															<li><?php echo($fetch['a_email']);?></li>
														</ul>
													</li>
												</ul>
												<div style="padding-left:80%;padding-top:10%;">
												<a href="admin_update.php">
									 <input type="submit"  class="btn btn-info" value ="UPDATE" >
												</a>
												</div>
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

<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form name="fmm" method="post" action="image_upload.php" enctype="multipart/form-data">
		<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Upload Image</h3>
			<input type="hidden" name="id" value="<?php echo($f['a_id']); ?>">
        </div>
        <div class="modal-body">
            <p style="padding-left:30%;" ><input type="file" name="image" required ></p>
        </div>
        <div class="modal-footer">
			
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <input type="Submit" value="Submit" class="btn btn-submit" >
        </div>
		</form>
      </div>
    </div>
</div>
							



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