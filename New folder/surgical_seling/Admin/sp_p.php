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
        <li><a href="#"> Update Product</a></li>
    
	</ol>
	   
	  <div class="col-md-12 col-lg-12">

	    
          <div class="box box-default" class="answer_list">
           
            <!-- /.box-header -->
            <div class="box-body">
                          <!-- form start -->
<?php


	$table = mysqli_query($connect,("select * from products where p_id = '".$id."' "));
					
	$row = mysqli_fetch_array($table);
?>
					  
          <div class="row" >
		  <form name="fm" action="admin_price_action.php" method="POST" enctype="multipart/form-data">
		  
		  <input type="hidden" name="id" value="<?php echo($id);?>">
            <div class="col-md-12">
                <div class="form-group">
                <label>Minimal</label>
                <select name="p_id" id="companydd" onChange="change_company()" class="form-control select2" style="width: 100%;">
                  <option selected="selected">Select Product</option>
<?php 
	$prod1 = mysqli_query($connect,"select * from products");
	while($prod = mysqli_fetch_array($prod1))
	{
		$pq = mysqli_fetch_array(mysqli_query($connect,"select * from price_insert where p_id = '".$prod['p_id']."'"));
		$pqp = mysqli_fetch_array(mysqli_query($connect,"select * from purchase where p_id = '".$prod['p_id']."'"));
		if($prod['p_id'] != $pq['p_id'])
		{
			if($prod['p_id'] == $pqp['p_id'])
			{
				if($prod['sp_product'] != NULL)
				{
?>
                  <option value="<?php echo($prod['p_id']); ?>"><?php echo($prod['sp_product']); ?></option>
<?php
				}
			}
		}
	}
?>   
               
                </select>
              </div>
              <!-- /.form-group -->
             
              <!-- /.form-group -->
            </div>
			
			 <div class="col-md-6">
               
    <div class="form-group">
					<label>Purchase Price </label>
					<div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div>
					<div id="price">
						<input type="text" class="form-control select2" name="" style="width: 100%;" readonly >
					</div>
					</div>
			   </div>
              <!-- /.form-group -->
			              <!-- Ajex code -->
         <script type="text/javascript">
			function change_company()
			{
				var xmlhttp=new XMLHttpRequest();
				xmlhttp.open("GET","price_ajex.php?p_id="+document.getElementById("companydd").value,false);
				xmlhttp.send(null);
				document.getElementById("price").innerHTML=xmlhttp.responseText;
				
			}
		 </script>
			  
			
            
            </div>
			  <div class="form-group">
					<label>Price For Sale:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div>
		<input type="text" placeholder="Only Number insert" pattern="\d*" class="form-control pull-right" name="price" required >
                </div>
                <!-- /.input group -->
              </div>
          </div>
		   
				
                <!-- /.input group -->
              </div>
			  <div class="box-footer">
          <input type="submit" value="Sumit" style="margin-left:46%;width:100px;" class="btn-md btn btn-primary">
        </div>
		</form>
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

