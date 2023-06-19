<?php

require_once("BasesDeDatos\conexion.php");

class EPS
{
    private $id_eps, $eps, $datos;

    public function __construct($id, $EPS)
    {
        $this->id_eps = $id;
        $this->eps = $EPS;
    }

    public function getIdeps()
    {
        return $this->id_eps;
    }
    public function getEps()
    {
        return $this->eps;
    }

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM EPS;";

        #Procesar la consulta de datos
        $resuls_eps = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_eps;
    }
}
