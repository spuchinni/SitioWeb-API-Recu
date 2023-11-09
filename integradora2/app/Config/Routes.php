<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');


//Rutas del Registro de Usuario
$routes->get('registro','usuario_controller::create');
$routes->post('enviar-form', 'usuario_controller::formValidation');

//Rutas para el Ingreso del Usuario
$routes->get('login','login_controller::index');
$routes->post('enviar-login','login_controller::auth');
$routes->get('panel','panel_controller',['filter' => 'auth']);
$routes->get('logout','login_controller::logout');

