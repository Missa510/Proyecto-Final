<?php

require_once("Modelo\log_facturasdeclientes.php");

class FacturasdeclientesControl{
    public function Estado()
    {
        $factuclientes = new Facturasdeclientes(null, null, null, null, null, null, null, null);
        $tabla = $factuclientes->Mostrar();

        require_once("vista/web/paginas/admin_components/facturasdeclientes.php");
    }
}