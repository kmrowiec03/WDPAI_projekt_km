<?php

require_once 'AppController.php';
require_once __DIR__ . '/../../DatabaseConector.php';
class DashboardController extends AppController{

    public function dashboard(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $connector = new DatabaseConnector();
        $stmt = $connector->connect()->prepare('SELECT * FROM public.users');
        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->render("dashboard", ['name' => "Adrian", "users" => $users]);
    }
}