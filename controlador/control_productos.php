<?php

require_once("Modelo\log_".$control.".php");
class ProductosControl{
    public function Estado()
    {
        $produc = new Productos(null, null, null, null);
        $tabla = $produc->Mostrar();

        require_once("vista\web\paginas\admin_components\productos.php");
    }
}