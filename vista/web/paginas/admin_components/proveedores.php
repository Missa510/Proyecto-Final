<div class="container">
    <h1 class="display-6 text-center">Proveedores que nos proveen</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Telefono</th>
            <th scope="col">Mail</th>
            <th scope="col">Direccion</th>
        </thead>
        <?php
        foreach ($tabla as $BuryTherlight) {
            ?>
            <tbody>
                <tr>
                    <td>
                        <?= $BuryTherlight["id_prov"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["nom_prov"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["tel_prov"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["mail_prov"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["direc_prov"]; ?>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>