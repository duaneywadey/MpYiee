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
			$sql = "SELECT * FROM users";
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
			$sql = "INSERT INTO mpyie_users(username, password, gender, date_of_birth, first_name, last_name, location) VALUES(?,?,?,?,?,?,?)";
			$stmt = $this->pdo->prepare($sql);
			return $stmt->execute([$username, $password, $date_of_birth, $first_name, $last_name, $gender, $location]);	
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}

	}
}

?>