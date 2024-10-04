<?php  

require_once 'core.php';


if (isset($_POST['registerUserBtn'])) {

	$username = trim($_POST['username']);
	$password = sha1(trim($_POST['password']));
	$confirmPassword = sha1(trim($_POST['confirmPassword']));
	$gender = trim($_POST['gender']);
	$date_of_birth = trim($_POST['date_of_birth']);
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$location = trim($_POST['location']);

	if ($password == $confirmPassword) {

		$query = $userObj->insertNewUser($username, $password, $date_of_birth, $first_name, $last_name, $gender, $location);

		if ($query) {
			header("Location: ../login.php");
		}

		else {
			echo "Something went wrong!";
		}
		
	}

	else {
		echo "Passwords dont match!";
	}

}

if (isset($_POST['loginUserBtn'])) {

	$username = trim($_POST['username']);
	$password = sha1(trim($_POST['password']));
	$query = $userObj->loginUser($username, $password);

	if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "An error occured";
	}

}

if (isset($_GET['logoutAUser'])) {
	session_unset();
	header("Location: ../login.php");
}


?>