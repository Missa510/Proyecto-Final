<div class="tab">     
    <h1 class="display-6 text-center">Usuarios Corriente</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Tipo</th>
        </thead>
        <?php 
            $resuls_usu = mysqli_query($conexiones_base, $consul_usu); //Para la tabla
            while($row = mysqli_fetch_assoc($resuls_usu)){
        ?>
        <tbody>
            <tr>
                <td> <?php echo $row["id_usu"]; ?> </td>
                <td> <?php echo $row["nom_usu"]; ?> </td>
                <td> <?php echo $row["pass_usu"]; ?> </td>
                <td> <?php echo $row["tipo_usu"]; ?> </td>
            </tr>
        </tbody>
        <?php } mysqli_free_result($resuls_usu);?>
    </table>
</div>