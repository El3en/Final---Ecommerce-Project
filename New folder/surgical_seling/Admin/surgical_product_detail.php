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

 <link rel="stylesheet" href="css/AdminLTE.min.css">
 
 
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
	<section class="content">
	
	<?php
		$a = mysqli_real_escape_string($connect,$_GET['p_id']);
		$aa = mysqli_fetch_array(mysqli_query($connect,("select * from products where p_id = '".$a."'")));
	
	?>
	
    	  <div class="col-md-12">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
		<h3 class="box-title"><span><label data-widget="collapse" >Purchase Surgical Product (Click)</label></span></h3>
		
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                          <!-- form start -->

					  
          <div class="row">
		  <form name="fm" action="purchase_action.php" method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
              <div class="form-group">
                <label>Surgical Product:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-ruble"></i>
                  </div>
                  <input type="text" name="sp" readonly value="<?php echo($aa['sp_product']);?>" class="form-control">
				  
                  <input type="hidden" name="p_id"  value="<?php echo($aa['p_id']);?>">
                </div>
                <!-- /.input group -->
              </div>
              </div>
			   <div class="col-md-6">
              <!-- /.form-group -->
			   <div class="form-group">
                <label>Purchaser Name:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-university"></i>
                  </div>
                  <input type="text" name="pn" class="form-control" placeholder="Insert Purchaser Name...." required maxlength="33">
				</div>
                <!-- /.input group -->
              </div>
			  <!-- /.form-group -->
               <div class="form-group">
                <label>Quantity</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-cube"></i>
                  </div>
                  <input type="text" name="q" class="form-control" placeholder="Insert Quantity..." maxlength="3" required pattern="\d*">
                
				</div>
                <!-- /.input group -->
              </div>
            </div>
          
            <!-- /.col -->
			
			 <div class="col-md-6">
             
			   <div class="form-group">
                <label>Price</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-upload"></i>
                  </div>
                  <input type="text" name="p" class="form-control" placeholder="Insert Price..." maxlength="5" required pattern="\d*">
                </div>
                <!-- /.input group -->
              </div>
			  <div class="form-group">
                <label>Date</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-bolt"></i>
                  </div>
                  <input type="date" name="d" class="form-control" required>
                </div>
                <!-- /.input group -->
              </div>
			  </div>
			 
			
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
         <div class="box-footer">
          <input type="submit" value="Sumit" style="margin-left:46%;width:100px;" class="btn-md btn btn-primary">
        </div>
		</form>
      </div>
            </div>
            <!-- /.box-body -->

        <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
             <h3 class="box-title" style="padding-bottom:10px;">Surgical Product's</h3>

              
              <!-- /.box-tools -->
            </div>
      
              <div class="table-responsive mailbox-messages">								   
	    <table id="datatables" class="display" style="padding-top:10px;">
                
				<thead >
                    <tr style="background-color:#0099FF;color:white;">
						<th><div align="center">Product Name</div><div align="right"><i class="glyphicon glyphicon-sort-by-attributes"></i></div></th>
                        <th><div align="center">Purchaser Name</div><div align="right"><i class="glyphicon glyphicon-sort-by-attributes"></i></div></th>
                        <th><div align="center">Quantity</div><div align="right"><i class="glyphicon glyphicon-sort-by-attributes"></i></div></th>
                        <th><div align="center">Price</div><div align="right"><i class="glyphicon glyphicon-sort-by-attributes"></i></div></th>
                        <th><div align="center">Date</div><div align="right"><i class="glyphicon glyphicon-sort-by-attributes"></i></div></th>
                        <th><div align="center">Action</div><div align="right"><i class="glyphicon glyphicon-sort-by-attributes"></i></div></th>
                  
				   </tr>
                </thead>
				
                      <tbody>
                    <?php
						$table = mysqli_query($connect,("select * from purchase where p_id = '".$a."'"));
					
						while ($c = mysqli_fetch_array($table)) 
						{
							$row =mysqli_fetch_array( mysqli_query($connect,("select * from products where p_id = '".$a."' ")));
					?>
                        
						<tr>
						
						
							<td align="center" style="background-color:#009999;color:white;">
							
							
								 <?php echo("<a href='surgical_product.php'>"); ?>
								 <?php echo("<div style='color:white;' title='View Product'>". $row['sp_product']. "</div></a>"); ?>
							</td>
                            <td align="center"><?=$c['p_name']?></td>
                            <td align="center"><?=$c['quantity']?></td>
							<td align="center"><?=$c['price']?></td>
							<td align="center"><?=$c['date']?></td>
                            <td align="center">
								
								<?php echo("<a href='purchase_delete.php?purchase_id=".$c['purchase_id']."' onclick='return checkDelete()'>"); ?>
								<?php echo("<i class='fa fa-trash-o' title='Delete Product' ></i></a>"); ?>
								
							</td>
                        </tr>
                    <?php
						}
                    ?>
			
                </tbody>
				
            
			</table>
	
		
</div>
   
			   
			   
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
  
        </div>
        <!-- /.col -->
     
      <!-- /.row -->
    </section>
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
		
		
		<script src="js/bootstrap.min.js"></script>
<script src="js/app.min.js"></script>
</body>
</html>

