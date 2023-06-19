<?php

require_once("BasesDeDatos/conexion.php");
Class Clientes{
    private $Id_cli, $dni_cli, $nom_cli, $ape_cli, $tel_cli, $direc_cli, $mail_cli, $fkcompras, $datos;

    public function __construct($id, $dni, $nombre, $apellido, $telefono, $direccion, $mail, $compras)
    {
        $this->Id_cli = $id;
        $this->dni_cli = $dni;
        $this->nom_cli = $nombre;
        $this->ape_cli = $apellido;
        $this->tel_cli = $telefono;
        $this->direc_cli = $direccion;
        $this->mail_cli = $mail;
        $this->fkcompras = $compras;
    }

    #Métodos get
    public function getId_cli()
    {
        return $this->Id_cli;
    }
    public function getDni_cli()
    {
        return $this->dni_cli;
    }
    public function getNom_cli()
    {
        return $this->nom_cli;
    }
    public function getApe_cli()
    {
        return $this->ape_cli;
    }
    public function getTel_cli()
    {
        return $this->tel_cli;
    }
    public function getDirec_cli()
    {
        return $this->direc_cli;
    }
    public function getMail_cli()
    {
        return $this->mail_cli;
    }
    public function getCompras()
    {
        return $this->fkcompras;
    }
    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatosGarochoa();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Clientes;";

        #Procesar la consulta de datos
        $resuls_clientes = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';   
        return $resuls_clientes;
    }
}