<?php
    use function MongoDB\BSON\toRelaxedExtendedJSON;
    $name = $_POST['sus'];
    $pass = $_POST['pass'];
    $tipo = $_POST['tipo'];

    sleep(2);

    /* Para los admins */
    if($tipo == "Administrador"){
        $veri = "SELECT * FROM administradores WHERE nom_admin = '{$name}' 
        AND pass_admin = '{$pass}' AND tipo_admin = '{$tipo}'";

        $resul = mysqli_query($conexiones_base, $veri);   

        $rows = mysqli_num_rows($resul); // Pasar por cada fila

        

        if($rows){ // Si la cuenta existe
            include('EmpresaS&J/Structura/mensajito.php');
            include("EmpresaS&J/AdminSNJ.php");
        }else{ //Si no XD
            include("EmpresaS&J/Structura/error_login.php");
            include("EmpresaS&J/Empresa_login.php");
        }
    }

    /* Para los Mods */
    elseif($tipo == "Moderador"){
        $veri = "SELECT * FROM moderadores WHERE nom_mod = '{$name}' 
        AND pass_mod = '{$pass}' AND tipo_mod = '{$tipo}'";

        $resul = mysqli_query($conexiones_base, $veri);   

        $rows = mysqli_num_rows($resul); // Pasar por cada fila

        if($rows){ // Si la cuenta existe
            include('EmpresaS&J/Structura/mensajito.php');
            include("EmpresaS&J/ModerSNJ.php");
        }else{ //Si no XD
            include("EmpresaS&J/Structura/error_login.php");
            include("EmpresaS&J/Empresa_login.php");
        }
    }

    /* Para los usuarios */
    elseif($tipo == "Usuario Corriente"){
        $veri = "SELECT * FROM usuario_corriente WHERE nom_usu = '{$name}' 
        AND pass_usu = '{$pass}' AND tipo_usu = '{$tipo}'";

        $resul = mysqli_query($conexiones_base, $veri);   

        $rows = mysqli_num_rows($resul); // Pasar por cada fila


        if($rows){ // Si la cuenta existe
            include('EmpresaS&J/Structura/mensajito.php');
            include("EmpresaS&J/UsuNomSNJ.php");
        }else{ //Si no XD
            include("EmpresaS&J/Structura/error_login.php");
            include("EmpresaS&J/Empresa_login.php");
        }
    }


    echo '<p class = "fs-5">'.$veri.'</p>'; //ver si se insertó el código
?>