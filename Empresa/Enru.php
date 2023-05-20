<?php
// // Conection with the database

//Navegación desde cero
if (isset($_GET["control"]) and isset($_GET["funcion"])) {
    $control = $_GET["control"];
    $funcion = $_GET["funcion"];
    Navegacion($control, $funcion, true);
} else {
    $control = "navegacion";
    $funcion = 'principal';
    Navegacion($control, $funcion, false);
}
function Navegacion($control, $funcion, $val)
{
    if ($val == true) {
        if (!file_exists("Controlador/control_" . $control . ".php")) {
            require_once('Vista\Componentes\Errores\error_404.php');
            exit();
        }
    }

    require_once("Controlador/control_" . $control . ".php");

    switch ($control) {
        case 'navegacion':
            $control = new Paginas();
            break;

        case 'login':
            $control = new Login();
            break;

        case 'registro':
            $control = new Register();
            break;

        case 'modificar':
            $control = new Modify();
            break;

        case 'eliminar':
            $control = new Eliminar();
            break;

    }
    $control->{$funcion}();
}