<?php


class Exercise {
    private int $id;
    private string $name;
    private int $sets;
    private int $reps;
    private int $restTime;
    private float $kgResult;
    private int $workoutId;

    public function __construct(int $id, string $name, int $sets, int $reps, int $restTime, float $kgResult, int $workoutId) {
        $this->id = $id;
        $this->name = $name;
        $this->sets = $sets;
        $this->reps = $reps;
        $this->restTime = $restTime;
        $this->kgResult = $kgResult;
        $this->workoutId = $workoutId;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSets(): int {
        return $this->sets;
    }

    public function getReps(): int {
        return $this->reps;
    }

    public function getRestTime(): int {
        return $this->restTime;
    }

    public function getKgResult(): float {
        return $this->kgResult;
    }

    public function getWorkoutId(): int {
        return $this->workoutId;
    }
}
