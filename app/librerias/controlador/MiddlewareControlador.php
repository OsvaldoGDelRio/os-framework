<?php
namespace app\librerias\controlador;

use src\contenedorId\Contenedor;
use src\FactoryInterface;
use src\MiddlewareInterface;
use src\PeticionInterface;
use const CONTROLADOR_NAMESPACE;

class MiddlewareControlador implements MiddlewareInterface
{
    public function __construct(FactoryInterface $Factory)
    {
        $this->_factory = $Factory;
    }
    
    public function __invoke(PeticionInterface $peticion, callable $next)
    {
        $contenedor = new Contenedor();

        $controlador = $contenedor->obtener(CONTROLADOR_NAMESPACE.$peticion->controlador());

        call_user_func_array([$controlador,$peticion->metodo()], $peticion->parametros());
        
        return $next($peticion);
    }
}
