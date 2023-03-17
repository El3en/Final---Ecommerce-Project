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
	
<!-- term -->

<div class="terms">
				<div class="container">
					
					<div class="spec ">
					<h3>TERMS & CONDITIONS</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
					<div class="ter-wthree">
						<h6><span>1.</span>TERMS OF USE</h6>
						<ol start="1">
							<li>Using services offered by Surgical House means you accept service terms and
								conditions of the organization. So, we request you to read our terms and conditions very 
								carefully before using our service.
							</li>
							<li>Subscribing to or using services offered by Surgical House, means you have read, understood and are 
								bound by the terms (it doesn’t matter how you have subscribe or used our service). If you do not agree
								or don’t want to be bound by the terms and conditions, then you are suggested not to subscribe to 
								or use our services.
							</li>
							<li>In these terms, “you” or “User” means the end users, who are accessing the website of Surgical House,
								its contents and using the Services offered through the Website; “Providers” referred to 
								third party service providers and “We”, “Us” and “Our” means Surgical House and its affiliates.
							</li>
						</ol>
					</div>
					<div class="ter-wthree">
						<h6><span>2.</span>Introduction</h6>
						<p>Surgical House ("Website") is an Internet based e-commerce and content website owned 
							and operated by HiTech Traders Private Limited, an organization established under the laws
							of Pakistan.
						</p>
						<p>You can use the website after accepting conditions without modification of all the terms, 
							conditions and notices restricted in these Terms, as may be posted on the website of Surgical House 
							on different time periods. Surgical House at its discretion reserves the right not to accept a 
							user from registering on its portal without assigning any reason thereof. 
						</p>
					</div>
					<div class="ter-wthree">
						<h6><span>3.</span>User Account, Password, and Security</h6>
						<p> After completion of the registration process, you will receive a password and user ID. It is 
							completely your responsibility to maintain the privacy of the account and password. You are 
							responsible for each and every activity done under your password and account. By accepting our 
							terms of usage, you are agreeing to:
							<pre>. Notify us for any kind of unauthorized use of your password or account or any other violation of security; and</pre>
							<pre>. Ensure that after the end of each session, you will exit from your account. We will not be liable for any kind 
							of loss or damage caused because of your
  failure to comply with this policy.</pre>
						</p>
					</div>
					<div class="ter-wthree">
						<h6> <span>4.</span>Services Offered</h6>
						<p>We are engaged in providing a number of Internet-based services through the Website (all such services, collectively, the "Service").
						One such service enables users to purchase products like car batteries and inverter batteries. Soon after you place the order,
						we shall deliver the product to you and are entitled for the payment of products/service bought by you.</p>
					</div>
					<div class="ter-wthree">
						<h6><span>5.</span>Privacy Policy</h6>
						<p>You as the User hereby permit, express and agree that you have read and fully understand our
						Privacy Policy in respect of the website. You, as the user further permit that the terms and contents
						of such Privacy Policy are acceptable to you.</p>
					</div>
					<div class="ter-wthree">
						<h6><span>6.</span>Limited User</h6>
						<p>You have to agree and undertake not to reverse engineer, change copy, distribute, transmit, exhibit, 
						execute, reproduce, publish, license, create copied works from, transmit, or sell any information or
						software acquired from the Website. Limited copying or reproducing of the contents of the website is
						permitted, if Surgical House name is declared as the source and our advance written permission is 
						asked. To eliminate any doubt, it is clarified that boundless or wholesale reproduction and copying 
						of the content of the website for commercial or non-commercial reasons and unnecessary amendment of 
						data and information within the content of the Website is not allowed.</p>
					</div>
					<div class="ter-wthree">
						<h6><span>7.</span>Rules of Conduct on Site</h6>
						<p>Without taking the prior written permission of the owner, you may not post, distribute or reproduce any copyrighted
						materials, trademarks, or other proprietary information of such proprietary rights in any way.</p>
						<p>We reserve all rights to review, edit, reject, refuse to post and/or delete any Content that in 
						the sole judgment of Surgical House violates these Terms of Use or which might be offensive,
						illegal, or that might violate the rights, damage, or threaten the security of another person or 
						organization.</p>
						<p>You should not provide any misleading information on the website in any way.</p>
						<p>You may not post or transmit Content, (even if made in a joking, sarcastic or unintended manner), if it in any way:</p>
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