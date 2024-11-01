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

			$response = array();
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

						$response = array(
							"status" => "200",
							"message" => "Successfully registered!",
							"userInfoArray" => $userInfoArray
						);
					}
					else {
						$response = array(
							"status" => "404",
							"message" => "Can't find user from the database!"
						);
					}
				}
				else {
					$response = array(
						"status" => "404",
						"message" => "Can't find user from the database!"
					);
				}	
			}
			else {
				$response = array(
					"status" => "404",
					"message" => "User already exists from the database"
				);
			}

			return $response;

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
				return $userInfoRow;
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