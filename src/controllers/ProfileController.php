<?php

require_once 'AppController.php';
class ProfileController extends AppController{
    private $db;

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $this->db = DatabaseConnector::getInstance();
    }
    public function profile() {
        
        $this->render("profile");
    }
    public function trainings() {
        // Renderujemy widok profilu
        $this->render("trainings");
    }
}