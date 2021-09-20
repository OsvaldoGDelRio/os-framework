<?php declare(strict_types=1);

/*
DIRECTORIOS
*/
define('ROOT_DIR', __DIR__);
define('CONTROLADOR_DIR', ROOT_DIR.'/app/controladores/');
define('VISTAS_DIR', ROOT_DIR.'/app/vistas/');

/*
CONTROLADORES
*/
define('CONTROLADOR_NAMESPACE', '\\app\\controladores\\');
define('CONTROLADOR_POR_DEFECTO', 'Login');

/*
METODOS
*/
define('METODO_POR_DEFECTO', 'index');

/*
SESION CON TOKEN
*/
define('NOMBRE_SESION_TOKEN', '8?0/&%$3ErTSDAFGH8HJJed#2Zxs@!1#FER');

/*
BASE DE DATOS
*/
define('DB_HOST', '127.0.0.1');
define('DB_DATABASE', 'test');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');


/*
SESION
*/
define('SESSION_ID', 'ahau3333hauhsuhs');
define('SESSION_CREACION', 'duiehiuwhuih3333wu');
define('SESSION_CADUCIDAD', 'idjeifiefiehiih4i4i5i5hh');
define('CADUCIDAD_DE_SESION', 3600);

/*
PERMISOS POR ROL
*/
define('PERMISOS_POR_ROL',[
    'admin' => [
        'Inicio',
        'Login'
    ]
]);    