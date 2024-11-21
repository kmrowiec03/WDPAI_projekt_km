<?php

require_once 'Routing.php';
require_once 'src/controllers/AppController.php';

$path = $_SERVER['REQUEST_URI'];

$route = parse_url($path, PHP_URL_PATH);
$route = trim($route, '/'); 

//var_dump($route);
Routing::run($route);
