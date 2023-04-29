<div class="container mt-4">
    <?php

    #Traer de la base de datos
    $cod = $reporte[0]["pkcod_cur"];
    $nom = $reporte[0]["nom_cur"];
    $sede = $reporte[0]["fkcod_sede"];

    // echo "<p class='fs-5'>" . $cod . ", " . $nom . ", " . $sede . "</p>";

    ?>
    <h1 class="display-1">Actualización de datos</h1>
    <form action="?clase=cursos&&funcion=ActualizarCursos" method="post">
        <input type="hidden" name="txCodCur" value="<?= $cod ?>">
        <div class="row mb-4">
            <div class="col">
                <label for="lbCod" class="form-label">Código <?= base64_encode("Hola :3"); ?></label>
                <input type="text" class="form-control" id="lbCod" value="<?= $cod ?>" disabled>
            </div>
            <div class="col">
                <label for="lbCur" class="form-label">Curso</label>
                <input type="text" class="form-control" name="txNomCur" id="lbCur" value="<?= $nom ?>">
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
        <!-- <input type="submit" class="btn btn-outline-dark" value="Enviar"> -->
        <button type="submit" class="btn btn-outline-success">Actualizar</button>
    </form>
</div>