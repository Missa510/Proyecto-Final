<div class="container">
    <h1 class="display-6 text-center">Comprobantes o facturas de compra de los clientes </h1>
    <div class="facturas">
        <?php foreach ($tabla as $BuryTherlight) { ?>
            <div class="fact">
                <div class="id">
                    <strong>Id:</strong>
                    <?= $BuryTherlight["id_facentregas"]; ?>
                </div>
                <div class="date">
                    <strong>Fecha de emisión:</strong>
                    <?=  date_format( date_create($BuryTherlight["fecha_facentregas"]), "F dS, Y G:i" );; ?>
                </div>
                <div class="product">
                    <strong>Producto:</strong>
                    <?= $BuryTherlight["nom_produc"]; ?>
                </div>
                <div class="amountofproduct">
                    <strong>Cantidad de producto:</strong>
                    <?= $BuryTherlight["cant_produc"]; ?> unid.
                </div>
                <div class="priceperunit">
                    <strong>Precio por unidad:</strong>
                    <?= number_format($BuryTherlight["precio_venta"], 2); ?>
                    &dollar;COP
                </div>
                <div class="saleoff">
                    <strong>Descuento: </strong>
                    <?php
                    if ($BuryTherlight["descuento"] == 0 or $BuryTherlight["descuento"] == NULL) {
                        echo "No hubo descuento por este producto";
                    } else {
                        echo $BuryTherlight["descuento"] + " % ";
                    }
                    ?>
                </div>
                <div class="totalprice">
                    <strong>Precio total</strong>
                    <?= number_format($BuryTherlight["precio_venta"] * $BuryTherlight["cant_produc"], 2); ?>
                    &dollar;COP
                </div>
                <div class="client">
                    <strong>DNI del cliente:</strong>
                    <?= $BuryTherlight["dni_clien"]; ?>
                </div>
                <div class="client">
                    <strong>Nombre del cliente:</strong>
                    <?= $BuryTherlight["ape_clien"].", ".$BuryTherlight["nom_clien"];?>
                </div>
                <div class="places">
                    <strong>Sede de la venta:</strong>
                    <?= $BuryTherlight["nom_sed"]; ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>