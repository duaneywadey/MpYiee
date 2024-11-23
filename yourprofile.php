<?php 
require_once 'php/core.php';
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
	<?php  
	// $uniqueStr = sha1(md5(rand(1,9999999)));
	// echo $uniqueStr;
	?>
	<?php $userInfoArray = $userObj->getUserByID($_SESSION['user_id']); ?>
	<?php require_once 'includes/navbar.php'; ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="card-header">
						<h2>Edit your profile</h2>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-5 userInfoCard">
								<img src="https://plus.unsplash.com/premium_photo-1666299357356-db1ed4a6d50b?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="..." class=" img-thumbnail">
								<hr>
								<h1>
									<?php echo $userInfoArray['first_name'] . " " . $userInfoArray['last_name']; ?>		
								</h1>
								<p>
									<?php echo $userInfoArray['description']; ?>
								</p>
							</div>
							<div class="col-md-7">

								<div class="row">
									<div class="col-md-6"><h2>Your Details</h2></div>
									<div class="col-md-6 float-end">
										<button class="btn btn-primary" data-toggle="modal" data-target="#musicTasteModal"> <i class="fa fa-pencil" aria-hidden="true"></i>Music Taste</button>
										<button class="btn btn-primary" data-toggle="modal" data-target="#socialMediaAccountsModal">
											<i class="fa fa-pencil" aria-hidden="true"></i>Social Media Accounts
										</button>
									</div>
								</div>
								<hr>
								<?php $getUserByID = $userObj->getUserByID($_SESSION['user_id']);?>
								<div class="updateUserForm">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">First Name</label>
												<input type="text" class="firstName form-control" value="<?php echo $getUserByID['first_name']; ?>">
											</div>	
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Last Name</label>
												<input type="text" class="lastName form-control" value="<?php echo $getUserByID['last_name']; ?>">
											</div>	
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Age</label>
												<input type="text" class="age form-control" value="<?php echo $getUserByID['date_of_birth']; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Location</label>
												<input type="text" class="location form-control" value="<?php echo $getUserByID['location']; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="name">Description</label>
												<textarea name="" id="" class="descriptionInput form-control"><?php echo $getUserByID['description']; ?>
												</textarea>
											</div>
											<div class="form-group">
												<button class="updateUserBtn btn btn-primary float-right">Save User</button>
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
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-11">
								<h1>Add/Edit Photos</h1>
							</div>						
							<div class="col-md-1">
								<button class="btn btn-primary" data-toggle="modal" data-target="#uploadImageModal">Add Image</button>
							</div>	
						</div>
					</div>
					<div class="card-body">
						<div class="container">
							<div class="row">
								<div class="row">
									<?php $getAllImagesByUserID = $photoObj->getAllImagesByUserID($_SESSION['user_id']); ?>

									<?php foreach ($getAllImagesByUserID as $row) { ?>
						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice" data-image="images/<?php echo $row['photo_name']; ?>" data-target="#image-gallery">
					                    <img class="img-thumbnail"
					                         src="images/<?php echo $row['photo_name']; ?>"
					                         alt="Another alt text">
						                </a>
						            </div>
						        	<?php } ?>
						        </div>
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
		<!-- Modal -->
	<div class="modal fade" id="musicTasteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add a Music Taste</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="form-group">
	      		<label for="musicTaste">Add new music</label>
	      		<input type="text" class="form-control">
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="socialMediaAccountsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Social Media Accounts</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="form-group">
	      		<label for="musicTaste">Add social media accounts</label>
	      		<input type="text" class="form-control">
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="uploadImageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form action="php/photos.php" method="POST" enctype="multipart/form-data">
		      	<div class="form-group">
				    <input type="file" class="form-control-file imageFile" id="exampleFormControlFile1" name="imageFile">
				</div>
				<div class="form-group">
				    <input type="submit" class="btn btn-primary float-right" id="exampleFormControlFile1" name="addPhotoBtn">
				</div>
			</form>
	      </div>
	    </div>
	  </div>
	</div>


	<script>
		$(document).ready(function () {
			$('.firstName, .lastName, .location, .descriptionInput').on('input', function (e) {
				var firstName = $('.firstName').val();
				var lastName = $('.lastName').val();
				var location = $('.location').val();
				$.ajax({
					url: "php/users.php",
					type: "POST",
					dataType:"text",
					data: {
						saveUpdatedUserBtn:1,
						firstName:firstName,
						lastName:lastName,
						location:location
					},
					success: function (data) {
						console.log(data);
					}
				});
			});

		})
	</script>
	<?php require_once 'includes/footer.php'; ?>
</body>
</html>