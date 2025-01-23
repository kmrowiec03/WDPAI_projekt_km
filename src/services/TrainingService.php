<?php


require_once __DIR__ . '/../repository/TrainingPlanRepository.php';
require_once __DIR__ . '/../repository/WorkoutRepository.php';


class TrainingService {
    private TrainingPlanRepository $trainingPlanRepository;
    private WorkoutRepository $workoutRepository;

    public function __construct() {
        $this->trainingPlanRepository = new TrainingPlanRepository();
        $this->workoutRepository = new WorkoutRepository();
    }

    public function getTrainingPlansByUserId($userId): array {
        return $this->trainingPlanRepository->fetchTrainingPlansByUserId($userId);
    }

    public function getTrainingPlanDetails($planId, $userId): array {
        $workouts = $this->workoutRepository->fetchWorkoutsByTrainingPlanId($planId);
        $completedWorkouts = $this->workoutRepository->fetchCompletedWorkoutsByUserId($userId, date('Y-m-d'));
        return ['workouts' => $workouts, 'completedWorkouts' => $completedWorkouts];
    }

    public function getExercisesByWorkoutId($workoutId): array {
        return $this->workoutRepository->fetchExercisesByWorkoutId($workoutId);
    }

    public function updateExerciseKgResult($input): array {
        $data = json_decode($input, true);
        if (!isset($data['exerciseId'], $data['kgResult'])) {
            return ['error' => 'Invalid input'];
        }
        $result = $this->workoutRepository->updateExerciseKgResult($data['exerciseId'], $data['kgResult']);
        return $result ? ['success' => true] : ['error' => 'Failed to update'];
    }

    public function toggleWorkoutCompletion($workoutId): array {
        return $this->workoutRepository->toggleWorkoutCompletion($_SESSION['user']['id'], $workoutId);
    }
}
