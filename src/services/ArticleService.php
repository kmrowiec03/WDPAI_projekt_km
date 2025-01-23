<?php


require_once __DIR__ . '/../repository/ArticleRepository.php';

class ArticleService {
    private ArticleRepository $articleRepository;

    public function __construct() {
        $this->articleRepository = new ArticleRepository();
    }

    public function getPublishedArticles(): array {
        return $this->articleRepository->fetchPublishedArticles();
    }

    public function handleArticleUpload($files, $post): array {
        if (isset($files["image"]) && $files["image"]["error"] == 0) {
            $allowedTypes = ["image/jpeg", "image/png", "image/gif"];
            $fileType = $files["image"]["type"];
            $uploadsDir = __DIR__ . '/../../public/uploads/';
            $imageName = basename($files["image"]["name"]);

            if (in_array($fileType, $allowedTypes)) {
                $imagePath = $uploadsDir . $imageName;
                if (move_uploaded_file($files["image"]["tmp_name"], $imagePath)) {
                    $relativePath = "public/uploads/" . $imageName;
                    $this->articleRepository->saveArticle($post["title"], $post["content"], $relativePath);
                    return ['status' => 'success', 'message' => 'Article uploaded successfully'];
                }
                return ['status' => 'error', 'message' => 'Failed to upload file'];
            }
            return ['status' => 'error', 'message' => 'Invalid file type'];
        }
        return ['status' => 'error', 'message' => 'No file selected'];
    }

    public function getArticleById($id): ?array {
        return $this->articleRepository->fetchArticleById($id);
    }
    public function getAllArticles(): array {
        return $this->articleRepository->getAllArticles();
    }

    public function changeArticleStatus(int $articleId, bool $published): void {
        // Możesz tu dodać logikę biznesową, np. logowanie zmian, walidację itd.
        $this->articleRepository->updateArticleStatus($articleId, $published);
    }
}
