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

 <!---Table css--->
 <link rel="stylesheet" href="css/user_table/demo_table.min.css">

 
     <script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>
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
		
		
		    <div class="col-md-12">
    	
			
			<hr class="colorgraph"  style="margin-bottom:50px;">
		
	 
          <div class="">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
			
			
			
            <!-- /.box-header -->
            <div class="box-body">
			<form name="fm" action="user_message_action.php" method="post">
             
				<?php
					$id = $_GET['u_id'];
					
				?>
              
				<input type="hidden" value="<?php echo($id);?>" name="id">
              <div class="form-grou">
                    <textarea type="text" id="compose-textarea" class="form-control" name="message" style="height:330px"></textarea>
              </div>
             
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
			<div class="pull-right">
                <button type="submit" class="btn btn-default">
								
			  <?php echo("<i class='fa fa-reply'></i> Send"); ?>
				
				</button>
			  </div>
       
			   </form>
               <button type="reset" class='btn btn-default'>
			    <?php echo("<a href='message.php'>"); ?>
				<?php echo("<i class='fa fa-times'> Discard</i></a>"); ?></button>
				
			</div>
            <!-- /.box-footer -->
          </div>
    

	
	
	
	</div>
		
		
		
 <!-- footer -->

  <!-- / footer -->
</section>
<!--main content end-->
		 <?php
	include("footer.php");
?>
</section>
</section>


<script src="js/jquery2.0.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.nicescroll.js"></script>


<!-- DataTables -->
        <script src="js/user_table/jquery.js" type="text/javascript"></script>
        <script src="js/user_table/jquery.dataTables.js" type="text/javascript"></script>
		  
		  
		  <script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                $('#datatables').dataTable();
            })
			$(document).ready(function(){
                $('#datatable').dataTable();
            })
            
        </script>
		
</body>
</html>

