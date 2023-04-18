<div class="container mt-4">
    <h1 class="display-1">Reporte de Estudiantes</h1>
    <table class="table table-dark table-hover caption-top">
        <caption class="fs-5">Listado de estudiantes</caption>
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Identificación</th>
                <th scope="col">Apellido</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dirección</th>
                <th scope="col">Curso</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <?php foreach ($listado as $IAmTheStrorm) { ?>

                    <th scope="row">
                        <?= $IAmTheStrorm["cod_estu"]; ?>
                    </th>
                    <td>
                        <?= $IAmTheStrorm["identificacion"]; ?>
                    </td>
                    <td>
                        <?= $IAmTheStrorm["ape_est"]; ?>
                    </td>
                    <td>
                        <?= $IAmTheStrorm["nom_est"]; ?>
                    </td>
                    <td>
                        <?= $IAmTheStrorm["dir_est"]; ?>
                    </td>
                    <td>
                        <?= $IAmTheStrorm["pkcod_cur"]; ?>
                    </td>
                    <td> <button class="btn btn-outline-warning">Modificar</button> </td>
                    <td> <button class="btn btn-outline-danger">Eliminar</button> </td>

                </tr>
            <?php } #Fin del foreach ?>
        </tbody>
    </table>
</div>