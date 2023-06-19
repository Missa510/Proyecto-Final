<div class="container">
    <h1 class="display-6 text-center">Empleados en nómina</h1>
    <div class="tabla-de-empleados">
        <?php foreach ($tabla as $BuryTherlight) { ?>
            <div class="empleados">
                <div class="logo">
                    <img src="Imagenes\usericon.jpg" alt="User">
                </div>
                <div class="informacion">
                    <div class="id">
                        <strong>Id:</strong>
                        <?= $BuryTherlight["id_emp"]; ?>
                    </div>
                    <div class="dni">
                        <strong>Documento de Identidad (Cédula sí o sí):</strong>
                        <?= $BuryTherlight["dni_emp"]; ?>
                    </div>
                    <div class="nombres">
                        <strong>Apellidos y nombres:</strong>
                        <?= $BuryTherlight["ape_emp"] . ", " . $BuryTherlight["nom_emp"]; ?>
                    </div>
                    <div class="edad">
                        <strong>Edad:</strong>
                        <?= $BuryTherlight["edad_emp"]; ?> años de edad
                    </div>
                    <div class="telefono">
                        <strong>Teléfono:</strong>
                        <?= $BuryTherlight["tel_emp"]; ?>
                    </div>
                    <div class="direccion">
                        <strong>Domicilio:</strong>
                        <?= $BuryTherlight["direct_emp"]; ?>
                    </div>
                    <div class="genero">
                        <strong>Género:</strong>
                        <?php
                        echo $BuryTherlight["gender"];
                        ?>
                    </div>
                    <div class="eps">
                        <strong>EPS:</strong>
                        <?= $BuryTherlight["eps"]; ?>
                    </div>
                    <div class="CajaDeCompensacion">
                        <strong>Caja de compensación:</strong>
                        <?= $BuryTherlight["caja"]; ?>
                    </div>
                    <div class="cargo">
                        <strong>Cargo:</strong>
                        <?= $BuryTherlight["cargo"]; ?>
                    </div>
                    <div class="sueldo">
                        <strong>Sueldo quincenal:</strong>
                        <?= number_format($BuryTherlight["sueldo"], 2); ?> &dollar;COP
                    </div>
                    <div class="sede">
                        <strong>Sede:</strong>
                        <?= $BuryTherlight["nom_sed"]; ?>
                    </div>
                    <div class="descripcion">
                        <strong>Descripción u observaciones del empleado:</strong>
                        <?= $BuryTherlight["descrip_emp"]; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>