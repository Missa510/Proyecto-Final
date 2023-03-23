<?php
    require_once("Conexion/conexion_base.php");
    class Administradores{

        private $Id_admin, $nom_admin, $pass_admin, $tipo_admin;

        public function __construct($dat1, $dat2, $dat3, $dat4){
            $this->Id_mod = $dat1;
            $this->nom_admin = $dat2;
            $this->pass_admin = $dat3;
            $this->tipo_admin = $dat4;
        }
        public function Mostrar(){
            $base = new BaseDeDatos();
            $conex_var = $base->conex();
            $resuls_admins = mysqli_query($conex_var, "SELECT * FROM Administradores");
            return $resuls_admins;
        }
    };

?>