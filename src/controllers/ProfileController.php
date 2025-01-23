<?php

require_once 'AppController.php';
class ProfileController extends AppController{

    public function __construct() {
        parent::__construct();
    }
    public function profile() {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
        return $this->render('profile');
    }
}