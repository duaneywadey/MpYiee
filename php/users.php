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
	$description = trim($_POST['description']);

	if (!empty($username) && !empty($password) && !empty($confirmPassword) && !empty($gender) && !empty($date_of_birth) && !empty($first_name) && !empty($last_name) && !empty($location) && !empty($description)) {

		if ($password == $confirmPassword) {

		$query = $userObj->insertNewUser($username, password_hash($password, PASSWORD_DEFAULT), $date_of_birth, $first_name, $last_name, $gender, $location, $description);

		echo "<pre>";
		print_r($query);
		echo "<pre>";

			if ($query['status'] == "200") {
				$_SESSION['user_id'] = $query['userInfoArray']['username'];
				$_SESSION['username'] = $query['userInfoArray']['username'];
				header("Location: ../music-you-like.php");
			}

			else {
				$_SESSION['status'] = $query['status'];
				$_SESSION['message'] = $query['message'];
				header("Location: ../register.php");
			}
			
		}

		else {
			$_SESSION['status'] = "404";
			$_SESSION['message'] = "Please check if both passwords are equal";
			header("Location: ../register.php");
		}

	}

	else {
		$_SESSION['status'] = "404";
		$_SESSION['message'] = "Please make there's no empty input fields are empty";
		header("Location: ../register.php");
	}

	

}

if (isset($_POST['loginUserBtn'])) {

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$query = $userObj->loginUser($username, $password);

	if (password_verify($password, $query['password'])) {
		$_SESSION['username'] = $query['username'];
		$_SESSION['user_id'] = $query['user_id'];
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



if (isset($_POST['saveUpdatedUserBtn'])) {
	echo $_POST['firstName'] . $_POST['lastName'];
}

?>