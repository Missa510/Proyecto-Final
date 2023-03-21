<?php 
    include("Vista/Componentes/hd.php"); 
    include("Vista/Componentes/nav.php");
?>
<main>
    <div class="main-puro">
        <div class="cardeta">
            <h1 class="display-1 text-center">Log in</h1>
            <p class="fs-4 text-center">
                Este es el login para los usuarios de la empresa S&J. Si eres uno de ellos, hola :3.
            </p>
            <p class="fs-5 text-justify">
                Cabe resaltar que <strong>La empresa S&J no se hace responsable si usted proporciona
                sus datos de registro a entidades que no sean pertenecientes a la empresa. Si tiene
                alguna inquietud al momento de su sesión, por favor contactenos directamente a los
                correos admitidos de la empresa cuyos dueños se encargarán de resolver y solventar
                sus inquietudes &heartsuit;</strong><br>
                <!-- ¿Aún no tienes una cuenta? <a href="?control=navegacion&&funcion=registro" class="link-dark">Regístrate</a> -->
            </p>
            <h1 class="display-5">Texto lorem</h1>
            <p class="fs-5 text-justify">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis 
                omnis magnam excepturi quod assumenda consequuntur obcaecati? Nulla 
                necessitatibus inventore nisi cupiditate deleniti, iste est in suscipit non autem 
                quas modi.
            </p>
            <form action="?control=login&&funcion=logear" method="post">
                <div class="row g-2">
                    <div class="form-floating mb-3 col-6">
                        <input type="text" name="sus" class="form-control" 
                        id="floatingInput" placeholder="Usuario"
                        required>
                        <label for="floatingInput">Usuario</label>
                    </div>
                    <div class="form-floating mb-3 col-6">
                        <input type="password" name="pass" class="form-control" id="floatingPassword" 
                        placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                    name="tipo" required>
                        <option selected>Tipo de nivel</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Moderador">Moderador</option>
                        <option value="Usuario Corriente">Usuario corriente</option>
                    </select>
                    <label for="floatingSelect">Tipo de usuario</label>
                </div>
                <div class="col-12 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="invalidCheck" required>
                        <label for="invalidCheck">
                            Acepto los 
                            <a href="?control=navegacion&&funcion=cuentas" class="link-dark">términos y condiciones</a> 
                        </label>
                    </div>
                </div>
                <center><input type="submit" class="enviar" value="Sign up"></center>
                <hr>
                <div class="piedelogin">
                    <a href="?control=navegacion&&funcion=cuentas" class="link-cardeta">¿Olvidaste el usuario?</a>
                    <a href="?control=navegacion&&funcion=cuentas" class="link-cardeta">¿Olvidaste la contraseña?</a>
                    <a href="?control=navegacion&&funcion=cuentas" class="link-cardeta">¿Olvidaste el tipo de usuario?</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include("Vista/Componentes/foot.php"); ?>