<?php include("Controlador/control_users.php"); ?>
<div class="tab">     
    <h1 class="display-6 text-center">Usuarios Corriente</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Correo (mail)</th>
            <th scope="col">Tipo</th>
        </thead>
        <?php 
            while($row = mysqli_fetch_assoc($mostrar_var)){
        ?>
        <tbody>
            <tr>
                <td> <?php echo $row["id_usu"]; ?> </td>
                <td> <?php echo $row["nom_usu"]; ?> </td>
                <td> <?php echo $row["pass_usu"]; ?> </td>
                <td> <a href="mailto:<?php echo $row["mail_usu"]; ?>" class="link-light"> <?php echo $row["mail_usu"]; ?> </a> </td>
                <td> <?php echo $row["tipo_usu"]; ?> </td>
            </tr>
        </tbody>
        <?php } mysqli_free_result($mostrar_var);?>
    </table>
</div>