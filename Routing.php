<?php
require_once 'src/controllers/DashboardController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/ProfileController.php';
require_once 'src/controllers/TrainingsController.php';
require_once 'src/controllers/ArticleController.php';

class Routing{
    private static array $routes = [
        'dashboard' => ['controller' => 'DashboardController', 'action' => 'dashboard'],
        'login' => ['controller' => 'SecurityController', 'action' => 'login'],
        'register' => ['controller' => 'SecurityController', 'action' => 'register'],
        'profile' => ['controller' => 'ProfileController', 'action' => 'profile'],
        'logout' => ['controller' => 'SecurityController', 'action' => 'logout'],
        'trainingPlans' => ['controller' => 'TrainingsController', 'action' => 'trainings'],
        'add_article' => ['controller' => 'ArticleController', 'action' => 'uploadArticle'],
        'articles/{id}' => ['controller' => 'ArticleController', 'action' => 'viewArticle'],
        'articles' => ['controller' => 'ArticleController', 'action' => 'articles'],
        'trainingPlans/{id}' => ['controller' => 'TrainingsController', 'action' => 'viewTrainingPlan'],
        'getExercises/{id}' => ['controller' => 'TrainingsController', 'action' => 'getExercises'],
        'updateExerciseKgResult' => ['controller' => 'TrainingsController', 'action' => 'updateExerciseKgResult'],
        'markWorkoutAsCompleted' => ['controller' => 'TrainingsController', 'action' => 'markWorkoutAsCompleted'],
        'generate_plan' => ['controller' => 'TrainingsController', 'action' => 'generate_plan'],
        'updateArticleStatus' => ['controller' => 'ArticleController', 'action' => 'updateArticleStatus']
    ];

    public static function run($url) {

        $parts = explode("/", $url);
        $action = $parts[0] ?: 'dashboard';
        $params = array_slice($parts, 1);


        if (preg_match('/^trainingPlans\/(\d+)$/', $url, $matches)) {
            $id = $matches[1];
            $controllerName = self::$routes['trainingPlans/{id}']['controller'];
            $actionName = self::$routes['trainingPlans/{id}']['action'];

            $controller = new $controllerName();
            $controller->$actionName($id);
        }
        elseif (preg_match('/^articles\/(\d+)$/', $url, $matches)) {
            $id = $matches[1];
            $controllerName = self::$routes['articles/{id}']['controller'];
            $actionName = self::$routes['articles/{id}']['action'];

            $controller = new $controllerName();
            $controller->$actionName($id);
        }
        elseif (preg_match('/^getExercises\/(\d+)$/', $url, $matches)) {
            $id = $matches[1];
            $controllerName = self::$routes['getExercises/{id}']['controller'];
            $actionName = self::$routes['getExercises/{id}']['action'];

            $controller = new $controllerName();
            $controller->$actionName($id);
        }
        elseif (preg_match('/^markWorkoutAsCompleted\/(\d+)$/', $url, $matches)) {
            $workoutId = $matches[1]; // Przechwycenie workoutId z URL
            $controllerName = self::$routes['markWorkoutAsCompleted']['controller'];
            $actionName = self::$routes['markWorkoutAsCompleted']['action'];

            $controller = new $controllerName();
            $controller->$actionName($workoutId);
        } else {

            $controllerName = self::$routes[$action]['controller'];
            $actionName = self::$routes[$action]['action'];

            $controller = new $controllerName();
            $controller->$actionName();
        }
    }

    private static function error404()
    {
        http_response_code(404);
        include 'public/views/errors/404.php';
    }
}