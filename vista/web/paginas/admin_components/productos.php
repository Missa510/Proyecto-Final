<div class="container">
    <h1 class="display-6 text-center">Prodcutos que poseemos</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Prodcuto</th>
            <th scope="col">Precio de Compra</th>
            <th scope="col">Precio de Venta</th>
        </thead>
        <?php
        foreach ($tabla as $BuryTherlight) {
        ?>
            <tbody>
                <tr>
                    <td>
                        <?= $BuryTherlight["id_produc"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["nom_produc"]; ?>
                    </td>
                    <td>
                        <?= number_format($BuryTherlight["precio_venta"], 2); ?> &dollar;COP
                    </td>
                    <td>
                        <?= number_format($BuryTherlight["precio_compra"], 2); ?> &dollar;COP
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>