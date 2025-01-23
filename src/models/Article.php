<?php


class Article {
    private int $id;
    private string $title;
    private string $content;
    private string $imagePath;
    private bool $published;

    public function __construct(int $id, string $title, string $content, string $imagePath, bool $published) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->imagePath = $imagePath;
        $this->published = $published;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function getImagePath(): string {
        return $this->imagePath;
    }

    public function isPublished(): bool {
        return $this->published;
    }
}
