<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');

/**
 * ROUTES DE L'ACCUEIL
 */

 $routes->get('/ListeJeux', 'JeuCtrl::listeJeux');
 $routes->get('/ListeJoueurs', 'JoueurCtrl::listeJoueur');
 $routes->get('/LoginPage', 'LoginCtrl::loginPage' );
