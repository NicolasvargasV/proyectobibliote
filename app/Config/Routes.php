<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/agregarGuia', 'Home::agregarGuia');
$routes->get('/agregarlibro', 'Home::agregarlibro');
$routes->get('/agregarControl', 'Home::agregarControl');
$routes->get('/GenerarUsuario', 'Home::GenerarUsuario');
$routes->get('borrarUsuarios/(:num)', 'Home::borrarUsuarios/$1');


/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/index2', 'index2::index',['filter' => 'authGuard']);
$routes->get('/Home/mostrarDato', 'Home::MostrarDato',['filter' => 'authGuard']);
$routes->get('/Home/agregar_guia', 'Home::agregar_guia',['filter' => 'authGuard']);
$routes->get('/Home/mostrar_guia', 'Home::mostrar_guia',['filter' => 'authGuard']);
$routes->get('/Home/insertaDato', 'Home::insertaDato',['filter' => 'authGuard']);
$routes->get('/Home/agregar_libro', 'Home::agregar_libro',['filter' => 'authGuard']);
$routes->get('/Home/mostrar_libro', 'Home::mostrar_libro',['filter' => 'authGuard']);
$routes->get('/Home/agregar_control', 'Home::agregar_control',['filter' => 'authGuard']);
$routes->get('/Home/mostrar_control', 'Home::mostrar_control',['filter' => 'authGuard']);
$routes->get('/Home/agregar_usuario', 'Home::agregar_usuario',['filter' => 'authGuard']);
$routes->get('/Home/ver_perfil', 'Home::ver_perfil',['filter' => 'authGuard']);


$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);

$routes->get('/', 'SendMail::index');
$routes->match(['get', 'post'], 'SendMail/sendMail', 'SendMail::sendMail');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
