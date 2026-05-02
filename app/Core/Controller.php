<?php
namespace App\Core;

class Controller
{
    protected function view(string $template, array $data = []): void
    {
        extract($data);
        $view = dirname(__DIR__) . '/Views/' . $template . '.php';
        include dirname(__DIR__) . '/Views/layouts/main.php';
    }

    protected function json(array $data, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
