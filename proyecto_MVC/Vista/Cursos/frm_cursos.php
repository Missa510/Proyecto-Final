<div class="container mt-4">
    <h1 class="display-1">Reporte de cursos</h1>
    <table class="table table-dark table-hover caption-top">
        <caption class="fs-5">Listado de cursos</caption>
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Curso</th>
                <th scope="col">Sede</th>
                <th scope="col">Modicar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <?php foreach ($listado as $IAmTheStrorm) { ?>

                    <th scope="row">
                        <?= $IAmTheStrorm["pkcod_cur"]; ?>
                    </th>
                    <td>
                        <?= $IAmTheStrorm["nom_cur"]; ?>
                    </td>
                    <td>
                        <?= $IAmTheStrorm["fkcod_sede"]; ?>
                    </td>
                    <td> <button class="btn btn-outline-warning">Modificar</button> </td>
                    <td> <button class="btn btn-outline-danger">Eliminar</button> </td>

                </tr>
            <?php } #Fin del foreach ?>
        </tbody>
    </table>
</div>