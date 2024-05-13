<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');

$routes->post('agregarUsuario', 'Login::agregarUsuario');
$routes->get('/', 'Login::index');$routes->post('validarIngreso', 'Login::validarIngreso');
$routes->get('escritorio', 'Dashboard::index');
$routes->get('cerrarSesion', 'Login::cerrarSesion');
$routes->get('crear', 'Imagenes::crear');
$routes->get('listar', 'Imagenes::index')
;$routes->get('crear', 'Imagenes::crear')
;$routes->post('guardar', 'Imagenes::guardar')
;$routes->get('eliminar/(:num)', 'Imagenes::eliminar/$1')
;$routes->get('editar/(:num)', 'Imagenes::editar/$1');
;$routes->post('actualizar', 'Imagenes::actualizar');