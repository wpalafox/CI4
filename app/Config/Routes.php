<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->setAutoRoute(true);

//$routes->post('consent/validate', 'ConsentController::consent_validation');

