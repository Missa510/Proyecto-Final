<?php

require_once("Modelo\log_clientes.php");
class ClientesControl
{
    public function Estado()
    {
        $cliente = new Clientes(null, null, null, null, null, null, null, null);
        $tabla = $cliente->Mostrar();

        require_once("vista\web\paginas\admin_components\clientes.php");
    }
}
