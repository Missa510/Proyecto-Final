<?php

require_once("Conexion/conexion_base.php");
class Moderadores
{

    private $Id_mod, $nom_mod, $pass_mod, $mail_mod, $datos;

    public function __construct($id, $user, $passw, $mail)
    {
        $this->Id_mod = $id;
        $this->nom_mod = $user;
        $this->pass_mod = $passw;
        $this->mail_mod = $mail;
    }

    #Métodos gets
    public function getId_mod()
    {
        return $this->Id_mod;
    }
    public function getNom_mod()
    {
        return $this->nom_mod;
    }
    public function getPass_mod()
    {
        return $this->pass_mod;
    }
    public function getMail_mod()
    {
        return $this->mail_mod;
    }

    #Métodos sets
    public function setId_mod($id)
    {
        $this->Id_mod = $id;
    }
    public function setNom_mod($user)
    {
        $this->nom_mod = $user;
    }
    public function setPass_mod($passw)
    {
        $this->pass_mod = $passw;
    }
    public function setMail_mod($mail)
    {
        $this->mail_mod = $mail;
    }
    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatos();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Moderadores;";

        #Procesar la consulta de datos
        $resuls_mods = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';
        return $resuls_mods;
    }
    public function Insertar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatos();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Moderadores (nom_mod, pass_mod, mail_mod, tipo_mod) VALUES ('{$this->getNom_mod()}', '{$this->getPass_mod()}', '{$this->getMail_mod()}', 'Moderador');";

        #Procesar la consulta de datos
        $resuls_mods = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';
        return $resuls_mods;
    }
    public function LoginBuscar()
    {

        #Instanciar la conexión
        $base = new BaseDeDatos();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Moderadores WHERE nom_mod = '{$this->getNom_mod()}' AND pass_mod = '{$this->getPass_mod()}' AND tipo_mod = 'Moderador';";

        #Procesar la consulta de datos
        $resuls_mods = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';
        return $resuls_mods;
    }

    public function Buscar()
    {

        #Instanciar la conexión
        $base = new BaseDeDatos();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Moderadores WHERE id_mod = {$this->getId_mod()}";

        #Procesar la consulta de datos
        $resuls_admins = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';

        while ($registro = mysqli_fetch_array($resuls_admins)) {
            $this->datos[] = $registro;
        }

        return $this->datos;
    }

    public function Actualizar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatos();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "UPDATE Moderadores SET nom_mod = '{$this->getNom_mod()}', pass_mod = '{$this->getPass_mod()}', mail_mod = '{$this->getMail_mod()}' WHERE id_mod = {$this->getId_mod()};";


        #Procesar la consulta de datos
        $resuls_mods = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        return $resuls_mods;
    }
};
