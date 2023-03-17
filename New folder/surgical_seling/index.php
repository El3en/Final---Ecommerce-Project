
<!DOCTYPE HTML>
<html>
<head>
<title>surgical selling web application</title>




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


</head>
<body>

<?php
	include("top_head.php");
	
	include("header.php");

	include("slider.php");
?>

<!--//services-->

<!-- content-starts-here -->
		<div class="content">
			<div class="categories">
				<div class="container">
					
					<div class="col-md-6 focus-grid">
						<a href="s_p.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-"></i></div>
									<h4 class="clrchg">Surgical Products</h4>
								</div>
							</div>
						</a>
					</div>
				
					<div class="col-md-6 focus-grid">
						<a href="s_i.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-laptop"></i></div>
									<h4 class="clrchg">Surgical Instruments</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</div>

	<!-- Minislider -->
					

<?php
	include("footer.php");
?>


<script type="text/javascript" src="js/jquery.min.js"></script>

<!--start slider -->
    <script src="js/fwslider.js"></script>

<!----------Menu----------------------->
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>

 <!-- Mini Slider Latest-->
<script src="js/owl.carousel.js"></script>
						<script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 4,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  false,
									        pagination : false,
									      });
									    });
							 </script>
<!-- Mini Slider Discount -->
							 <script>
									    $(document).ready(function() {
									      $("#owl-demo1").owlCarousel({
									        items : 4,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  false,
									        pagination : false,
									      });
									    });
							</script>
<!---------Dynamic Selection---------------->	

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