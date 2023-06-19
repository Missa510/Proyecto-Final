<div class="container">
    <h1 class="display-6 text-center">Clientes que compran nuestros productos</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">DNI</th>
            <th scope="col">Apellido(s)</th>
            <th scope="col">Nombre(s)</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Mail</th>
            <th scope="col">Dirección</th>
        </thead>
        <?php
        foreach ($tabla as $BuryTherlight) {
            ?>
            <tbody>
                <tr>
                    <td>
                        <?= $BuryTherlight["id_clien"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["dni_clien"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["ape_clien"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["nom_clien"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["tel_clien"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["mail_clien"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["direc_clien"]; ?>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>