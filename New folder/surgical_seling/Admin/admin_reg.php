
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Registration form</title>
 <!-- js-->
<!-- Bootstrap Core CSS -->
<link href="css/admin_reg_bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/admin_reg_style.css" rel='stylesheet' type='text/css' />
</head> 

	
		<div id="page-wrapper">
		
							
					<div class="col-md-6 validation-grid">
						<h4><span>Admin </span> Registration</h4>
						<div class="vlid-grid2">
							<form id="defaultForm" method="post" class="form-horizontal" action="admin_insert.php" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-sm-3 control-label">Admin Name</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" name="a_nme" required placeholder="enter name" />
									</div>
									</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-5">
										<input type="password" class="form-control" name="a_pass" placeholder="enter password"/>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label">Email address</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="a_email" placeholder="enter email" />
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Phone#</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="a_phn" placeholder="enter phone#" />
									</div>
								</div>


								<div class="form-group">
									<label class="col-sm-3  control-label">Address</label>
									<div class="col-sm-5">
										<input type="text" class="form-control" name="a_addr"placeholder="enter address" />
									</div>
								</div>
								
								<div class="bottom-form">
								<div class="col-sm-3 grid-form" >
									<label class="control-label" style="padding-left:35%">File input</label>
								</div>
								<div class="col-sm-5 grid-form1" >
									<input type="file" name="image" id="exampleInputFile">
								</div>
								<div class="clearfix"></div>
								</div><br>
								
								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3">
										<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
									</div>
                                  </div>
							</form>
</body>				
</html>