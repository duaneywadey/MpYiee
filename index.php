<?php 

require_once 'php/core.php'; 

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}

?>

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
	<?php require_once 'includes/navbar.php'; ?>
	<div class="container">
		<div class="row justify-content-center">
			<?php if (isset($_SESSION['username'])) { ?>
			<h1>Hello there welcome <?php echo $_SESSION['username']; ?></h1>
			<?php } ?>
			<?php $showAllUsers = $userObj->showAllUsers($_SESSION['user_id']); ?>
			<?php foreach ($showAllUsers as $row) { ?>
			<div class="col-md-12 mt-4">
				<div class="card mt-4 shadow p-3 mb-5 bg-white rounded">
					<div class="card-title"></div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-5">
								<img src="https://images.unsplash.com/photo-1725489891089-5960671a3433?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="..." class=" img-thumbnail">
							</div>
							<div class="col-md-6">
								<a href="profile.php?user_id=<?php echo $row['user_id']; ?>">
								<h1 class="display-4"><?php echo $row['username']; ?></h1>
								</a>
								<h4>She also likes lorem, lorem, lrorem, and lorem</h4>
							</div>
							<div class="col-md-1">
								<button class="btn btn-danger"><i class="fa fa-heart" aria-hidden="true"></i>Like</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<?php require_once 'includes/footer.php'; ?>
</body>
</html>