<?php  

class Photo 
{
	public function __construct($pdo) {
		try {
			$this->pdo = $pdo;	
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function insertNewPhoto($user_id, $photo_name, $is_profile_picture) {
		try {
			$sql = "INSERT INTO mpyie_photos (user_id,photo_name,is_profile_picture) VALUES (?,?,?)";
			$stmt = $this->pdo->prepare($sql);
			return $stmt->execute([$user_id, $photo_name, $is_profile_picture]);	
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getAllImagesByUserID($user_id) {
		try {
			$sql = "SELECT * FROM mpyie_photos WHERE user_id = ?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$user_id]);
			return $stmt->fetchAll();	
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}


?>