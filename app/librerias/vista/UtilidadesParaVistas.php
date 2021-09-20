<?php
namespace app\librerias\vista;

use src\token\CrearToken;

class UtilidadesParaVistas
{
    public function minusculas(string $string): string
    {
        return strtolower(htmlentities($string));
    }

    public function token(): string
    {
        $token = new CrearToken();
        return $token->obtener();
    }
}
