<?php

class UserDetailsRepository extends Repository{

    public function getUserDetailsByUserId($userId) {
        $stmt = $this->database->prepare('SELECT * FROM user_details WHERE id = ?');
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}