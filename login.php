<?php
include_once "header.php";
if (!isset($_SESSION["usuario"])) {
?>

    <div class="container-form">
        <div class="select-form">
            <h2>Inicio de sesión</h2>
            <form action="controlador.php" method="post">
                <div>
                    <label for="usuario">Usuario
                        <input type="text" id="usuario" name="usuario" required>
                    </label>
                    <label for="password">Contraseña
                        <input type="password" id="password" name="password">
                    </label>
                </div>
                <input type="submit" class="boton" name="aceptar-inicio" value="Iniciar Sesión">
            </form>
        </div>
        <div class="select-form">
            <h2>Registro</h2>
            <form action="controlador.php" method="post">
                <div>
                    <label for="usuario">Usuario
                        <input type="text" id="usuario" name="usuario" required>
                    </label>
                    <label for="password">Contraseña
                        <input type="password" id="password" name="password">
                    </label>
                    <label for="password">Repetir Contraseña
                        <input type="password" id="repeat-password" name="password2">
                    </label>
                </div>
                <input type="submit" class="boton" name="aceptar-registro" value="Registrarse">
            </form>
        </div>


<?php
    if(!empty($_GET["mensaje"])){
        echo $_GET["mensaje"];
    }
}
?>

</div>
