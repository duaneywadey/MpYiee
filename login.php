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
			<div class="col-md-6 py-5">
				<div class="card shadow p-3 mb-5 bg-white rounded">
					<div class="card-header">
						<h1><img src="https://www.svgrepo.com/show/429525/audio-file-mp3.svg" alt="" style="width: 40px; height: 40px; margin-right: 10px;">Welcome to MpYiee! Login now!</h1>
					</div>
					<div class="card-body">
						<form action="php/users.php" method="POST">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" name="username">
							</div>
							<div class="form-group">
								<label for="username">Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<div class="form-group">
								<label for="username">Don't have an account yet? Register <a href="register.php">here</a></label>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary float-right" value="Login" name="loginUserBtn">
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