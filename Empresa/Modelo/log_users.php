<?php
    require_once("../Conexion/conexion_base.php");
    class Usuarios{
        private $Id_users, $nom_usu, $pass_usu, $tipo_usu;
        public function __construct($dat1, $dat2, $dat3, $dat4){
            $this->Id_users = $dat1;
            $this->nom_usu = $dat2;
            $this->pass_usu = $dat3;
            $this->tipo_usu = $dat4;
        }
        public function Validar(){
            $val = 0;
        }
    };

?>