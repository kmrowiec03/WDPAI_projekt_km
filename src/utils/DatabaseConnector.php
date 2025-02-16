<?php
require_once "config.php";
class DatabaseConnector {
    private $username;
    private $password;
    private $host;
    private $database;
    private static $instance = null;
    private $conn = null;
    public function __construct()
    {
        $this->username = USERNAME;
        $this->password = PASSWORD;
        $this->host = HOST;
        $this->database = DATABASE;
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnector();
        }
        return self::$instance;
    }
    public function connect()
    {
        try {
            $conn = new PDO(
                "pgsql:host=$this->host;port=5432;dbname=$this->database",
                $this->username,
                $this->password,
                ["sslmode"  => "prefer"]
            );
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function disconnect($conn) {
        $conn = null; // Zamyka połączenie
    }
}
