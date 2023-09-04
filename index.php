<?php
// index.php

require_once 'vendor/autoload.php';
require_once 'src/config/Config.php';
require_once 'src/config/Database.php';

use App\Controllers\HomeController;
use App\Controllers\LoginController;

// Obtener la URL solicitada
$requestUrl = $_GET['url'] ?? '/';

// Definir rutas y controladores correspondientes
$routes = [
    '/' => HomeController::class,
    'home' => HomeController::class,
    'login' => LoginController::class,
    // Agrega aquí más rutas según tus necesidades
];

// Verificar si la ruta existe en la matriz de rutas
if (array_key_exists($requestUrl, $routes)) {
    $controller = new $routes[$requestUrl]();
    $controller->handle();
} else {
    // Manejar error 404 si la ruta no se encuentra
    http_response_code(404);
    echo 'Error 404: Página no encontrada.';
}
