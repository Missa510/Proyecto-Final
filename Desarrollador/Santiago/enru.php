<?php
    $nave = "home";
    if(!isset($_GET['nave']) or $_GET['nave'] == 'home'){ 
        include('Contenidos/contenido_prin.php'); 
    }
    else{
        if($_GET['nave'] == "misiones"){
            include('Contenidos/mision.php');
        }
        if($_GET['nave'] == "visiones"){
            include('Contenidos/vision.php');
        }
        if($_GET['nave'] == "biografias"){
            include('Contenidos/biografia.php');
        }
        if($_GET['nave'] == "habilidades"){
            include('Contenidos/Habilidades.php');
        }
    }
?>