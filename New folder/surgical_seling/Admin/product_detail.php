<?php
	session_start();
	include("conection.php");
?>


<!DOCTYPE html>
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
		
		
		        <div class="row">
        <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget abc">
           
            <!-- /.box-header -->
            <div class="box-body">
			<a href="surgical_product.php">
			     <h3>Detail of Surgical Product</h3>
              <img class="img-responsive pad" src="images/g5.jpg" alt="Photo">
		</a>
 
			  
			  <span style="padding-left:30%;">
			  

              </span>		  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		<div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget abc">
           
            <!-- /.box-header -->
            <div class="box-body">
			  <a href="surgical_instrument.php">
			  			     <h3>Detail of  Surgical Instrument</h3>
                          <img class="img-responsive pad" src="images/g6.jpg" alt="Photo">
		
 </a>
			  
			  <span style="padding-left:30%;">
			

              </span>		  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
	

        <!-- /.col -->
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

</body>
</html>

