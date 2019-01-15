<?php

$requestUri = trim($_SERVER['REQUEST_URI'], '/');

$routes = [
    ''      => 'controllers/home.php',
    'about' => 'controllers/about.php',
];

if (array_key_exists($requestUri, $routes)) {
    require $routes[$requestUri];
}
