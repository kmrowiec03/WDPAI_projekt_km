<?php


class Workout {
    private ?int $id; // ID może być opcjonalne dla nowo tworzonych workoutów
    private string $name;
    private string $description;
    private int $dayOfWeek;
    private int $week;
    private array $exercises;

    public function __construct(
        ?int $id,
        string $name,
        string $description,
        int $dayOfWeek,
        int $week,
        array $exercises
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->dayOfWeek = $dayOfWeek;
        $this->week = $week;
        $this->exercises = $exercises;
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

    public function getDayOfWeek(): string {
        return $this->dayOfWeek;
    }

    public function getWeek(): int {
        return $this->week;
    }

    public function getTrainingPlanId(): int {
        return $this->trainingPlanId;
    }

    public function getExercises(): array {
        return $this->exercises;
    }
}

