<?php


class WorkoutRepository extends Repository{

    public function fetchWorkoutsByTrainingPlanId($trainingPlanId): array {
        $stmt = $this->database->prepare(
            'SELECT id, name, description, day_of_week, week FROM workouts WHERE training_plan_id = ?'
        );
        $stmt->execute([$trainingPlanId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchCompletedWorkoutsByUserId($userId, $date): array {
        $stmt = $this->database->prepare(
            'SELECT workout_id FROM completed_workouts WHERE user_id = ? AND date = ?'
        );
        $stmt->execute([$userId, $date]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchExercisesByWorkoutId($workoutId): array {
        $stmt = $this->database->prepare(
            'SELECT id, name, sets, reps, rest_time, kg_result FROM exercises WHERE workout_id = ?'
        );
        $stmt->execute([$workoutId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateExerciseKgResult($exerciseId, $kgResult): bool {
        $stmt = $this->database->prepare(
            'UPDATE exercises SET kg_result = ? WHERE id = ?'
        );
        return $stmt->execute([$kgResult, $exerciseId]);
    }

    public function toggleWorkoutCompletion($userId, $workoutId): array {
        $date = date('Y-m-d');

        // Sprawdź, czy trening już jest ukończony
        $stmt = $this->database->prepare(
            'SELECT * FROM completed_workouts WHERE user_id = ? AND workout_id = ?'
        );
        $stmt->execute([$userId, $workoutId]);
        $completedWorkout = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($completedWorkout) {
            // Usuń ukończony trening
            $stmt = $this->database->prepare(
                'DELETE FROM completed_workouts WHERE id = ?'
            );
            $stmt->execute([$completedWorkout['id']]);
            return ['success' => true, 'message' => 'Workout removed from completed'];
        } else {
            // Dodaj nowy ukończony trening
            $stmt = $this->database->prepare(
                'INSERT INTO completed_workouts (user_id, workout_id, date) VALUES (?, ?, ?)'
            );
            $stmt->execute([$userId, $workoutId, $date]);
            return ['success' => true, 'message' => 'Workout marked as completed'];
        }
    }
}
