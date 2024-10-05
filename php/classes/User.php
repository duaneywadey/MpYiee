<?php  

class User {
	
	public function __construct($pdo) {
		try {
			$this->pdo = $pdo;
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function showAllUsers($user_id) {
		try {
			$sql = "SELECT * FROM mpyie_users WHERE NOT user_id = ?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$user_id]);
			return $stmt->fetchAll();
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function insertNewUser($username, $password, $date_of_birth, $first_name, $last_name, $gender, $location, $description) {
		
		try {
			$sql = "SELECT * FROM mpyie_users WHERE username = ?";
			$selectStmt = $this->pdo->prepare($sql);
			$selectStmt->execute([$username]);

			if ($selectStmt->rowCount() == 0) {

				$sql = "INSERT INTO mpyie_users (username, password, date_of_birth, first_name, last_name, gender, location, description) VALUES(?,?,?,?,?,?,?,?)";

				$insertStmt = $this->pdo->prepare($sql);

				$insertNewUserQuery = $insertStmt->execute([$username, $password, $date_of_birth, $first_name, $last_name, $gender, $location, $description]);

				if ($insertNewUserQuery) {

					$sql = "SELECT * FROM mpyie_users WHERE username = ?";
					$getUserQuery = $this->pdo->prepare($sql);

					if ($getUserQuery->execute([$username])) {

						$userInfoArray = $getUserQuery->fetch();

						$user_id = $userInfoArray['user_id'];
						$username = $userInfoArray['username'];

						$_SESSION['user_id'] = $user_id;
						$_SESSION['username'] = $username;
						return true;

					}
					else {
						echo "User not retrieved";
					}
				}
				else {
					echo "User not inserted";
				}	
			}
			else {
				echo "User already exists!";;
			}
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function loginUser($username, $password) {
		try {
			$sql = "SELECT * FROM mpyie_users WHERE username = ?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$username]);

			if ($stmt->rowCount() > 0) {

				$userInfoRow = $stmt->fetch();

				// Get individual values
				$user_id = $userInfoRow['user_id'];
				$username = $userInfoRow['username'];
				$passwordFromDB = $userInfoRow['password'];

				if ($password == $passwordFromDB) {
					$_SESSION['user_id'] = $user_id;
					$_SESSION['username'] = $username;
					return true;
				}
				else {
					echo "User was found but incorrect password";
				}
			}
			else {
				echo "User not found";
			}
		}

		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getUserByID($user_id) {
		try {
			$sql = "SELECT * FROM mpyie_users WHERE user_id = ?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$user_id]);
			return $stmt->fetch();
		}
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function updateUserByID($user_id, $first_name, $last_name, $gender, $location, $description) {
		try {
			$sql = "UPDATE mpyie_users SET first_name = ?, last_name = ?, gender = ?, location = ?, description = ?";
			$stmt = $this->pdo->prepare($sql);
			return $stmt->execute([$first_name, $last_name, $gender, $location, $description]);
		}
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}




?>