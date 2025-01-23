<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Punkt wejścia aplikacji
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


require_once 'Routing.php';
require_once 'src/controllers/AppController.php';

$path = $_SERVER['REQUEST_URI'];

$route = parse_url($path, PHP_URL_PATH);
$route = trim($route, '/'); 

//var_dump($route);
Routing::run($route);
