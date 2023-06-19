<?php

require_once ("Modelo\log_proveedores.php");

class ProveedoresControl{
    public function Estado()
    {
        $proveedores = new Proveedores(null, null, null, null, null);
        $tabla = $proveedores->Mostrar();

        require_once("vista\web\paginas\admin_components\proveedores.php");
    }
}