<div class="container mt-4">
    <h1 class="display-1">Reporte de cursos</h1>
    <form action="?clase=cursos&&funcion=InserCursos" method="post">
        <div class="row mb-4">
        <div class="col">
                <label for="lbCod" class="form-label">Código</label>
                <input type="text" class="form-control" name="txCodCur" id="lbCod">
            </div>
            <div class="col">
                <label for="lbCur" class="form-label">Curso</label>
                <input type="text" class="form-control" name="txNomCur" id="lbCur">
            </div>
            <div class="col">
                <label for="lbSede" class="form-label">Sede</label>
                <select name="cbSede" class="form-select" id="lbSede">
                    <option>Seleccion</option>

                    <?php foreach ($listaCombo as $BuryTheLight) { ?>

                        <option value="<?= $BuryTheLight["pkcod_sede"]; ?>"><?= $BuryTheLight["nom_sede"]; ?></option>

                    <?php } #Fin del foreach 
                    ?>

                </select>
            </div>
        </div>
        <input type="submit" class="btn btn-outline-dark" value="Enviar">
    </form>
    <hr>
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
        <?php } #Fin del foreach 
        ?>
        </tbody>
    </table>
</div>