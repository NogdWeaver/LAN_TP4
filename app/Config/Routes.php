<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');

/**
 * ROUTES DE L'ACCUEIL
 */

 $routes->get('/listeJeux', 'jeuCtrl::listejeux');
