<?php

require_once("BasesDeDatos/conexion.php");
class Sedes
{
    private $Id_sed, $nom_sed, $direc_sed, $fkciudad, $datos;

    public function __construct($id, $nombre, $direccion, $ciudad)
    {
        $this->Id_sed = $id;
        $this->nom_sed = $nombre;
        $this->direc_sed = $direccion;
        $this->fkciudad = $ciudad;
    }

    # Métodos get
    public function getId_sed()
    {
        return $this->Id_sed;
    }
    public function getNom_sed()
    {
        return $this->nom_sed;
    }
    public function getDirec_sed()
    {
        return $this->direc_sed;
    }
    public function getCiudad()
    {
        return $this->fkciudad;
    }


    # Métodos set

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT sed.id_sede, sed.nom_sed, sed.direc_sed, ciu.nom_ciu FROM Sedes as sed, Ciudades as ciu WHERE sed.fkciudad = ciu.id_ciu;";

        #Procesar la consulta de datos
        $resuls_sedes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_sedes;
    }
}
