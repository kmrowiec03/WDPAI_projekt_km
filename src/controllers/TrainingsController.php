<?php

require_once 'AppController.php';
require_once "src/services/TrainingService.php";
require_once 'src/services/ExerciseService.php';
require_once 'src/repository/TrainingPlanRepository.php';

class TrainingsController extends AppController {
    private TrainingService $trainingService;
    private ExerciseService $exerciseService;
    private TrainingPlanRepository $trainingPlanRepository;

    public function __construct() {
        parent::__construct();
        $this->trainingService = new TrainingService();
        $this->exerciseService = new ExerciseService();
        $this->trainingPlanRepository = new TrainingPlanRepository();
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


    public function generate_plan()
    {
        if (!isset($_SESSION['user'])) {
            $this->redirect('login');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bodyParts'])) {
            $bodyParts = $_POST['bodyParts'];
            $userId = $_SESSION['user']['id'];

            // Generate the plan using the ExerciseService
            $plan = $this->exerciseService->generateTrainingPlan($bodyParts, $userId);

            // Save the plan to the database
            $this->trainingPlanRepository->savePlan($plan);

            header('Location: /trainingPlans');
        }


    }

}
