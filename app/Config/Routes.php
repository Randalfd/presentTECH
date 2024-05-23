<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes -> group('adresses',function($routes){
  $routes->get('index','AdressesController::index');
});

$routes -> group('attendances',function($routes){
  $routes->get('index','AttendancesController::index');
});

$routes -> group(('cities'),function($routes){
  $routes->get('index','CitiesController::index');
});

$routes -> group('classrooms',function($routes){
  $routes->get('index','ClassroomsController::index');
}); 

$routes -> group('emergencyData',function($routes){
  $routes->get('index','EmergencyDataController::index');
}); 

$routes -> group('locations',function($routes){
  $routes->get('index','LocationsController::index');
});

$routes -> group('magnetickeys',function($routes){
  $routes->get('index','MagneticKeysController::index');
});

$routes -> group('rols',function($routes){
  $routes->get('index','RolsController::index');
});

$routes -> group('schools',function($routes){
  $routes->get('index','SchoolsController::index');
});

$routes -> group('usersclassrooms',function($routes){
  $routes->get('index','UsersClassroomsController::index');
});

$routes -> group('users',function($routes){
  $routes->get('index','UsersController::index');
});

<<<<<<< HEAD
$routes->get('/login', 'Home::homelogin');
$routes->get('/register','Home::homeregister');

=======
>>>>>>> bdfead396de462bd1d755058b6dbd06f0a45045c
$routes -> group('auth',function($routes){
  $routes->post('login','AuthController::login');
  $routes->post('register','AuthController::register');
});