<div class="container">
    <h1 class="display-6 text-center">Cargos de cada sede</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Cargo</th>
            <th scope="col">Sueldo promedio</th>
            <th scope="col">Descripcion del cargo</th>
        </thead>
        <?php
        foreach ($tabla as $BuryTherlight) {
        ?>
            <tbody>
                <tr>
                    <td>
                        <?= $BuryTherlight["id_cargo"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["cargo"]; ?>
                    </td>
                    <td>
                        <?= number_format($BuryTherlight["sueldo"], 2); ?> &dollar;COP
                    </td>
                    <td>
                        <?= $BuryTherlight["descrip_cargo"] ?>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>