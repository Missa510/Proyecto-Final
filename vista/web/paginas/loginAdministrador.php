<h1 class="display-1"> Acceder a la administración </h1>
<div class="formulario">
    <form action="?control=administrador&&funcion=home" method="post">
        <h1 class="display-5 text-center">Log in</h1>
        <p class="fs-5 text-center">
            Este es el log in para acceder a la administración de la base de datos ♥
        </p>
        <br>
        <div class="name">
            <input type="text" id="user" name="user" required>
            <label for="user">Usuario</label>
        </div>
        <div class="password">
            <input type="password" id="password" name="password" required>
            <label for="password">Contraseña</label>
        </div>
        <div class="check text-center">
            <input type="checkbox" id="check" required>
            <label for="check"> Acepto los términos y condiciones </label>
        </div>
        <div class="send text-center">
            <input type="submit" class="login" value="Log in">
        </div>
    </form>
</div>
<?php require_once("vista/web/diseno/footer.php"); ?>