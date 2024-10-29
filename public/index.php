<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ExampleController;
use MVC\Router;

$router = new Router();

/* Usuario */
//Inicio de Sesion -- Login / logout
// $router->get('/', [LoginController::class, 'login']);
// $router->post('/', [LoginController::class, 'login']);
// $router->get('/logout', [LoginController::class, 'logout']);

// //Recuperar password
// $router->get('/olvide', [LoginController::class, 'olvide']);
// $router->post('/olvide', [LoginController::class, 'olvide']);
// $router->get('/recuperar', [LoginController::class, 'recuperar']);
// $router->post('/recuperar', [LoginController::class, 'recuperar']);

$router->get('/', [ExampleController::class, 'example']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();