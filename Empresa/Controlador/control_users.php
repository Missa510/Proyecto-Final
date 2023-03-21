<?php
    require_once("Modelo/log_useres.php");

    $mostrar = new Usuarios(NULL, NULL, NULL, NULL);
    $mostrar_var = $mostrar->Mostrar();
?>