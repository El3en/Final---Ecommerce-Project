<?php
	session_start();
	if(!isset($_SESSION['user_id']))
		header('location:login.php');
?>
<!DOCTYPE html>
<html>

<head>
		<title>Jewellery.Com | Home</title>
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



<link href="css/cart.css" rel='stylesheet' type='text/css' />


</head>

<body>

<?php
	include("top_head.php");
	
	include("header.php");

?>

<div class="dresses">
	

<div class="cart">
	 <div class="container">
		 
<?php
	include("conection.php");
	$userid = $_SESSION['user_id'];
	$qry = "select * from cart where u_id = '".$userid."'";
	$qry1 = mysqli_query($connect,$qry);
	$qry2 = mysqli_num_rows($qry1);
?>		
		 <div class="col-md-9 cart-items">
			 <h2>My Shopping Bag (<?php echo($qry2);?>)</h2>
<?php
	while($qry3 = mysqli_fetch_array($qry1))
	{
		$code = $qry3['p_id'];
		$as = "select * from products where p_id = '".$code."'";
		$as1 = mysqli_query($connect,$as);
		$as2 = mysqli_fetch_array($as1);
		
				$pi = "select * from price_insert where p_id = '".$code."'";
		$pi1 = mysqli_query($connect,$pi);
		$pi2 = mysqli_fetch_array($pi1);
?>
			 <div class="cart-header">
			 <?php echo("<a href='cart_delete.php?c_id=".$qry3['c_id']."'>");?>
				 <div class="close1" style=" background: url('images/close.png') no-repeat 0px 0px;"></div>
				 </a>
				 <div class="cart-sec">
						<div class="cart-item cyc">
							 <img src="<?php echo("admin/images/".$as2['image']);?>"/>
						</div>
					   <div class="cart-item-info">
					   
					   	<?php if($as2['sp_product'] != NULL){?>
						<h4><h3><?php echo($as2['sp_product'])?> </h4>
						<?php } if($as2['si_product'] != NULL){?>
						<h4><h3><?php echo($as2['si_product'])?> </h4>
						<?php } ?>
							 <span><?php echo($as2['description']);?></span></h3><br>
							 <h4><span>Rs. </span><?php echo($pi2['price']);?></h4>
							 <p class="qty">Quantity ::</p>
							 <input min="1" type="number" readonly id="quantity" name="quantity" value="<?php echo($qry3['quantity']);?>" class="form-control input-small">
							
						</div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p>Service Charges:: Rs.200.00</p>
							 <span>Delivered in 5-6 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>						
				  </div>
			 </div>
<?php
}
$tprice4 = 'SELECT SUM(price) AS tprice FROM cart where u_id = "'.$userid.'"';
$tprice1 = mysqli_query($connect,$tprice4); 
$tprice2 = mysqli_fetch_assoc($tprice1); 
$tprice3 = $tprice2['tprice'];
$total_price1 = $tprice3 + 200;
?>
</div>
		 <div class="col-md-3 cart-total">
			 <a class="continue" href="index.php">Continue Shopping</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total"><?php echo($tprice3);?></span>
				 <span>Delivery Charges</span>
				 <span class="total">200.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <h4 class="last-price">TOTAL</h4>
			 <span class="total final"><?php echo($total_price1);?></span>
			 <div class="clearfix"></div>
			 <?php echo("<a class='order' href='order_action.php?u_id=".$userid." '>"); ?>
			Order Now</a>
			
			</div>
	 </div>
</div>
<!---->


	
					
	</div>
		
		
		
		
		<div style="margin-top:10px;background:#fff;margin-bottom:10px;">
		.
		</div>
		<!-- copy-right -->
		
		<div class="copy-right">
				<p>CopyRighted By <a href="admin.php/">Jewellery.Com</a></p>
		</div>
		
		
		
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/bootstrap.min.js"></script>


		
	
	</body>
</html>

