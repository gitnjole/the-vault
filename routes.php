<?php

/**
 * Navigation pages
 */
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/attributions', 'controllers/attributions.php');

/**
 * Sample pages
 */
$router->get('/samples', 'controllers/samples/index.php');
$router->get('/sample', 'controllers/samples/show.php');

/**
 * Login
 */
$router->get('/login', 'controllers/login/show.php');
$router->post('/login', 'controllers/login/login.php');