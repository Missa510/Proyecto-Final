<?php require_once("Controlador/control_moders.php"); ?>
<div class="tab">
    <h1 class="display-6 text-center">Moderadores</h1>
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
                <td> <?php echo $row["id_mod"]; ?> </td>
                <td> <?php echo $row["nom_mod"]; ?> </td>
                <td> <?php echo $row["pass_mod"]; ?> </td>
                <td> <a href="mailto:<?php echo $row["mail_mod"]; ?>" class="link-light"> <?php echo $row["mail_mod"]; ?> </a> </td>
                <td> <?php echo $row["tipo_mod"]; ?> </td>
            </tr>
        </tbody>
        <?php } mysqli_free_result($mostrar_var); ?>
    </table>
</div>