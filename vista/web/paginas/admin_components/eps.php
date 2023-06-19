<div class="container">
    <h1 class="display-6 text-center">EPS que podemos aceptar</h1>
    <table class="table table-dark table-hover">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">EPS</th>
        </thead>
        <?php
        foreach ($tabla as $BuryTherlight) {
            ?>
            <tbody>
                <tr>
                    <td>
                        <?= $BuryTherlight["id_eps"]; ?>
                    </td>
                    <td>
                        <?= $BuryTherlight["eps"]; ?>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>