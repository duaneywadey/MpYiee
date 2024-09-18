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
				<div class="card">
					<div class="card-header">
						<h2>Messages</h2>
				    </div>
				    <div class="card-body">
				    	<div class="row mt-2">
				    		<div class="col-md-12">
				    			<div class="card float-right">
				    				<div class="card-body">
				    					<h4 class="text-danger">Ivan Duane</h4>
				    					<small><i>September 18, 2024 7:09 AM</i></small>
						    			<p class="mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt quia magnam eum velit ex veniam, assumenda, molestiae aspernatur quod, porro vel debitis nisi possimus? Voluptatem minima, dolor laborum recusandae sapiente.</p>
				    				</div>
				    			</div>
				    		</div>
				    	</div>
				    </div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'includes/footer.php'; ?>
</body>
</html>