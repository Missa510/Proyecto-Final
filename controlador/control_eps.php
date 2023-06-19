<?php

require_once("Modelo\log_eps.php");

class EPSControl
{
    public function Estado()
    {
        $eps = new EPS(null, null);
        $tabla = $eps->Mostrar();

        require_once("vista/web/paginas/admin_components/eps.php");
    }
}
