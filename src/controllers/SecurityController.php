<?php


require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../utils/DatabaseConnector.php';
require_once __DIR__ . '/../models/UserDetails.php';

class SecurityController extends AppController{
    private $db;

    /**
     * @throws Exception
     */
    public function __construct() {

        parent::__construct();

        $this->db = DatabaseConnector::getInstance();
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
            $userObj = new User(
                $user['email'],
                $user['password'],
                $user['name'],
                $user['surname'],
                $user['phone_number'],
                $user['account_type']
            );
            // Pobieramy szczegóły użytkownika z tabeli user_details
            $stmtDetails = $conn->prepare("SELECT * FROM user_details WHERE id = :user_id");
            $stmtDetails->bindParam(':user_id', $user['id']);
            $stmtDetails->execute();
            $userDetails = $stmtDetails->fetch(PDO::FETCH_ASSOC);

            // Tworzymy obiekt UserDetails
            $userDetailsObj = new UserDetails(
                $userDetails['weight'] ?? null,
                $userDetails['height'] ?? null,
                $userDetails['date_of_birth'] ?? null,
                $userDetails['bmi'] ?? null,
                $userDetails['body_fat_percentage'] ?? null,
                $userDetails['muscle_mass_percentage'] ?? null,
                $userDetails['activity_level'] ?? null,
                $userDetails['goal'] ?? null,
                $userDetails['dietary_preferences'] ?? null,
                $userDetails['medical_conditions'] ?? null
            );

            // Ustawienie obiektu User w sesji
            $_SESSION['user'] = [
                'id' => $user['id'],
                'email' => $user['email'],
                'role' => $user['account_type'],
                'userObj' => $userObj,
                'userDetailsObj' => $userDetailsObj
            ];

            // Przekierowanie na dashboard
            header('Location: /dashboard');
            exit();
        }

        return $this->render('login', ['error' => 'Invalid email or password.']);
    }
    public function logout() {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_unset();
            session_destroy();
        }

        // Po wylogowaniu, przekierowanie na stronę logowania
        header('Location: /login');
        exit();
    }


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