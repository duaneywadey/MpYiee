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
		<div class="row mt-4">
			<div class="col-md-12">
				<div class="card shadow p-3 mb-5 bg-white rounded">
					<div class="card-header">
						<h2>Messages</h2>
				    </div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-2">
								<img src="https://images.unsplash.com/photo-1726108397211-6507220a6a21?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-thumbnail" alt="">
							</div>
							<div class="col-md-10">
								<a href="usermessage.php">
									<h1>Ivan</h1>
								</a>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-2">
								<img src="https://images.unsplash.com/photo-1726108397211-6507220a6a21?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-thumbnail" alt="">
							</div>
							<div class="col-md-10">
								<a href="usermessage.php">
									<h1>Ivan</h1>
								</a>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-2">
								<img src="https://images.unsplash.com/photo-1726108397211-6507220a6a21?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-thumbnail" alt="">
							</div>
							<div class="col-md-10">
								<a href="usermessage.php">
									<h1>Ivan</h1>
								</a>
							</div>
						</div>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'includes/footer.php'; ?>
</body>
</html>