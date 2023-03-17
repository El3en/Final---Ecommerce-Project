<?php
	session_start();
	include("conection.php");
				if(!isset($_SESSION['id']))
		header("location:a_login.php");

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
			
		
		 
 <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
		<ul class="breadcrumb">
			<li><a href="admin.php">Administrator</a> <small>Dashboard</small></li>
		</ul>
    </h1>
	
    <ol class="breadcrumb ac">
		<li><a href="admin.php" ><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Add Products</a></li>
    
	</ol>
	   
	  <div class="col-md-12 col-lg-12">
	  <div style="">

	  
    <div class="input-group col-lg-12" >
<a href="sp_p.php">
	<input type="button" class="btn btn-info" name="answer" value="Sugical Products Price"  style="width:40%;float:right" >
</a>
<a href="si_p.php">
	<input type="button" class="btn btn-info" name="answer" value="Surgical Instrument Price" style="width:40%;float:left" >	  
</a>
	</div>
      <div id="result"></div>
   </div>
	    
       
		
        </div>
        <!-- /.box-body -->
		
	
      </div>
            </div>
		
		

 <!-- footer -->

  <!-- / footer -->
</section>
		 <?php
	include("footer.php");
?>
<!--main content end-->
</section>
</section>



 <script type="text/javascript">
		
			
			
			function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}
		 </script>
		 
		 
 <script type="text/javascript">
		
			
			
			function showDi() {
   document.getElementById('welcomeDi').style.display = "block";
}

		 </script>

<script src="js/jquery2.0.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.nicescroll.js"></script>

</body>
</html>

