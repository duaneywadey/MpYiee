<?php require_once 'php/core.php'; ?>
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-11">
								<h2>Ivan Duane's Photos</h2>
							</div>
							<div class="col-md-1 float-end">
								<button class="btn btn-danger"><i class="fa fa-gratipay" aria-hidden="true"></i> Heart</button>
							</div>
						</div>
					</div>
					<?php $userInfoArray = $userObj->getUserByID($_GET['user_id']); ?>
					<div class="card-body">
						<div class="row">
							<div class="col-md-5">
								<img src="https://images.unsplash.com/photo-1719937050640-71cfd3d851be?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="..." class=" img-thumbnail">
								<div class="row personalDetails">
									<div class="col-md-12">
										<h1 class="mt-4 mb-4">Personal Details</h1>
									</div>
									<div class="col-md-6">
						        		<label for="fname">First Name</label>
						        		<div class="p-3 mb-2 bg-light text-dark"><?php echo $userInfoArray['first_name']; ?></div>
						        	</div>
						        	<div class="col-md-6">
						        		<label for="fname">Last Name</label>
						        		<div class="p-3 mb-2 bg-light text-dark"><?php echo $userInfoArray['last_name']; ?></div>
						        	</div>
						        	<div class="col-md-12">
						        		<label for="fname">Age</label>
						        		<div class="p-3 mb-2 bg-light text-dark"><?php echo $userInfoArray['date_of_birth']; ?></div>
						        	</div>
						        	<div class="col-md-12">
						        		<label for="fname">Location</label>
						        		<div class="p-3 mb-2 bg-light text-dark"><?php echo $userInfoArray['location']; ?></div>
						        	</div>
						        	<div class="col-md-12">
						        		<label for="fname">Music Tastes</label>
						        		<div class="p-3 mb-2 bg-light text-dark"><?php echo $userInfoArray['location']; ?></div>
						        	</div>
						        	<div class="col-md-12">
						        		<label for="fname">Social Media Accounts</label>
						        		<ul>
						        			<li><a href="https://getbootstrap.com/docs/4.0/components/forms/">https://getbootstrap.com/docs/4.0/components/forms/</a></li>
						        		</ul>
						        	</div>
						        </div>
								<hr>
							</div>
							<div class="col-md-7">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
							        		<h1>Who is <?php echo $userInfoArray['first_name'] . "?"?></h1>
											<p><?php echo $userInfoArray['description']; ?></p>
							        	</div>
									</div>
									<div class="row">
										<?php $getAllImagesByUserID = $photoObj->getAllImagesByUserID($_GET['user_id']); ?>
										<?php foreach ($getAllImagesByUserID as $row) { ?>
							            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
							                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
							                   data-image="images/<?php echo $row['photo_name']; ?>"
							                   data-target="#image-gallery">
							                    <img class="img-thumbnail"
							                         src="images/<?php echo $row['photo_name']; ?>"
							                         alt="Another alt text">
							                </a>
							            </div>
							        	<?php } ?>
							        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							            <div class="modal-dialog modal-lg">
							                <div class="modal-content">
							                    <div class="modal-header">
							                        <h4 class="modal-title" id="image-gallery-title"></h4>
							                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
							                        </button>
							                    </div>
							                    <div class="modal-body">
							                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
							                    </div>
							                    <div class="modal-footer">
							                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
							                        </button>

							                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
							                        </button>
							                    </div>
							                </div>
							            </div>
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