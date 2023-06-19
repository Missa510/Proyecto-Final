<?php

require_once("BasesDeDatos/conexion.php");

class Proveedores
{
    private $Id_prov, $nom_prov, $tel_prov, $mail_prov, $direc_prov, $datos;

    public function __construct($id, $proovedores, $telefonos, $mail, $direccion)
    {
        $this->Id_prov = $id;
        $this->nom_prov = $proovedores;
        $this->tel_prov = $telefonos;
        $this->mail_prov = $mail;
        $this->direc_prov = $direccion;
    }

    #Métodos get
    public function getId_prov()
    {
        return $this->Id_prov;
    }
    public function getNom_prov()
    {
        return $this->nom_prov;
    }
    public function getTel_prov()
    {
        return $this->tel_prov;
    }
    public function getMail_prov()
    {
        return $this->mail_prov;
    }
    public function getDirec_prov()
    {
        return $this->direc_prov;
    }

    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Proveedores;";

        #Procesar la consulta de datos
        $resuls_proveedores = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_proveedores;
    }
}
