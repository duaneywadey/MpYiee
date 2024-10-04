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
						<h1><img src="https://www.svgrepo.com/show/429525/audio-file-mp3.svg" alt="" style="width: 40px; height: 40px; margin-right: 10px;">Welcome, <?php echo $_SESSION['username']; ?>List Down Your Music Taste!</h1>
					</div>
					<div class="card-body">
						<form action="php/music_interests.php" method="POST">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">What bands do you like listening to? <i>Separate them by commas</i></label>
										<textarea name="" id="" class="form-control"></textarea>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-primary float-right" name="addNewMusicInterestBtn">
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