<?php
require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';
class UserRepository extends Repository{

    public function getUserById($id) {
        $stmt = $this->database->prepare('SELECT * FROM users WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}