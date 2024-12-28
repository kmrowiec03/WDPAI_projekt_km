<?php


require_once 'AppController.php';
require_once __DIR__ . '/../User.php';
require_once __DIR__ . '/../../DatabaseConector.php';

class SecurityController extends AppController{
    private $users = [];
    private $db;

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Sprawdź, czy użytkownicy są zapisani w sesji
        if (!isset($_SESSION['user'])) {
            $_SESSION['user'] = [];
        }
        $this->users = &$_SESSION['user'];

        $this->db = DatabaseConnector::getInstance();
    }

    public function getUsers(): array
    {
        return $this->users;
    }

    public function login() {


        $method = $_SERVER['REQUEST_METHOD'];
        if ($this->isGet()) {
            return $this->render("login");
        }
        if (!isset($_POST['email']) || !isset($_POST['password'])) {
            return $this->render('login', ['error' => 'Email and password are required.']);
        }
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Sprawdzamy, czy użytkownik istnieje w bazie
        $conn = $this->db->connect();
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Ustawienie sesji po udanym logowaniu
            $_SESSION['user'] = ['email' => $user['email']];
            header('Location: /dashboard');
            exit();
        }

        return $this->render('login', ['error' => 'Invalid email or password.']);
    }
    public function logout() {
        // Sprawdzamy, czy sesja jest już uruchomiona, zanim ją zniszczymy
        if (session_status() === PHP_SESSION_ACTIVE) {
            // Zniszczenie wszystkich zmiennych sesyjnych
            session_unset();

            // Zniszczenie samej sesji
            session_destroy();
        }

        // Po wylogowaniu, przekierowanie na stronę logowania
        header('Location: /login');
        exit();
    }

    // Funkcja profilowa (widok profilu użytkownika)
    public function profile() {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }

        return $this->render('profile');
    }
    public function register() {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($this->isGet()) {
            return $this->render("register");
        }

        $email = $_POST['email'];
        $password = $_POST['password1'];
        $confirmPassword = $_POST['password2'];

        if ($password !== $confirmPassword) {
            return $this->render('register', ['error' => 'Passwords do not match!']);
        }

        // Sprawdzamy, czy e-mail już istnieje w bazie danych
        $conn = $this->db->connect();
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingUser) {
            return $this->render('register', ['error' => 'Email is already taken!']);
        }

        // Jeśli nie ma takiego użytkownika, dodajemy nowego
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->execute();

        header("Location: /dashboard");
        exit();
    }

}