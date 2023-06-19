<div class="container">
    <h1 class="display-6 text-center">Sedes que manejamos</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Dirección</th>
            <th scope="col">Ciudad</th>
        </thead>
        <?php
        foreach ($tabla as $BuryTherlight) {
        ?>
            <tbody>
                <tr>
                    <td>
                        <?= $BuryTherlight["id_sede"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["nom_sed"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["direc_sed"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["nom_ciu"]; ?>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>