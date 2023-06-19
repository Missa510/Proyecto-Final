<?php

require_once("Modelo\log_empleados.php");

class EmpleadosControl
{
    public function Estado()
    {
        $empleado = new Empleados(null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $tabla = $empleado->Mostrar();

        require_once("vista/web/paginas/admin_components/empleados.php");
    }
}