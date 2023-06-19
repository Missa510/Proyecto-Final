<?php

require_once("Modelo\log_sedes.php");
class SedesControl{
    public function Estado()
    {
        $sedes = new Sedes(null, null, null, null);
        $tabla = $sedes->Mostrar();

        require_once("vista\web\paginas\admin_components\sedes.php");
    }
}