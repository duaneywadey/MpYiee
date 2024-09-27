<?php  

require_once 'core.php';


if (isset($_POST['registerUserBtn'])) {

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$confirmPassword = trim($_POST['confirmPassword']);
	$gender = trim($_POST['gender']);
	$date_of_birth = trim($_POST['date_of_birth']);
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$location = trim($_POST['location']);

	if ($password == $confirmPassword) {

		$query = $userObj->insertNewUser($username, $password, $date_of_birth, $first_name, $last_name, $gender, $location);

		if ($query) {
			echo "Successfully inserted user!";
		}
		else {
			echo "Something went wrong!";
		}
	}

}


?>