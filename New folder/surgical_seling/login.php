
<!DOCTYPE html>
<html>

<head>
		<title>Surgical Seling</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/font-awesome.css" rel="stylesheet">
		
<link href="css/login.css" rel='stylesheet' type='text/css' />

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


</head>

<body>

<?php
	include("top_head.php");
	
	include("header.php");

?>
<!-- dresses -->
<div class="dresses">
	<div class="container">


		
		<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="form-module">
				  
				  <div class="form col-md-12" >
					<h2>Create an account</h2>
					<div class="toggle"><i class="fa fa-times"></i>
						<div class="tooltip">Login</div>
				  </div>
					<form action="user_form_action.php" method="post" enctype="multipart/form-data">
<div class="col-md-6">
		<label>Name</label>
		<input type="text" name="fname" class="form-control" maxlength="30" pattern="(?=.*[a-z]).{3,}" placeholder="Atleast 3 letters" required=" ">
		<label>Username</label>
		<input type="text" name="username" class="form-control" Placeholder="Username (Atleast 3 letters)" pattern="(?=.*[a-z]).{3,}" required maxlength="30">
		<label>Address</label>
		<textarea type="text" name="add" class="form-control" placeholder="Address" maxlength="300" required placeholder="Address" ></textarea>				  
		<label>Image</label>
		   <input name="image" type="file">	
</div>
<div class="col-md-6">
		<label>Phone No</label>
		<input type="text" name="ph" class="form-control" placeholder="Phone Number" maxlength="11" pattern="\d*" required=" ">		   
		<label>Password</label>
		<input type="password" name="pass" class="form-control" placeholder="Password" maxlength="30" required >
		
		<label>City</label>
		<select class="form-control" name="city" required>
          <option>Select</option>
          <option>Dubai</option>
          <option>Abu Dhabi</option>
          <option>Zayed City</option>
          <option>Sharjah</option>
        </select>
	   
	<br>
	<br>
<br>	
</div>	
					  <input type="submit" value="Register">
					</form>
		</div>
		<div class="form" >
				  <div class="toggle"><i class="fa fa-pencil"></i>
					<div class="tooltip">Signup</div>
				  </div>
					<h2>Login to your account</h2>
					<form action="logaction.php" method="post">
					<label>Username</label>
					<input type="text" name="name" placeholder="Username" maxlength="30" required=" ">
					 <label>Password</label>
					 <input type="password" name="pass" placeholder="Password" maxlength="30" required=" ">
					 <br>
					  <input type="submit" value="Login">
					</form>
				  </div>
				</div>
			</div>
			
		</div>
<!-- //login -->
	
	
	
	
	
   </div>
</div>

		
		
<?php
	include("footer.php");
?>

		
		
	<script src="js/jquery.min.js"></script>		
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/bootstrap.min.js"></script>

		
<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		
	
	</body>
</html>

