<?php


class Workout {
    private int $id;
    private string $name;
    private string $description;
    private string $dayOfWeek;
    private int $week;
    private int $trainingPlanId;

    public function __construct(int $id, string $name, string $description, string $dayOfWeek, int $week, int $trainingPlanId) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->dayOfWeek = $dayOfWeek;
        $this->week = $week;
        $this->trainingPlanId = $trainingPlanId;
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
}

