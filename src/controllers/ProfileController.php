<?php

require_once 'AppController.php';
require_once 'src/repository/UserRepository.php';
require_once 'src/repository/UserDetailsRepository.php';
class ProfileController extends AppController{
    private UserRepository $userRepository;
    private UserDetailsRepository $userDetailsRepository;

    /**
     * @throws Exception
     */
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

        // Pobieramy ID użytkownika z sesji
        $userId = $_SESSION['user']['id'];

        // Pobieramy dane użytkownika z repozytorium
        $user = $this->userRepository->getUserById($userId);

        // Pobieramy szczegóły użytkownika z repozytorium
        $userDetails = $this->userDetailsRepository->getUserDetailsByUserId($userId);

        // Przekazujemy dane użytkownika oraz szczegóły do widoku
        return $this->render('profile', ['user' => $user, 'userDetails' => $userDetails]);
    }
}