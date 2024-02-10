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