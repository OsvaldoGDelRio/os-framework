<?php declare(strict_types=1);

session_start();

/*
ARCHIVOS DE CONFIGURACION CON LAS CONSTANTES DEFINIDAS
*/

require_once '../config.php';

/*
CARGAR LAS CLASES CON PSR-4
*/

require_once '../vendor/autoload.php';

/**
 * DECLARAR LAS CLASES  USAR
 */

use src\App;
use src\Factory;
use src\Middleware;
use src\contenedorId\Contenedor;

/**
 * INICIAR FACTORY
 */

$factory = new Factory();

/*
CREAR PETICION
*/

$peticion = $factory->crear('src\CrearPeticion', array(
    'url' => $_REQUEST
));

/*
INICIAR APP Y MIDDLEWARE
*/

$app = new App(new Middleware());
$contenedor = new Contenedor();

/*
CARGAR LOS MIDDLEWARE
*/

$app->add(array(
    $contenedor->obtener('app\librerias\controlador\MiddlewareControlador') //Carga el controlador
));

/*
EJECUTAR LA APP
 */

 $app->run($peticion);
