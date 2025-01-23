<?php

require_once __DIR__ . '/../utils/DatabaseConnector.php';
class ArticleRepository extends Repository {

    public function fetchPublishedArticles(): array {
        $user = $_SESSION['user'] ?? null;
        $isAdmin = isset($user['role']) && $user['role'] === 'admin';
        if ($isAdmin) {
            $stmt = $this->database->prepare('SELECT * FROM articles');
        } else {
            $stmt = $this->database->prepare('SELECT * FROM articles WHERE published = TRUE');
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveArticle($title, $content, $imagePath): void {
        $stmt = $this->database->prepare('INSERT INTO articles (title, content, image_path) VALUES (?, ?, ?)');
        $stmt->execute([$title, $content, $imagePath]);
    }

    public function fetchArticleById($id): ?array {
        $stmt = $this->database->prepare('SELECT * FROM articles WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }
    public function getAllArticles(): array {
        $stmt = $this->database->prepare("SELECT * FROM articles");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateArticleStatus(int $articleId, bool $published): void {
        $stmt = $this->database->prepare("UPDATE articles SET published = :published WHERE id = :id");
        $stmt->bindParam(':published', $published, PDO::PARAM_BOOL);
        $stmt->bindParam(':id', $articleId, PDO::PARAM_INT);
        $stmt->execute();
    }
}
