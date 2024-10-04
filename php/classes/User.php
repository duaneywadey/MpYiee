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

	public function showAllUsers() {
		try {
			$sql = "SELECT * FROM mpyie_users";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function insertNewUser($username, $password, $date_of_birth, $first_name, $last_name, $gender, $location) {
		
		try {
			$sql = "SELECT * FROM mpyie_users WHERE username = ?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$username]);

			if ($stmt->rowCount() == 0) {

				$sql = "INSERT INTO mpyie_users (username, password, date_of_birth, first_name, last_name, gender, location) VALUES(?,?,?,?,?,?,?)";

				$stmt = $this->pdo->prepare($sql);

				return $stmt->execute([$username, $password, $date_of_birth, $first_name, $last_name, $gender, $location]);	
			}
			else {
				return false;
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
}




?>