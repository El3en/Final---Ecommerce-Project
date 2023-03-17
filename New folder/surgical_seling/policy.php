<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Leoshop Website Template | Home :: w3layouts</title>


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
<link href="css/category.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/product.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php
	include("top_head.php");
	
	include("header.php");
	?>
	


<div class="terms">
				<div class="container">
					
					<div class="spec ">
					<h3>PRIVACY POLICY</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
					<div class="ter-wthree">
						<h6><span>Policy's</span></h6>
						<ol start="1">
							<li>We, at Surgical House, value the trust of our customer and respect their privacy. 
								When you place an order on Surgical, we collect data entered by you to fulfill your
								order. This data is only used by us and our associates. We advice our customers to read the 
								privacy policy carefully before placing any order.
							</li>
							<li>By accepting the Privacy Policy you expressly consent to our use and disclosure of your personal information in accordance with this Privacy Policy
							</li>
							
						</ol>
					</div>
					<div class="ter-wthree">
						<h6><span>DISCLAIMER</span> Copyright & Trademark</h6>
						<p>Any use of this website or its contents, including copying or storing it in whole or part, 
						other than for your own personal, non-commercial use is prohibited without the permission of 
						Surgical House. You may not modify, distribute or re-post anything on this website for any purpose.</p>
						<p>The Surgical House names and logos and all related product and service names, design marks and slogans are the 
						trademarks or service marks of HiTech Traders Surgical House. All other marks are the property of their respective 
						companies. No trademark or service mark license is granted in connection with the materials contained on this Website.
						Access to this Website does not authorize anyone to use any name, logo or mark in any manner.</p>
						<p>All materials, including images, designs, text, illustrations and other materials that are part of this Website 
						(referred to as 'contents') are intended solely for personal, non-commercial use. You may download or copy the Contents 
						displayed on the Website for your personal use only. No right, title or interest in any downloaded materials is 
						transferred to you as a result of any such downloading or copying. You may not reproduce (except as noted above),
						publish, transmit, distribute, display, modify, create derivative works from, sell or participate in any sale of 
						or exploit in any way, in whole or in part, any of the Content, or the Website. The Content on this Website may be 
						used only as a shopping resource.</p>
					</div>
					<div class="ter-wthree">
						<h6>Copyright complaint</h6>
						<p>We at Surgical House respect the intellectual property of others. 
						If you feel that your work has been copied on our website in a way that constitutes 
						copyright infringement you can write to us at oue email. </p>
					</div>
					<div class="ter-wthree">
						<h6>Limitation of Liability</h6>
						<p>IN NO EVENT SHALL Surgical House BE LIABLE FOR ANY SPECIAL, INCIDENTAL, 
						INDIRECT OR CONSEQUENTIAL DAMAGES OF ANY KIND IN CONNECTION WITH THIS AGREEMENT, EVEN IF Surgical House 
						HAS BEEN INFORMED IN ADVANCE OF THE POSSIBILITY OF SUCH DAMAGES.</p>
					</div>
					
					<div class="ter-wthree">
						<p>If you have questions or complaints regarding our privacy policy or find any inaccuracies in our website, please contact us, </p>
					</div>
				</div>
			</div>
			<!--- /terms ---->


	<!-- // Terms of use -->
	

<!--footer-->

<?php
	include("footer.php");
?>








<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!----------Menu----------------------->
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>


<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
</body>
</html>