<?php  

require_once 'core.php';

if (isset($_POST['addNewMusicInterestBtn'])) {
	$musicInterestsInput = $_POST['musicInterestsInput'];
	$musicInterestsArray = explode(",", $musicInterestsInput);
	
	foreach ($musicInterestsArray as $element) {
		$musicObj->insertNewMusicInterest(strtolower($element), $_SESSION['user_id']);
	}
	header("Location: ../index.php");
}




?>