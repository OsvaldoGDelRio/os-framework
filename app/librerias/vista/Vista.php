<?php declare(strict_types=1);

namespace app\librerias\vista;

use app\librerias\vista\UtilidadesParaVistas;

use const VISTAS_DIR;

class Vista extends UtilidadesParaVistas
{
    private $_datos;

    public function ver(array $array, $datos = []): void
    {
        $vistas = count($array);
        $x = 0;

        foreach ($array as $value) {
            if ($this->laVistaExiste($value)) {
                $x++;
            }
        }

        if ($x == $vistas) {
            $this->_datos = (object) $datos;
            $this->requerirTodasLasVistas($array);
        }
    }

    private function laVistaExiste(string $vista): bool
    {
        return file_exists(VISTAS_DIR.$vista.'.php');
    }

    private function requerirTodasLasVistas(array $array): void
    {
        foreach ($array as $vista) {
            require_once VISTAS_DIR. $vista.'.php';
        }
    }
}
