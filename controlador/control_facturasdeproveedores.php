<?php

require_once("Modelo\log_facturasdeproveedores.php");

class FacturasdeproveedoresControl{
    public function Estado()
    {
        $factucompras = new Facturasdeproveedores(null, null, null, null, null);
        $tabla = $factucompras->Mostrar();

        require_once("vista/web/paginas/admin_components/facturadeproveedores.php");
    }
}