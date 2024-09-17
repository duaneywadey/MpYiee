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
						<h2>Edit your profile</h2>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-5">
								<img src="https://images.unsplash.com/photo-1725561754846-3c5972698e17?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="..." class=" img-thumbnail">
								<hr>
								<h1>Ivan Duane</h1>
								<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, molestias, magni autem placeat quod quo? Officiis, quisquam, eius a quam fugiat voluptates, ipsum maxime recusandae alias temporibus perspiciatis sit quasi?</p>
							</div>
							<div class="col-md-7">
								<div class="row">
									<div class="col-md-6"><h2>Your Details</h2></div>
									<div class="col-md-6 float-end">
										<button class="btn btn-primary"> <i class="fa fa-pencil" aria-hidden="true"></i>Music Taste</button>
										<button class="btn btn-primary">
											<i class="fa fa-pencil" aria-hidden="true"></i>Social Media Accounts
										</button>
									</div>
								</div>
								<hr>
								<form action="#">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">First Name</label>
												<input type="text" class="form-control">
											</div>	
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Last Name</label>
												<input type="text" class="form-control">
											</div>	
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Age</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">Location</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="name">Description</label>
												<textarea name="" id="" class="form-control"></textarea>
											</div>
										</div>
									</div>
								</form>
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
								<button class="btn btn-primary">Add Photo</button>
							</div>	
						</div>
					</div>
					<div class="card-body">
						<div class="container">
							<div class="row">
								<div class="row">
						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
						                   data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                   data-target="#image-gallery">
						                    <img class="img-thumbnail"
						                         src="https://images.unsplash.com/photo-1725610588150-c4cd8b88affd?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
						                         alt="Another alt text">
						                </a>
						            </div>
						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
						                   data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                   data-target="#image-gallery">
						                    <img class="img-thumbnail"
						                         src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                         alt="Another alt text">
						                </a>
						            </div>

						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
						                   data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                   data-target="#image-gallery">
						                    <img class="img-thumbnail"
						                         src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                         alt="Another alt text">
						                </a>
						            </div>
						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
						                   data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                   data-target="#image-gallery">
						                    <img class="img-thumbnail"
						                         src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                         alt="Another alt text">
						                </a>
						            </div>
						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
						                   data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                   data-target="#image-gallery">
						                    <img class="img-thumbnail"
						                         src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                         alt="Another alt text">
						                </a>
						            </div>

						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
						                   data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                   data-target="#image-gallery">
						                    <img class="img-thumbnail"
						                         src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                         alt="Another alt text">
						                </a>
						            </div>
						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
						                   data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                   data-target="#image-gallery">
						                    <img class="img-thumbnail"
						                         src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                         alt="Another alt text">
						                </a>
						            </div>
						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
						                   data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                   data-target="#image-gallery">
						                    <img class="img-thumbnail"
						                         src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                         alt="Another alt text">
						                </a>
						            </div>



						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
						                   data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                   data-target="#image-gallery">
						                    <img class="img-thumbnail"
						                         src="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                         alt="Another alt text">
						                </a>
						            </div>
						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
						                   data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                   data-target="#image-gallery">
						                    <img class="img-thumbnail"
						                         src="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                         alt="Another alt text">
						                </a>
						            </div>
						            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
						                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
						                   data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                   data-target="#image-gallery">
						                    <img class="img-thumbnail"
						                         src="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
						                         alt="Another alt text">
						                </a>
						            </div>
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
	<script>
		let modalId = $('#image-gallery');

		$(document)
		  .ready(function () {

		    loadGallery(true, 'a.thumbnail');

		    //This function disables buttons when needed
		    function disableButtons(counter_max, counter_current) {
		      $('#show-previous-image, #show-next-image')
		        .show();
		      if (counter_max === counter_current) {
		        $('#show-next-image')
		          .hide();
		      } else if (counter_current === 1) {
		        $('#show-previous-image')
		          .hide();
		      }
		    }

		    /**
		     *
		     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
		     * @param setClickAttr  Sets the attribute for the click handler.
		     */

		    function loadGallery(setIDs, setClickAttr) {
		      let current_image,
		        selector,
		        counter = 0;

		      $('#show-next-image, #show-previous-image')
		        .click(function () {
		          if ($(this)
		            .attr('id') === 'show-previous-image') {
		            current_image--;
		          } else {
		            current_image++;
		          }

		          selector = $('[data-image-id="' + current_image + '"]');
		          updateGallery(selector);
		        });

		      function updateGallery(selector) {
		        let $sel = selector;
		        current_image = $sel.data('image-id');
		        $('#image-gallery-title')
		          .text($sel.data('title'));
		        $('#image-gallery-image')
		          .attr('src', $sel.data('image'));
		        disableButtons(counter, $sel.data('image-id'));
		      }

		      if (setIDs == true) {
		        $('[data-image-id]')
		          .each(function () {
		            counter++;
		            $(this)
		              .attr('data-image-id', counter);
		          });
		      }
		      $(setClickAttr)
		        .on('click', function () {
		          updateGallery($(this));
		        });
		    }
		  });

		// build key actions
		$(document)
		  .keydown(function (e) {
		    switch (e.which) {
		      case 37: // left
		        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
		          $('#show-previous-image')
		            .click();
		        }
		        break;

		      case 39: // right
		        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
		          $('#show-next-image')
		            .click();
		        }
		        break;

		      default:
		        return; // exit this handler for other keys
		    }
		    e.preventDefault(); // prevent the default action (scroll / move caret)
		  });
	</script>
	<?php require_once 'includes/footer.php'; ?>
</body>
</html>