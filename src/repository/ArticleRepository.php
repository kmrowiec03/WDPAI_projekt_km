<?php

require_once __DIR__ . '/../utils/DatabaseConnector.php';
class ArticleRepository extends Repository {

    public function fetchPublishedArticles(): array {
        $stmt = $this->database->connect()->prepare('SELECT * FROM articles WHERE published = TRUE');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveArticle($title, $content, $imagePath): void {
        $stmt = $this->database->connect()->prepare('INSERT INTO articles (title, content, image_path) VALUES (?, ?, ?)');
        $stmt->execute([$title, $content, $imagePath]);
    }

    public function fetchArticleById($id): ?array {
        $stmt = $this->database->connect()->prepare('SELECT * FROM articles WHERE id = ? AND published = TRUE');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }
}
