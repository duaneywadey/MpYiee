<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<?php require_once 'includes/header.php'; ?>
	<style>
		.btn:focus, .btn:active, button:focus, button:active {
		  outline: none !important;
		  box-shadow: none !important;
		}

		#image-gallery .modal-footer{
		  display: block;
		}

		.thumb{
		  margin-top: 15px;
		  margin-bottom: 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 py-5">
				<div class="card shadow p-3 mb-5 bg-white rounded">
					<div class="card-header">
						<h1><img src="https://www.svgrepo.com/show/429525/audio-file-mp3.svg" alt="" style="width: 40px; height: 40px; margin-right: 10px;">Welcome to MpYiee! Register now!</h1>
					</div>
					<div class="card-body">
						<form action="php/users.php" method="POST">
							<div class="registrationForm">
								<div class="row mb-2 mt-2">
									<div class="col-md-12">
										<a href="login.php">Return to home</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="username">Username</label>
											<input type="text" name="username" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="username">Password</label>
											<input type="password" name="password" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="username">Confirm Password</label>
											<input type="password" name="confirmPassword" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="username">Gender</label>
											<select name="gender" class="form-control">
											  <option value="Male">Male</option>
											  <option value="Female">Female</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="username">Date of Birth</label>
											<input type="date" name="date_of_birth" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label for="username">First Name</label>
											<input type="text" name="first_name" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="username">Last Name</label>
											<input type="text" name="last_name" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="username">Location</label>
											<input type="text" name="location" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Tell something about yourself!</label>
											<textarea name="" id="" class="form-control"></textarea>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary float-right" name="registerUserBtn">
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'includes/footer.php'; ?>
</body>
</html>