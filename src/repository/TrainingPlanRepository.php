<?php

require_once 'Repository.php';
require_once 'src/models/TrainingPlan.php';

class TrainingPlanRepository extends Repository{


    public function fetchTrainingPlansByUserId($userId): array {
        $stmt = $this->database->connect()->prepare(
            'SELECT id, name, description FROM training_plans WHERE user_id = ?'
        );
        $stmt->execute([$userId]);

        // Zamiast zwracać tablicę asocjacyjną, twórz obiekty klasy TrainingPlan
        $plans = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $plans[] = new TrainingPlan($row['id'], $row['name'], $row['description'],$userId);
        }
        return $plans;
    }

}
