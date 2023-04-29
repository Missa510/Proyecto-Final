<?php
require_once("Conexion/conexion_base.php");
class Administradores
{

    private $Id_admin, $nom_admin, $pass_admin, $mail_admin;

    public function __construct($id, $user, $passw, $mail)
    {
        $this->Id_admin = $id;
        $this->nom_admin = $user;
        $this->pass_admin = $passw;
        $this->mail_admin = $mail;
    }

    #Métodos gets
    public function getId_admin()
    {
        return $this->Id_admin;
    }
    public function getNom_admin()
    {
        return $this->nom_admin;
    }
    public function getPass_admin()
    {
        return $this->pass_admin;
    }
    public function getMail_admin()
    {
        return $this->mail_admin;
    }

    #Métodos sets
    public function setId_admin($id)
    {
        $this->Id_admin = $id;
    }
    public function setNom_admin($user)
    {
        $this->nom_admin = $user;
    }
    public function setPass_admin($passw)
    {
        $this->pass_admin = $passw;
    }
    public function setMail_admin($mail)
    {
        $this->mail_admin = $mail;
    }
    public function Mostrar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatos();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Administradores;";

        #Procesar la consulta de datos
        $resuls_admins = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';
        return $resuls_admins;
    }
    public function Insertar()
    {
        #Instanciar la conexión
        $base = new BaseDeDatos();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "INSERT INTO Administradores (nom_admin, pass_admin, mail_admin, tipo_admin) VALUES ('{$this->getNom_admin()}', '{$this->getPass_admin()}', '{$this->getMail_admin()}', 'Administrador');";

        #Procesar la consulta de datos
        $resuls_admins = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';
        return $resuls_admins;
    }
    public function LoginBuscar(){
        
        #Instanciar la conexión
        $base = new BaseDeDatos();

        #llamar a la base de datos
        $conex_var = $base->conex();

        #Generar la consulta de datos
        $sql = "SELECT * FROM Administradores WHERE nom_admin = '{$this->getNom_admin()}' AND pass_admin = '{$this->getPass_admin()}' AND tipo_admin = 'Administrador';";

        #Procesar la consulta de datos
        $resuls_admins = mysqli_query($conex_var, $sql);

        #Retornar el valor de la consulta
        #echo '<p class="fs-5">'.$sql.'</p>';
        return $resuls_admins;
    }

    public function Actualizar(){
         #Instanciar la conexión
         $base = new BaseDeDatos();

         #llamar a la base de datos
         $conex_var = $base->conex();
 
         #Generar la consulta de datos
         $sql = "UPDATE Administradores SET nom_admin = '{$this->getNom_admin()}', pass_admin = {$this->getPass_admin()}, mail_admin = {$this->getMail_admin()} WHERE id_admin = {$this->getId_admin()};";
 
         #Procesar la consulta de datos
         $resuls_admins = mysqli_query($conex_var, $sql);
 
         #Retornar el valor de la consulta
         #echo '<p class="fs-5">'.$sql.'</p>';
         return $resuls_admins;
    }
    
};
