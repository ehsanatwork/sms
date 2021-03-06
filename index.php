<?php 
	include 'dbh.php';
	include 'inc/header.php';
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-sm-offset-1">
				<article id="articles">
					<div class="col-sm-6">
						<div class="regform">
							<h2>Registration Form</h2>
							<form action="reg.php" role="form" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<input name="email" type="email" class="form-control" placeholder="Student Email">
								</div>
								<div class="form-group">
									<input name="password" type="password" class="form-control" placeholder="Please Enter Password">
								</div>
								<div class="form-group">
									<input name="confirmpassword" type="password" class="form-control" placeholder="Please Re-Enter Password">
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="btn btn-info" value="Register">
								</div>
							</form>
						</div>
					</div>

					<div class="col-sm-5 col-sm-offset-1">
						<div class="logform">
							<div class="panel panel-primary text-center">
								<div class="panel-body">
									<?php  
										if (isset($_SESSION['email'])) {
											echo "You are logged in as" . "<br>" . $_SESSION['email'];
										} else {
											echo "You are not logged in.";
										}
									?>
								</div>
							</div>
							<h2>Login Form</h2>
							<form action="login.php" id="regiform" role="form" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<input name="uemail" type="email" class="form-control" placeholder="Student Email">
								</div>
								<div class="form-group">
									<input name="upassword" type="password" class="form-control" placeholder="Please Enter Password">
								</div>
								<div class="form-group">
									<input type="submit" name="submit" value="Login" class="btn btn-info">
								</div>
							</form>

							<form action="logout.php">
								<input type="submit" name="submit" value="Logout" class="btn btn-info">
							</form>
						</div>
					</div>
				</article>				
			</div>
		</div>
	</div>