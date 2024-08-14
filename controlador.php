<?php
session_start();
$mensaje = "";

if(empty($_POST["usuario"]) || empty($_POST["password"])){

    $mensaje="Faltan campos por rellenar";
    enviarMensajeError($mensaje);

} else {

    if (validarUsuario($_POST["usuario"], $_POST["password"])) {

        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location:index.php");

    } else {

        $mensaje = "Los datos no coinciden";
        enviarMensajeError($mensaje);
    }
}
function enviarMensajeError($mensaje) {

    header('Location: login.php?mensaje='.$mensaje);
}
function validarUsuario($usuario,$password) {

    $listaUsuarios=["Andres" => "1234","Hola"=>"1234"];

    if(array_key_exists($usuario,$listaUsuarios)) {

        if ($listaUsuarios[$usuario]==$password) {

            return true;

        } else {

            return false;
        }
    }
}

?>