<?php

require_once 'AppController.php';
require_once 'src/repository/UserRepository.php';
require_once 'src/repository/UserDetailsRepository.php';
class ProfileController extends AppController{
    private UserRepository $userRepository;
    private UserDetailsRepository $userDetailsRepository;

    public function __construct() {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->userDetailsRepository = new UserDetailsRepository();
    }
    public function profile() {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
        $userId = $_SESSION['user']['id'];
        $user = $this->userRepository->getUserById($userId);

        $userDetails = $this->userDetailsRepository->getUserDetailsByUserId($userId);

        return $this->render('profile', ['user' => $user, 'userDetails' => $userDetails]);
    }
}