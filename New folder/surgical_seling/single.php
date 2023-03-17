
<!DOCTYPE HTML>
<html>
<head>
<title>Free Leoshop Website Template | Home :: w3layouts</title>


<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!----------Menu----------------------->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<!----------Company----------------------->
<link rel="stylesheet" href="css/company.css" />
<!----------Footer----------------------->
<link href="css/footer.css" rel='stylesheet' type='text/css' />
<!----------Filter----------------------->
<link href="css/filter.css" rel="stylesheet" type="text/css" media="all" />
<!--Single Product files -->
<link href="css/single_product.css" rel="stylesheet" type="text/css" media="all" />	
<!------Mini Slider------>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />


</head>
<body>
  

	<?php
	include("top_head.php");
	
	include("header.php");

?>

<!----------single product-------------->

	<div class="product">
			<div class="container">
				<div class="col-md">
					</div>
						<h2>Product Detail</h2>
					<div class="col-md abc">
					</div>  
				<div class="col-md-3 product-price">
					 <h3>Product Category</h3>
						
		 <ul class="menu">
		<li class="item1"><a href="s_p.php"><small>Surgical Products </small></a>
		</li>
		<li class="item1"><a href="s_i.php"><small>Surgical Instruments </small></a>
		</li>
		
		
	</ul>
	
	<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">Tatest Products</h6>
						<a href="s_p.php" class="shop-now">SHOP NOW</a>
<div class="clearfix"> </div>
	</div>
				</div>	 
						
			

				</div>
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">	
			<div class="flexslider">
  <ul class="slides">
 <?php
include("conection.php");
$pcode = mysqli_real_escape_string($connect,$_GET['p_id']);
$p1 = mysqli_query($connect,"select * from products where p_id LIKE '".$pcode."' ");
$pp1 = mysqli_fetch_array($p1);										
									$comm1 = mysqli_query($connect,"select * from price_insert where p_id LIKE '".$pp1['p_id']."' ");
									$compp1 = mysqli_fetch_array($comm1);
?>
    <li data-thumb="<?php echo("admin/images/".$pp1['image']);?>">
      <img src="<?php echo("admin/images/".$pp1['image']);?>" />
    </li>
    <li data-thumb="<?php echo("admin/images/".$pp1['image']);?>">
      <img src="<?php echo("admin/images/".$pp1['image']);?>" />
    </li>
    <li data-thumb="<?php echo("admin/images/".$pp1['image']);?>">
      <img src="<?php echo("admin/images/".$pp1['image']);?>" />
    </li>
    <li data-thumb="<?php echo("admin/images/".$pp1['image']);?>">
      <img src="<?php echo("admin/images/".$pp1['image']);?>" />
    </li>
  </ul>
</div>

					</div>	

	<form action="add_cart.php" method="post">

							<input type="hidden" name="pid" value="<?php echo($pp1['p_id']); ?>">
							<input type="hidden" name="price" value="<?php echo($compp1['price']); ?>">
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<?php if($pp1['sp_product'] != NULL){?>
						<h4><?php echo($pp1['sp_product']) ?></h4>
						<?php } if($pp1['si_product'] != NULL){?>
						<h4><?php echo($pp1['si_product']) ?></h4>
						<?php } ?>
						
							<h5 class="item_price">RS. <?php echo($compp1['price']) ?></h5>
							<p><?php echo($pp1['description']) ?></p>
							<div class="available">
								<ul>
									<li class="size-in">Quantity
								<input type="number" name="quantity" value="1" min="1" required >
								</li>
								
								<div class="clearfix"> </div>
							</ul>
						</div>
							<ul class="tag-men">
								<li><span>TAGS</span>
								<span class="women1">: Surgical Product/Instrument,</span></li>
								<li><span>Made</span>
								<span class="women1">: Steel</span></li>
							</ul>
								<input class="btn btn-warning bn" type="submit" value="ADD TO CART" >
							</form>
						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
			<br>
					
		

		<div class="clearfix"> </div>
		</div>
		</div>
<!--//single product-->

	
</div>
	
	
<?php
	include("footer.php");
?>




<script type="text/javascript" src="js/jquery.min.js"></script>

<!----------Menu----------------------->
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>

<!--Pic FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

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