<?php

require_once 'AppController.php';
require_once "src/services/ArticleService.php";

class ArticleController extends AppController {
    private ArticleService $articleService;

    public function __construct() {
        parent::__construct();
        $this->articleService = new ArticleService();
    }

    public function articles() {
        $articles = $this->articleService->getPublishedArticles();
        $this->render("articles", ['articles' => $articles]);
    }

    public function uploadArticle() {
        $response = $this->articleService->handleArticleUpload($_FILES, $_POST);
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function viewArticle($id) {
        $article = $this->articleService->getArticleById($id);
        if (!$article) {
            $this->render('errors/404');
            return;
        }
        $this->render('article', ['article' => $article]);
    }
    public function manageArticles() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            header('Location: /login');
            exit();
        }

        $articles = $this->articleService->getAllArticles();
        return $this->render('articles/manage', ['articles' => $articles]);
    }

    public function updateArticleStatus() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            http_response_code(403);
            echo json_encode(['error' => 'Unauthorized']);
            return;
        }

        // Pobranie danych z zapytania AJAX
        $data = json_decode(file_get_contents('php://input'), true);
        $articleId = $data['article_id'];
        $published = $data['published'] === 'true';

        // Zaktualizowanie statusu artykułu w bazie danych
        $this->articleService->changeArticleStatus($articleId, $published);

        // Odpowiedź zwrotna
        echo json_encode(['success' => true]);
    }
}

