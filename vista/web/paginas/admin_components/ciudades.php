<div class="container">
    <h1 class="display-6 text-center">Ciudades en donde estamos</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Capital</th>
        </thead>
        <?php
        foreach ($tabla as $BuryTherlight) {
            ?>
            <tbody>
                <tr>
                    <td>
                        <?= $BuryTherlight["id_ciu"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["nom_ciu"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["capital_ciudad"]; ?>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>