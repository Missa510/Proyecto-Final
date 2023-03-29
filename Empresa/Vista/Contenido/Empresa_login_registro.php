<?php 
    include("Vista/Componentes/hd.php"); 
    include("Vista/Componentes/nav.php"); 
?>
<main>
    <div class="main-puro">
        <div class="cardeta">
            <h1 class="display-1 text-center" id="titulo">Registro</h1>
            <p class="fs-4 text-center">
                Este es el registro para los usuarios de la empresa S&J. Bienvenido &heartsuit;
            </p>
            <p class="fs-5 text-justify">
                Cabe resaltar que <strong>La empresa S&J no se hace responsable si usted proporciona
                sus datos de registro a entidades que no sean pertenecientes a la empresa. Si tiene
                alguna inquietud al momento de su sesión, por favor contactenos directamente a los
                correos admitidos de la empresa cuyos dueños se encargarán de resolver y solventar
                sus inquietudes &heartsuit;</strong>
            </p>
            <form action="#" method="post">
                <h1 class="display-6 text-center">Datos personales</h1>
                <div class="row g-2">
                    <div class="form-floating mb-3 col-6">
                        <input type="text" name="name_real" class="form-control" 
                        id="floatingInput" placeholder="Nombres"
                        required>
                        <label for="floatingInput">Nombre(s)</label>
                    </div>
                    <div class="form-floating mb-3 col-6">
                        <input type="text" name="ape_real" class="form-control" id="floatingPassword" 
                        placeholder="Apellidos" required>
                        <label for="floatingPassword">Apellido(s)</label>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="form-floating mb-3 col-4">
                        <input type="tel" name="telefone" class="form-control" id="floatingInput" 
                        placeholder="Telefono celular" required>
                        <label for="floatingInput">Teléfono celular</label>
                    </div>
                    <div class="form-floating mb-3 col-8">
                        <input type="email" name="correo" class="form-control" id="floatingPassword" 
                        placeholder="Apellidos" required>
                        <label for="floatingPassword">Correo electrónico</label>
                    </div>
                </div>
                <h1 class="display-6 text-center">Usuario como tal</h1>
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
                            <a href="?nave=terms" class="link-dark">términos y condiciones</a> 
                        </label>
                    </div>
                </div>
                <center><input type="submit" class="enviar" value="Register Now"></center>
            </form>
        </div>
    </div>
</main>
<?php include("Vista/Componentes/foot.php"); ?>