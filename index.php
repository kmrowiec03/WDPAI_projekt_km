<?php
require_once 'src/controllers/AppController.php';

$path = $_SERVER['REQUEST_URI'];

$route = parse_url($path, PHP_URL_PATH);
$route = trim($route, '/'); 

//var_dump($route);

$controller = new AppController();

switch ($route) {

    case 'index':
        $controller->render('index');
        break;

    default:
        echo 'Page not found!';
        break;
}