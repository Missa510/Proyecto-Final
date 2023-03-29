<?php
    include("Vista/Componentes/hd.php"); 
    include("Vista/Componentes/nav.php"); 
?>
<main>
    <div class="main-puro">
        <div class="container-fluid">
            <h1 class="display-1 text-center" id="titulo">Control de cuentas</h1>
            <p class="fs-5">
                Si tiene algún incoveniente con el registro de su cuenta, por favor comuníquese con nosotros. 
                <strong>Es importante que no de a conocer su contraseña antes, durante y después del proceso de login
                a ninguna entidad que no sea perteneciente a la empresa.</strong>
                <a href="mailto:sjqv05@gmail.com" target="_blank" class="link-cardeta">Correo de Santiago Quintero</a> o
                también <a href="mailto:ssandovalrobles207@gmail.com" target="_blank" class="link-cardeta">Correo de Sergio 
                Sandoval</a>
                
            </p>
            <h1 class="display-5 text-center">Usuarios admitidos (remover próximamente)</h1>
            <?php 
                include("Vista/Componentes/tabla_admin.php");
                include("Vista/Componentes/tabla_mod.php");
                include("Vista/Componentes/tabla_usu.php");
            ?>
        </div>
    </div>
</main>
<?php include("Vista/Componentes/foot.php"); ?>