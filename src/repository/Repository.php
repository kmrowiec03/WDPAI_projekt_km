<?php

require_once __DIR__ . '/../utils/DatabaseConnector.php';

class Repository {
    protected PDO $database;

    public function __construct() {
        $this->database = DatabaseConnector::getInstance()->connect();
    }
}