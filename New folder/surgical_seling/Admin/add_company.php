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
<link href="css/font-awesome.css" rel="stylesheet"> <!--extensions caling for designing also knwn as externa;l libraries)-->

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

	<input type="button" class="btn btn-info" name="answer" value="Add Sugical Products" onclick="showDiv()" style="width:40%;float:right" >
	<input type="button" class="btn btn-info" name="answer" value="Add Surgical Instrument" onclick="showDi()" style="width:40%;float:left" >	  
    </div>
      <div id="result"></div>
   </div>
	    
          <div class="box box-default" id="welcomeDiv"  style="display:none;" class="answer_list">
           
            <!-- /.box-header -->
            <div class="box-body">
                          <!-- form start -->

					  t
          <div class="row" >
		  <form name="fm" action="s_add.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                <label>Product Name:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-university"></i>
                  </div>
                  <input type="text" name="n" placeholder="Insert Product Name..." class="form-control" maxlength="50" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
             
              <!-- /.form-group -->
            </div>
			
			 <div class="col-md-6">
               
		   <div class="form-group">
                <label>Descriptipn:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-list-alt"></i>
                  </div>
                  <textarea type="text" name="d" required maxlength="500" placeholder="Write Descriptipn of Product..(Not More then 500 words)" class="form-control"></textarea>
                </div>
                <!-- /.input group -->
              </div>
			  
              <!-- /.form-group -->
             
              <!-- /.form-group -->
            </div>
			 <div class="col-md-6">
            <div class="form-group">
                <label>Upload Image:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-list-alt"></i>
                  </div>
                 <input type="file" name="image" class="form-control" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
             
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          
            
			
			
          </div>
		   
				
                <!-- /.input group -->
              </div>
			  <div class="box-footer">
          <input type="submit" value="Sumit" style="margin-left:46%;width:100px;" class="btn-md btn btn-primary">
        </div>
		</form>
        </div>
        <!-- /.box-body -->
		
		<div class="box box-default" id="welcomeDi"  style="display:none;" class="answer_list">
           
            <!-- /.box-header -->
            <div class="box-body">
                          <!-- form start -->

					  
                  <div class="row" >
		  <form name="fm" action="i_add.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                <label>Instrument Name:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-university"></i>
                  </div>
                  <input type="text" name="in" placeholder="Insert Instrument Name..." class="form-control" maxlength="50" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
             
              <!-- /.form-group -->
            </div>
            
			 <div class="col-md-6">
               
		   <div class="form-group">
                <label>Descriptipn:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-list-alt"></i>
                  </div>
                  <textarea type="text" name="d" required maxlength="500" placeholder="Write Descriptipn of Product..(Not More then 500 words)" class="form-control"></textarea>
                </div>
                <!-- /.input group -->
              </div>
			  
              <!-- /.form-group -->
             
              <!-- /.form-group -->
            </div>
			 <div class="col-md-6">
            <div class="form-group">
                <label>Upload Image:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-list-alt"></i>
                  </div>
                 <input type="file" name="image" class="form-control" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
             
              <!-- /.form-group -->
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

