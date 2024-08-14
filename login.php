<?php
include_once "header.php";
if (!isset($_SESSION["usuario"])) {
?>

    <div class="container-form">
        <h1>Inicio de sesión</h1>
        <form action="controlador.php" method="post">
            <label for="usuario">Usuario
                <input type="text" id="usuario" name="usuario" required>
            </label>
            <label for="password">Contraseña
                <input type="password" id="password" name="password">
            </label>
            <input type="submit" class="boton" name="aceptar" value="Iniciar Sesión">
        </form>


<?php
    if(!empty($_GET["mensaje"])){
        echo $_GET["mensaje"];
    }
}
?>

</div>
