<?php

require_once 'Repository.php';
require_once 'src/models/TrainingPlan.php';

class TrainingPlanRepository extends Repository{


    public function fetchTrainingPlansByUserId(int $userId): array
    {
        $stmt = $this->database->prepare(
            'SELECT id, name, description FROM training_plans WHERE user_id = ?'
        );
        $stmt->execute([$userId]);

        // Tworzenie obiektów klasy TrainingPlan
        $plans = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $plans[] = new TrainingPlan(
                $userId,                   // userId
                $row['name'],              // name
                $row['description'],       // description
                [],                        // workouts (domyślnie pusta tablica)
                $row['id']                 // id (opcjonalne)
            );
        }

        return $plans;
    }
    public function savePlan(TrainingPlan $plan): void {
        $query = 'INSERT INTO training_plans (user_id, name, description) VALUES (:user_id, :name, :description)';
        $statement = $this->database->prepare($query);
        $userId = $plan->getUserId();
        $statement->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $name = $plan->getName();
        $statement->bindParam(':name', $name, PDO::PARAM_STR);
        $description = $plan->getDescription();
        $statement->bindParam(':description', $description, PDO::PARAM_STR);
        $statement->execute();

        $planId = $this->database->lastInsertId();
        foreach ($plan->getWorkouts() as $workout) {
            $this->saveWorkout($planId, $workout);
        }
    }
    private function saveWorkout(int $planId, Workout $workout): void
    {
        $query = 'INSERT INTO workouts (training_plan_id, name, description, day_of_week, week) VALUES (:training_plan_id, :name, :description, :day_of_week, :week)';
        $statement = $this->database->prepare($query);
        $statement->bindParam(':training_plan_id', $planId, PDO::PARAM_INT);
        $name = $workout->getName();
        $statement->bindParam(':name', $name, PDO::PARAM_STR);
        $description = $workout->getDescription();
        $statement->bindParam(':description', $description, PDO::PARAM_STR);
        $dayOfWeek = $workout->getDayOfWeek();
        $statement->bindParam(':day_of_week', $dayOfWeek, PDO::PARAM_INT);
        $week = $workout->getWeek();
        $statement->bindParam(':week', $week, PDO::PARAM_INT);
        $statement->execute();

        $workoutId = $this->database->lastInsertId();
        foreach ($workout->getExercises() as $exercise) {
            $this->saveExercise($workoutId, $exercise);
        }
    }
    private function saveExercise(int $workoutId, Exercise $exercise): void
    {
        $query = 'INSERT INTO exercises (workout_id, name, sets, reps, rest_time) VALUES (:workout_id, :name, :sets, :reps, :rest_time)';
        $statement = $this->database->prepare($query);
        $statement->bindParam(':workout_id', $workoutId, PDO::PARAM_INT);
        $name = $exercise->getName();
        $statement->bindParam(':name', $name, PDO::PARAM_STR);
        $sets = $exercise->getSets();
        $statement->bindParam(':sets', $sets, PDO::PARAM_INT);
        $reps = $exercise->getReps();
        $statement->bindParam(':reps', $reps, PDO::PARAM_INT);
        $restTime = $exercise->getRestTime();
        $statement->bindParam(':rest_time', $restTime, PDO::PARAM_INT);
        $statement->execute();
    }

}
