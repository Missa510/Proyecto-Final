<?php

    /**
     * Summary of Paginas
     */
    class Paginas{
        /**
         * Summary of principal
         * @return void
         */
        public function principal(){
            $title = ' | Home';
            include("Vista/Contenido/Empresa_init.php");
        }
        /**
         * Summary of mision
         * @return void
         */
        public function mision(){
            $title = ' | Mision';
            include("Vista/Contenido/Empresa_mision.php");
        }
        /**
         * Summary of vision
         * @return void
         */
        public function vision(){
            $title = ' | Vision';
            include("Vista/Contenido/Empresa_vision.php");
        }
        /**
         * Summary of login
         * @return void
         */
        public function login(){
            $title = ' | Login';
            include("Vista/Contenido/Empresa_login.php");
        }
        /**
         * Summary of cuentas
         * @return void
         */
        public function cuentas(){
            $title = ' | Cuentas';
            include("Vista/Contenido/cuentas.php");
        }
    };

?>