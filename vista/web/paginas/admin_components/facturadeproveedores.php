<div class="container">
    <h1 class="display-6 text-center">Ultimas facturas de proveedores</h1>
    <div class="facturas">
        <?php foreach ($tabla as $BuryTherlight) { ?>
            <div class="fact">
                <div class="id">
                    <strong>Id:</strong>
                    <?= $BuryTherlight["id_facompras"]; ?>
                </div>
                <div class="date">
                    <strong>Fecha de emisión:</strong>
                    <?=  date_format( date_create($BuryTherlight["fecha_facompras"]), "F dS, Y H:i" );?>
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
                    <?= number_format($BuryTherlight["precio_compra"], 2); ?>
                    &dollar;COP
                </div>
                <div class="totalprice">
                    <strong>Precio total</strong>
                    <?= number_format($BuryTherlight["precio_compra"] * $BuryTherlight["cant_produc"], 2); ?>
                    &dollar;COP
                </div>
                <div class="provider">
                    <strong>Proveedores:</strong>
                    <?= $BuryTherlight["nom_prov"]; ?>
                </div>
                <div class="places">
                    <strong>Sede surtida:</strong>
                    <?= $BuryTherlight["nom_sed"]; ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>