<?php

require_once("Conexion/conexion_base.php");
class Usuarios
{

    private $Id_usu, $nom_usu, $pass_usu, $mail_usu;

    public function __construct($id, $user, $passw, $mail)
    {
        $this->Id_usu = $id;
        $this->nom_usu = $user;
        $this->pass_usu = $passw;
        $this->mail_usu = $mail;
    }

    #Métodos gets
    public function getId_usu()
    {
        return $this->Id_usu;
    }
    public function getNom_usu()
    {
        return $this->nom_usu;
    }
    public function getPass_usu()
    {
        return $this->pass_usu;
    }
    public function getMail_usu()
    {
        return $this->mail_usu;
    }

    #Métodos sets
    public function setId_usu($id)
    {
        $this->Id_usu = $id;
    }
    public function setNom_usu($user)
    {
        $this->nom_usu = $user;
    }
    public function setPass_usu($passw)
    {
        $this->pass_usu = $passw;
    }
    public function setMail_usu($mail)
    {
        $this->mail_usu = $mail;
    }
    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatos();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Usuario_Corriente;";

        #Procesar la consulta de datos
        $resuls_usus = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';
        return $resuls_usus;
    }
    public function Insertar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatos();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Usuario_Corriente (nom_usu, pass_usu, mail_usu, tipo_usu) VALUES ('{$this->getNom_usu()}', '{$this->getPass_usu()}', '{$this->getMail_usu()}', 'Usuario Corriente');";
        
        #Procesar la consulta de datos
        $resuls_usus = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';
        return $resuls_usus;
    }
    public function LoginBuscar(){
        
        #Instanciar la conexión
        $base = new BaseDeDatos();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Usuario_Corriente WHERE nom_usu = '{$this->getNom_usu()}' AND pass_usu = '{$this->getPass_usu()}' AND tipo_usu = 'Usuario Corriente';";

        #Procesar la consulta de datos
        $resuls_usus = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';
        return $resuls_usus;
    }
};
