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
    public function Agregar(){
        $cargo = $_POST['cargo'];
        $sueldo = $_POST['sueldo'];
        $descripcion = $_POST['descripcion'];

        $parametersText = "/^[A-Za-z0-9]/i";

        if ( preg_match($parametersText, $cargo) and preg_match($parametersText, $descripcion)) {
            # code...
            
        } else {
        }
        $this->Estado();
    }
}
