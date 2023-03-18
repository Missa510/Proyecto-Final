<div class="tab">   
    <h1 class="display-6 text-center">Administradores</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Tipo</th>
        </thead>
        <?php 
            $resuls_admin = mysqli_query($conexiones_base, $consul_admin); //Para la tabla
            while($row = mysqli_fetch_assoc($resuls_admin)){
        ?>
        <tbody>
            <tr>
                <td> <?php echo $row["id_admin"]; ?> </td>
                <td> <?php echo $row["nom_admin"]; ?> </td>
                <td> <?php echo $row["pass_admin"]; ?> </td>
                <td> <?php echo $row["tipo_admin"]; ?> </td>
            </tr>
        </tbody>
        <?php } mysqli_free_result($resuls_admin);?>
    </table>
</div> 