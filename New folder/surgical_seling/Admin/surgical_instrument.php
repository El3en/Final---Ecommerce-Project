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
		
		
		
		        <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
             <h3 class="box-title" style="padding-bottom:10px;">Surgical Instrument's</h3>

              
              <!-- /.box-tools -->
            </div>
      
              <div class="table-responsive mailbox-messages">
       													  
	   <table id="datatables" class="display" style="padding-top:10px;">
                
				<thead >
                    <tr style="background-color:#0099FF;color:white;">
						
						<th><div align="center">Image</div><div align="right"><i class="glyphicon glyphicon-sort-by-attributes"></i></div></th>
						<th><div align="center">Product Name</div><div align="right"><i class="glyphicon glyphicon-sort-by-attributes"></i></div></th>
						<th><div align="center">Description</div><div align="right"><i class="glyphicon glyphicon-sort-by-attributes"></i></div></th>
						 <th><div align="center">Action</div><div align="right"><i class="glyphicon glyphicon-sort-by-attributes"></i></div></th>
                  
                   </tr>
                </thead>
				
                      <tbody>
                    <?php
						$table = mysqli_query($connect,("select p_id,si_product,image,description from products "));
					
						while ($row = mysqli_fetch_array($table)) 
						{
							if($row['si_product'] != NULL)
								{
							?>
						<tr>
						<td align="center" width="30%">
									<img src="<?="images/".$row['image']?>" width="100%" height="30%">
								</td>
                            <td align="center">
							
								<?php echo("<a href='surgical_instrument_detail.php?p_id=".$row['p_id']."'>"); ?>
								<?=$row['si_product']?><?php echo("</a>"); ?>
							
							</td>
							<td>
									<?=$row['description']?>
								</td>
                        
                            <td align="center">
								
								<?php echo("<a href='surgical_instrument_edit.php?p_id=".$row['p_id']."'>"); ?>
								<?php echo("<i class='fa fa-edit' title='Update Product'></i></a>"); ?>
								
								<?php echo("<a href='product_delete.php?p_id=".$row['p_id']."' onclick='return checkDelete()'>"); ?>
								<?php echo("<i class='fa fa-trash-o' title='Delete Product' ></i></a>"); ?>
								
							</td>
                        </tr>
						<?php
								}
						
						}
                    ?>
			
                </tbody>
				
            
			</table>	
</div>
		
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

