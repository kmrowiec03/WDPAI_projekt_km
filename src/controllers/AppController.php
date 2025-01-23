<?php

class AppController {
    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {

            session_start();
        }
    }

    protected function isGet(): bool {
        return $_SERVER['REQUEST_METHOD'] === 'GET';
    }

    protected function isPost(): bool {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    protected function render(string $template = null, array $variables = []) {
        $templatePath = 'public/views/' . $template . '.php';

        if (!file_exists($templatePath)) {
            http_response_code(404);
            die("Template not found: $template");
        }

        // Zabezpiecz zmienne widoku
        extract($variables, EXTR_SKIP);

        ob_start();
        include $templatePath;
        $output = ob_get_clean();

        print $output;
    }
}
