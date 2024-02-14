<?php

/**
 * POST Route:
 * Handles the creation of a new resource.
 * 
 * GET Route:
 * Retrieves an existing resource or a collection of resources.
 * 
 * PUT Route:
 * Updates an existing resource entirely.
 * 
 * PATCH Route:
 * Modifies an existing resource partially.
 *
 * DELETE Route:
 * Deletes an existing resource. 
 */

/**
 * Navigation pages
 */
$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');
$router->get('/attributions', 'attributions.php');

/**
 * Sample pages
 */
$router->get('/samples', 'samples/index.php');
$router->get('/sample', 'samples/show.php');
$router->get('/sample/create', 'samples/create.php')->access('auth');
$router->post('/sample', 'samples/store.php');
$router->get('/sample/edit', 'samples/edit.php')->access('auth');
$router->patch('/sample', 'samples/update.php');
/**
 * Login
 */
$router->get('/login', 'session/login.php')->access('guest');
$router->post('/login', 'session/store.php')->access('guest');
$router->delete('/session', 'session/destroy.php')->access('auth');