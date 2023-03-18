<?php 
    // $consul_admin = "SELECT * FROM Administradores"; 
    // $consul_mod = "SELECT * FROM Moderadores"; 
    // $consul_usu = "SELECT * FROM Usuario_Corriente"; 
    include("Vista/Componentes/hd.php"); 
    include("Vista/Componentes/nav.php"); 
?>
<div class="main-puro">
    <div class="container-fluid">
        <h1 class="display-1 text-center">Control de cuentas</h1>
        <p class="fs-5">
            Si tiene algún incoveniente con el registro de su cuenta, por favor comuníquese con nosotros. 
            <strong>Es importante que no de a conocer su contraseña antes, durante y después del proceso de login
            a ninguna entidad que no sea perteneciente a la empresa.</strong>
            <a href="mailto:sjqv05@gmail.com" target="_blank" class="link-cardeta">Correo de Santiago Quintero</a>
        </p>
        <h1 class="display-4">Texto lorem</h1>
        <p class="fs-5">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint facere voluptates vel tenetur 
            eveniet officiis. Possimus debitis nulla, explicabo fugit iure aliquid, sequi, sit facere reiciendis 
            excepturi eligendi impedit nesciunt.
        </p>
        <h1 class="display-5 text-center">Usuarios admitidos (remover próximamente)</h1>
        <?php 
            include("Structura/tabla_admin.php"); 
            include("Structura/tabla_mod.php"); 
            include("Structura/tabla_usu.php"); 
        ?>
    </div>
</div>
<?php include("Vista/Componentes/foot.php"); ?>