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
 $routes->get('/LoginPage', 'LoginCtrl::loginPage');

 /*
  * LOGIN 
  */
$routes->post('/login', 'LoginCtrl::attemptLogin');
$routes->get('/login','LoginCtrl::loginPage');

/*
 * ADMIN
 */

 $routes->get('/admin/AdminPage', 'AdminCtrl::index');

/*
* JOUEURS
*/

 $routes->get('/joueur/JoueurPage','JoueurCtrl::index');



