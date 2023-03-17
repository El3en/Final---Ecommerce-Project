<?php
	session_start();

?>
<!DOCTYPE html>
<html>

<head>
		<title>Hi.Com | Home</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/font-awesome.css" rel="stylesheet">
		  
		
		<script src="js/jquery.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
<!----------Menu----------------------->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<!----------Filter----------------------->
<link href="css/filter.css" rel="stylesheet" type="text/css" media="all" />
<!----------Icons----------------------->
<link href="css/icon.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!----------Company----------------------->
<link rel="stylesheet" href="css/company.css" />
<!----------Footer----------------------->
<link href="css/footer.css" rel='stylesheet' type='text/css' />
<!-- MiniSlider files -->
<link href="css/minislider.css" rel='stylesheet' type='text/css' />
<link href="css/owl.carousel.css" rel="stylesheet">

<link href="css/footer.css" rel="stylesheet">

<link href="css/about.css" rel="stylesheet" type="text/css" media="all" />




</head>

<body>

<?php
	include("top_head.php");
	
	include("header.php");
		?> 
		<div class="section"> 

<!-- dresses -->
	<div class="dresses">
       <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Contact Us</h1>
					</div>
				</div>
			</div>
		</div>
        
	     <div class="section">
	    	<div class="container">
	        	<div class="row">
	        		<div class="col-sm-7">
	        			<!-- Map -->
	        			<div id="googlemap" style="width:100%; height:350px;">

	        			</div>
	        			<!-- End Map -->
	        			<!-- Contact Info -->
	        			<p class="contact-us-details">
	        				<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
	        				<b>Phone:</b> +44 123 654321<br/>
	        				<b>Fax:</b> +44 123 654321<br/>
	        				<b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
	        			</p>
	        			<!-- End Contact Info -->
	        		</div>
	        		<div class="col-sm-5">
	        			<!-- Contact Form -->
	        			<h3>Send Us a Message</h3>
	        			<div class="contact-form-wrapper">
		        			<form class="form-horizontal" role="form" action="feedback.php" method="post">
		        				
								<div class="form-group">
									<label for="contact-email" class="col-sm-3 control-label"><b>Your Name</b></label>
									<div class="col-sm-9">
										<input class="form-control" id="contact-email" type="name" name="name" maxlength="30" placeholder="Insert Name">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-email" class="col-sm-3 control-label"><b>Your Email</b></label>
									<div class="col-sm-9">
										<input class="form-control" id="contact-email" type="email" name="email" maxlength="30" placeholder="Insert Email">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-message" maxlength="30" class="col-sm-3 control-label"><b>Select Topic</b></label>
									<div class="col-sm-9">
										<select class="form-control" name="topic" id="prependedInput">
											<option>Please select topic...</option>
											<option>General</option>
											<option>Services</option>
											<option>Orders</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="contact-message" class="col-sm-3 control-label"><b>Message</b></label>
									<div class="col-sm-9">
										<textarea class="form-control" name="message" maxlength="300" rows="5" id="contact-message"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="submit" class="btn btn-primary pull-right" value="Send">
									</div>
								</div>
		        			</form>
		        		</div>
		        		<!-- End Contact Info -->
	        		</div>
	        	</div>
	    	</div>
	    </div>
		
		
		
		
		</div>

	
			
<?php 
	include("footer.php");
?>
		
		
		
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/bootstrap.min.js"></script>

		
		
	
	</body>
</html>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng(44.5403, -78.5463),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );
    });
</script>