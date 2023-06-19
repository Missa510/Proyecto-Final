<?php

require_once("BasesDeDatos/conexion.php");
class Ciudades
{
    private $Id_ciu, $nom_ciu, $capital_ciudades, $datos;

    public function __construct($id, $nombre, $capital)
    {
        $this->Id_ciu = $id;
        $this->nom_ciu = $nombre;
        $this->capital_ciudades = $capital;
    }

    # Métodos get
    public function getId_ciu()
    {
        return $this->Id_ciu;
    }
    public function getNom_ciu()
    {
        return $this->nom_ciu;
    }
    public function getCapital()
    {
        return $this->capital_ciudades;
    }

    # Métodos set

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Ciudades;";

        #Procesar la consulta de datos
        $resuls_ciudades = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_ciudades;
    }
}
