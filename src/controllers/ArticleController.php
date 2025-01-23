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
}

