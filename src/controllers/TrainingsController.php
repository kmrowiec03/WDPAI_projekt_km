<?php

require_once 'AppController.php';
require_once "src/services/TrainingService.php";

class TrainingsController extends AppController {
    private TrainingService $trainingService;

    public function __construct() {
        parent::__construct();
        $this->trainingService = new TrainingService();
    }

    public function trainings() {
        $userId = $_SESSION['user']['id'] ?? null;
        if (!$userId) {
            header('Location: /login');
            exit();
        }

        $plans = $this->trainingService->getTrainingPlansByUserId($userId);
        $this->render("trainingPlans", ['plans' => $plans]);
    }

    public function viewTrainingPlan($id) {
        $userId = $_SESSION['user']['id'] ?? null;
        if (!$userId) {
            header('Location: /login');
            exit();
        }

        $data = $this->trainingService->getTrainingPlanDetails($id, $userId);
        $this->render('trainingPlan', $data);
    }

    public function getExercises($workoutId) {
        $exercises = $this->trainingService->getExercisesByWorkoutId($workoutId);
        header('Content-Type: application/json');
        echo json_encode($exercises);
    }

    public function updateExerciseKgResult() {
        $response = $this->trainingService->updateExerciseKgResult(file_get_contents('php://input'));
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function markWorkoutAsCompleted($workoutId) {
        $response = $this->trainingService->toggleWorkoutCompletion($workoutId);
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
