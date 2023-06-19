<?php

require_once("Modelo\log_existenciasdeproductos.php");
class ExistenciadeproductosControl{
    public function Estado()
    {
        $exist = new Existenciadeproductos(null, null, null, null, null);
        $tabla = $exist->Mostrar();

        require_once("vista/web/paginas/admin_components/existencias.php");
    }
}