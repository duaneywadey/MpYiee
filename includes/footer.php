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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="../viewbox-master/jquery.viewbox.js"></script>
<script src="../viewbox-master/jquery.viewbox.min.js"></script>