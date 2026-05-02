<?php
require dirname(__DIR__) . '/vendor/autoload.php';
$config = require dirname(__DIR__) . '/config/config.php';
session_name($config['session_name']);
session_start();
$router = new App\Core\Router();
(require dirname(__DIR__) . '/routes/web.php')($router);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/';
$router->dispatch($_SERVER['REQUEST_METHOD'], $uri);
