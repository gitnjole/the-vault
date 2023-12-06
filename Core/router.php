<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/samples' => 'controllers/samples/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/attributions' => 'controllers/attributions.php'
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}
else abort(404);