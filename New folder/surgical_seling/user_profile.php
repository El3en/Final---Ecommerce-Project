<?php
	session_start();
	if(!isset($_SESSION['user_id']))
		header('location:login.php');
?>
<!DOCTYPE HTML>
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


	
	
    <link href="css/profile/custom.css" rel="stylesheet">

<!------------ data table ------------------------>
	 <link href="css/profile/table/custom.css" rel="stylesheet">


		
		
	</head>
	<body style="background:black;">

<?php
	include("top_head.php");
	
	include("header.php");

?>

<div class="container">
<br>
<br>
<?php
	include('conection.php');
	
	$id = $_SESSION['user_id'];
	$user4 = "select * from user where u_id = '".$id."' ";
	$user3 = mysqli_query($connect,$user4);
	$user = mysqli_fetch_array($user3);
?>
	<div class="row" id="main">
        <div class="col-md-4 well" id="leftPanel" >
            
                <div>
                	<div>
        				<img src="<?php echo('images/'.$user['image']); ?>" alt="Texto Alternativo" width="150px" class="img-circle img-thumbnail">
        				<h2><?php echo($user['name']); ?></h2>
        			</div>
					
        		</div>
			<div class="row1">
				<div class="profile-block" >
					<div class="panel text-center">
						<ul class="nav nav-pills nav-stacked" >
							<li class="active"><a href="user_profile.php" >Profile</a></li>
							<li><a href="edit_user_profile.php">Edit profile</a></li>
							<li><a href="message.php">Messages</a></li>
							<li><a href="purchase_record.php">Purchase Record</a></li>
							<li><a href="logout.php">Logout</a></li>
					
						</ul>
					 </div>
				</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel" style="height:530px">
            <div class="row">
    <div class="col-md-12">
    	
			
			<hr class="colorgraph"  style="margin-bottom:50px;">
		
	
	
	
	
			<hr class="colorgraph" style="margin-top:50px;">
	</div>
</div>

</div>
        </div>
     </div>       

	
<?php 
	include("footer.php");
?>
		
		
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/bootstrap.min.js"></script>

		
		
			
<!----------------- Datatables ---------------------->
        <script src="Admin-Panel/js/table/jquery.dataTables.js"></script>
        <script src="Admin-Panel/js/table/dataTables.tableTools.js"></script>
		
            <script>
			
		// for data table search function calling 
            var asInitVals = new Array();
            $(document).ready(function () {
                $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
          // for icons next last first etc and 
                    "sPaginationType": "full_numbers",
                });
                
            });
        </script>	

		
	</section>
	</body>
</html>

