<?php

require_once 'AppController.php';
require_once __DIR__ . '/../../DatabaseConnector.php';
class DashboardController extends AppController{

    public function dashboard(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $connector = new DatabaseConnector();
        $stmt = $connector->connect()->prepare('SELECT title, content, image_path, published FROM articles WHERE published = TRUE');
        $stmt->execute();

        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->render("dashboard", ['articles' => $articles]);
    }
    public function uploadArticle() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            header('Content-Type: application/json'); // Ustaw odpowiedź jako JSON

            if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
                $uploads_dir = __DIR__ .'/../../public/uploads/';
                $image_name = basename($_FILES["image"]["name"]);
                $image_path = $uploads_dir . $image_name;

                $allowed_types = ["image/jpeg", "image/png", "image/gif"];
                $file_type = $_FILES["image"]["type"];

                if (in_array($file_type, $allowed_types)) {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $image_path)) {
                        $relative_path = "public/uploads/" . $image_name;

                        $title = $_POST["title"];
                        $content = $_POST["content"];

                        $connector = new DatabaseConnector();
                        $stmt = $connector->connect()->prepare(
                            'INSERT INTO articles (title, content, image_path) VALUES (?, ?, ?)'
                        );
                        $stmt->execute([$title, $content, $relative_path]);

                        echo json_encode(['status' => 'success', 'message' => 'Artykuł został przesłany pomyślnie!']);
                        return;
                    } else {
                        echo json_encode(['status' => 'error', 'message' => 'Wystąpił problem przy przesyłaniu pliku.']);
                        return;
                    }
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Niepoprawny typ pliku. Obsługiwane pliki: JPG, PNG, GIF.']);
                    return;
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Proszę wybrać plik.']);
                return;
            }
        }
    }






}