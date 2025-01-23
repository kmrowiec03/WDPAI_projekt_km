<?php

require_once 'src/models/Workout.php';
require_once 'src/models/Exercise.php';

class ExerciseService
{
    private const API_URL = 'https://exercisedb.p.rapidapi.com/exercises/bodyPart';
    private const API_HEADERS = [
        'X-RapidAPI-Key: e6cbdd0fa2msh9479e394d5bcdc0p181c86jsnc43466a4f935',
        'X-RapidAPI-Host: exercisedb.p.rapidapi.com'
    ];

    public function generateTrainingPlan(array $bodyParts, int $userId): TrainingPlan
    {
        $name = 'Custom Training Plan';
        $description = 'Generated plan for ' . implode(', ', $bodyParts);
        $workouts = [];

        foreach (range(1, 4) as $day) {
            $bodyPart = $bodyParts[array_rand($bodyParts)];
            $exercises = $this->fetchExercises($bodyPart);

            $workoutExercises = array_slice($exercises, 0, 4);

            $workout = new Workout(
                null, // ID ustawiamy na null, ponieważ to nowo tworzony obiekt
                "Workout Day $day", // Nazwa treningu
                "Training for $bodyPart", // Opis treningu
                $day, // Możesz użyć dynamicznego dnia tygodnia, np. "Monday"
                $day, // Numer tygodnia
                array_map(fn($exercise) => new Exercise(
                    null, // ID dla ćwiczenia
                    $exercise['name'],
                    4, // Liczba serii
                    10, // Liczba powtórzeń
                    90, // Czas odpoczynku w sekundach
                    null, // kgResult - brak danych na tym etapie
                    null // workoutId - brak danych na tym etapie
                ), $workoutExercises)
            );

            $workouts[] = $workout;
        }

        return new TrainingPlan($userId, $name, $description, $workouts);
    }

    private function fetchExercises(string $bodyPart): array
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => self::API_URL . '/' . $bodyPart,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => self::API_HEADERS
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return json_decode($response, true);
    }
}
