<?php require_once("Vista\Componentes\PartesDePagina\hd.php"); ?>
<?php require_once("Vista\Componentes\PartesDePagina/nav_user.php"); ?>
<h1 class="display-1" id="titulo">Confirmación de eliminación</h1>
<p class="text-danger fs-4">¿Estás seguro de que deseas eliminar?</p>
<form action="?control=eliminar&&funcion=confirmacion&&id_admin=<?= $row["id_admin"]; ?>&&type=Admin">
    <input type="submit" value="Acpetar">
    <input type="submit" value="Cancelar">
</form>