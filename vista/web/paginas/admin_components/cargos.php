<div class="container">
    <h1 class="display-1 text-center">Cargos de cada sede</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Cargo</th>
            <th scope="col">Sueldo promedio</th>
            <th scope="col">Descripcion del cargo</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </thead>
        <?php
        foreach ($tabla as $BuryTherlight) {
        ?>
            <tbody>
                <tr>
                    <td>
                        <?= $BuryTherlight["cargo"]; ?>
                    </td>
                    <td>
                        <?= number_format($BuryTherlight["sueldo"], 2); ?> &dollar;COP
                    </td>
                    <td>
                        <?= $BuryTherlight["descrip_cargo"] ?>
                    </td>
                    <td>
                        <a href="?control=cargos&&funcion=Editar">Este cargo</a>
                    </td>
                    <td>
                        <a href="?control=cargos&&funcion=Eliminar">Este cargo</a>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
    <h1 class="display-2 text-center"> Control de información </h1>
    <h1 class="display-6">Añadir un nuevo cargo</h1>
    <form action="?control=cargos&&funcion=Agregar" class="formulario-add" method="post">
        <div class="nombre-cargo">
            <input type="text" name="cargo" id="id_cargo">
            <label for="id_cargo">Cargo</label>
        </div>
        <div class="sueldo">
            <input type="number" min="800000" name="sueldo" id="id_sueldo">
            <label for="id_sueldo">Sueldo (&dollar;COP)</label>
        </div>
        <div class="descripcion">
            <textarea name="descripcion" id="id_descripcion"></textarea>
            <label for="id_descripcion">Una pequeña descripción del cargo</label>
        </div>
        <input type="submit" value="Añadir ♥">
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>