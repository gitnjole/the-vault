<?php

use Core\Router;
use Core\Session;

const BASE_PATH = __DIR__ ."/../";

require BASE_PATH. 'Core/functions.php';
require_once base_path('vendor/autoload.php');

$config = require base_path('config.php');
if (isset($config['unpack'])) {
    foreach ($config['unpack'] as $string) {
        include base_path("../{$string}.php");
    }
}

Session::start();

require base_path("service.php");

$router = new Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

Session::forget();