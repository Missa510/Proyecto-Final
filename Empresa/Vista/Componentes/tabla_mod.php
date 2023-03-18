<div class="tab">
    <h1 class="display-6 text-center">Moderadores</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Tipo</th>
        </thead>
        <?php 
            $resuls_mod = mysqli_query($conexiones_base, $consul_mod); //Para la tabla
            while($row = mysqli_fetch_assoc($resuls_mod)){
        ?>
        <tbody>
            <tr>
                <td> <?php echo $row["id_mod"]; ?> </td>
                <td> <?php echo $row["nom_mod"]; ?> </td>
                <td> <?php echo $row["pass_mod"]; ?> </td>
                <td> <?php echo $row["tipo_mod"]; ?> </td>
            </tr>
        </tbody>
        <?php } mysqli_free_result($resuls_mod);?>
    </table>
</div>