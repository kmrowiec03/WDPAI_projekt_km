<?php


class TrainingPlan {
    private ?int $id;
    private int $userId;
    private string $name;
    private string $description;
    private array $workouts;

    public function __construct(int $userId, string $name, string $description, array $workouts = [], ?int $id = null)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->name = $name;
        $this->description = $description;
        $this->workouts = $workouts;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getWorkouts(): array
    {
        return $this->workouts;
    }
}
