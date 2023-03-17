
<!DOCTYPE HTML>
<html>
<head>
<title>Free Leoshop Website Template | Home :: w3layouts</title>


	
    <link href="css/profile/custom.css" rel="stylesheet">
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
<!-- Product files -->
<link href="css/product2.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/product.css" rel="stylesheet" type="text/css" media="all" />

<!---Table css--->
 <link rel="stylesheet" href="css/user_table/demo_table.min.css">	
</head>
<body>
<?php
	include("top_head.php");
	
	include("header.php");

?>
<!--Product-->
<div class="parts">
	 <div class="container">
	<div class="col-md">
	</div>	
	
		 <h2>Surgical Products</h2>
<div class="col-md">
	</div>	
		
	<div class="bike-parts-sec">


		      <div class="bike-parts">
			   <div class="bike-apparels">
					 <div class="parts1">
					 
<table  id="datatables" class="table no-margin col-md-12" style="border-bottom-color:red;padding-bottom:13px">


                  <thead class="df" >
                    <tr>
					
						<th></th>
					</tr>
				  </thead>
                  <tbody class="dd">
				 	<?php 
		include("conection.php");
		$a = mysqli_query($connect,("select * from price_insert"));
		while($b = mysqli_fetch_array($a))
		{
			$aa = mysqli_query($connect,("select sp_product,image from products where p_id = '".$b['p_id']."'"));
			$bb = mysqli_fetch_array($aa);
			if($bb['sp_product'] != NULL)
			{
	?>
<tr class="col-md-3" >
	<td>	
						 <?php echo("<a href='single.php?p_id=".$b['p_id']."'>"); ?>
						 <div class="part-sec">					 
							 <img src="<?php echo("Admin/images/".$bb['image']); ?>" alt=""/>
							 <div class="part-info">
								<?php echo("<a class='asd' href='single.php?p_id=".$b['p_id']."'>"); ?><h5><?php echo($bb['sp_product']);?><span>$  <?php echo($b['price']);?></span></h5></a>
								 <?php echo("<a class='add-cart' href='single.php?p_id=".$b['p_id']."'>"); ?>Quick View</a>
								<?php echo("<a class='qck' href='single.php?p_id=".$b['p_id']."'>"); ?>Add Cart</a>
							 </div>
						 </div></a>
						
						 <div class="clearfix"></div>
					</td>
</tr>		
		<?php
			}
		}
		?> 
		
</tbody>

           </table>					
						 <div class="clearfix"></div>
		</div>
					 
				 </div>
			 </div>
	
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!---->

	
<?php
	include("footer.php");
?>









<script type="text/javascript" src="js/jquery.min.js"></script>
<!----------Menu----------------------->
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>

		<!-- DataTables -->
       <script src="js/jquery.dataTables.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#datatables').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false,
	  "lengthMenu": [[8]]
    })
  })
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