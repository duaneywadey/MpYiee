<?php  

class Music 
{
	public function __construct($pdo) {
		try {
			$this->pdo = $pdo;	
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function insertNewMusicInterest($music_interest_description, $user_id) {
		try {
			$sql = "INSERT INTO mpyie_music_interests (music_interest_description, user_id) VALUES(?,?)";

			$stmt = $this->pdo->prepare($sql);
			return $stmt->execute([$music_interest_description, $user_id]);
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}

	}

}


?>