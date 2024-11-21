<?php
require_once 'src/controllers/DashboardController.php';
require_once 'src/controllers/SecurityController.php';

class Routing{
    public static function run ($url) {
        $action = explode("/", $url)[0];
        
        $controller =null;

        //if (!array_key_exists($action, self::$routes)) {
        //  die("Wrong url!"); // zwrocic strone 404
        //}
        

        switch ($action) {

            case 'dashboard':
                $controller = "DashboardController";
                $action="dashboard";
                break;

            default:
                $controller = "SecurityController";
                $action="login";
                break;
        }


        //$controller = self::$routes[$action];
        $object = new $controller;


        $action = $action ?: 'index';
        $object->$action();
      }
}