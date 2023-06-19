<?php

require_once("Modelo\log_cargos.php");

class CargosControl
{
    public function Estado()
    {
        $cargo = new Cargos(null, null, null, null);
        $tabla = $cargo->Mostrar();

        require_once("vista\web\paginas\admin_components\cargos.php");
    }
}
