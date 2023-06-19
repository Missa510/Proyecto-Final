<?php

require_once("Modelo\log_ciudades.php");
class CityControl
{
    public function Estado()
    {
        $ciudad = new Ciudades(null, null, null);
        $tabla = $ciudad->Mostrar();

        require_once("vista\web\paginas\admin_components\ciudades.php");
    }
}
