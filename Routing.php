<?php
require_once 'src/controllers/DashboardController.php';
require_once 'src/controllers/SecurityController.php';

class Routing{
    private static array $routes = [
        'dashboard' => ['controller' => 'DashboardController', 'action' => 'dashboard'],
        'login' => ['controller' => 'SecurityController', 'action' => 'login'],
        'register' => ['controller' => 'SecurityController', 'action' => 'register']
    ];

    public static function run($url)
    {
        // Rozbijamy URL, aby uzyskać pierwszą część jako akcję
        $action = explode("/", $url)[0] ?: 'login'; // Domyślnie 'login'

        // Sprawdzamy, czy akcja istnieje w tablicy $routes
        if (!array_key_exists($action, self::$routes)) {
            self::error404(); // Funkcja obsługująca błąd 404
            return;
        }

        // Pobieramy kontroler i akcję
        $controllerName = self::$routes[$action]['controller'];
        $actionName = self::$routes[$action]['action'];

        // Tworzymy obiekt kontrolera i wywołujemy metodę
        $controller = new $controllerName();
        $controller->$actionName();
    }

    private static function error404()
    {
        http_response_code(404);
        include 'public/views/errors/404.php';
    }
}