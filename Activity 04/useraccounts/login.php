<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>User Log-in and Registration</title>
</head>
<body >
	<div>
		<form action="Registration.php" method="POST">
			<div class="container">
				<div class="login-box">
				<div class="row">
					<div class="col-sm-6 login-left">
						<h2><b>Log-in Here</b></h2>
						<form action="validation.php" method="post">
	 
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="Username" class="form-control" required>
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" required>
							</div> <br>
							<button type="submit" class="btn btn-primary" name="create" value="Log-in"> Log-in </button>
						</form>
				</div>

					<div class="col-sm-6 login-right">
						<h2><b>Register Here</b></h2>
						<form action="registration.php" method="post">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" name="name" class="form-control" required>
							</div>

							<div class="form-group">
								<label>Last Name</label>
								<input type="text" name="name" class="form-control" required>
							</div>

							<div class="form-group">
								<label>Email Address</label>
								<input type="text" name="Email" required placeholder="name@example.com" class="form-control" required>
							</div>

							<div class="form-group">
								<label>Username</label>
								<input type="text" name="Username" class="form-control" required>
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" required>
							</div> <br>
							<button type="submit" class="btn btn-primary" name="create" value="Register"> Register </button>
						</form>
					</div>
				</div>
			</div>
			</div>	
		</form>
	</div>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>