<?php 

require_once 'core.php';

if (isset($_POST['addPhotoBtn'])) {

	// Get file name
	$fileName = $_FILES['imageFile']['name'];

	// Get temporary file name
	$tempFileName = $_FILES['imageFile']['tmp_name'];

	// Get file extension
	$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

	// Generate random characters for image name
	$uniqueID = sha1(md5(rand(1,9999999)));

	// Combine image name and file extension
	$imageName = $uniqueID.".".$fileExtension;

	// Save image 'record' to database
	$saveImgToDb = $photoObj->insertNewPhoto($_SESSION['user_id'], $imageName, false);

	// Store actual 'image file' to images folder
	if ($saveImgToDb) {

		// Specify path
		$folder = "../images/".$imageName;

		if (move_uploaded_file($tempFileName, $folder)) {
			header("Location: ../yourprofile.php");
		}
	}

}

?>