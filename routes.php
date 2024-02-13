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
$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/attributions', 'controllers/attributions.php');

/**
 * Sample pages
 */
$router->get('/samples', 'controllers/samples/index.php');
$router->get('/sample', 'controllers/samples/show.php');
$router->get('/sample/edit', 'controllers/samples/edit.php')->access('auth');
$router->patch('/sample', 'controllers/samples/update.php');
/**
 * Login
 */
$router->get('/session', 'controllers/session/login.php')->access('guest');
$router->post('/session', 'controllers/session/store.php')->access('guest');