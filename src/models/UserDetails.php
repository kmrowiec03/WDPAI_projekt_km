<?php

class UserDetails {
    private $weight;
    private $height;
    private $dateOfBirth;
    private $bmi;
    private $bodyFatPercentage;
    private $muscleMassPercentage;
    private $activityLevel;
    private $goal;
    private $dietaryPreferences;
    private $medicalConditions;

    public function __construct($weight, $height, $dateOfBirth, $bmi, $bodyFatPercentage, $muscleMassPercentage, $activityLevel, $goal, $dietaryPreferences, $medicalConditions) {
        $this->weight = $weight;
        $this->height = $height;
        $this->dateOfBirth = $dateOfBirth;
        $this->bmi = $bmi;
        $this->bodyFatPercentage = $bodyFatPercentage;
        $this->muscleMassPercentage = $muscleMassPercentage;
        $this->activityLevel = $activityLevel;
        $this->goal = $goal;
        $this->dietaryPreferences = $dietaryPreferences;
        $this->medicalConditions = $medicalConditions;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    public function getBmi() {
        return $this->bmi;
    }

    public function getBodyFatPercentage() {
        return $this->bodyFatPercentage;
    }

    public function getMuscleMassPercentage() {
        return $this->muscleMassPercentage;
    }

    public function getActivityLevel() {
        return $this->activityLevel;
    }

    public function getGoal() {
        return $this->goal;
    }

    public function getDietaryPreferences() {
        return $this->dietaryPreferences;
    }

    public function getMedicalConditions() {
        return $this->medicalConditions;
    }
}
