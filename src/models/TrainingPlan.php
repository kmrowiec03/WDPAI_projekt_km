<?php


class TrainingPlan {
    private int $id;
    private string $name;
    private string $description;
    private int $userId;

    public function __construct(int $id, string $name, string $description, int $userId) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->userId = $userId;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getUserId(): int {
        return $this->userId;
    }
}
