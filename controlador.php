<?php
session_start();
$mensaje = "";

//Iniciar sesión
if(isset($_POST["aceptar-inicio"])) {

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
}

//Registro
if(isset($_POST["aceptar-registro"])) {

    if(!empty($_POST["usuario"]) || !empty($_POST["password"]) || !empty($_POST["password2"])){

    $nombre = $_POST["usuario"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

        if ($password == $password2) {

            if (!isset($_SESSION["listaUsuarios"])) {

                $_SESSION["listaUsuarios"]=array();


            }
            $_SESSION["listaUsuarios"][$nombre]=$password;
            $mensaje="Usuario creado correctamente";
            enviarMensajeError($mensaje);
        }
    } else {

        $mensaje="Faltan campos por rellenar";
        enviarMensajeError($mensaje);
    }
}



function enviarMensajeError($mensaje) {

    header('Location: login.php?mensaje='.$mensaje);
}


function validarUsuario($usuario,$password) {

    if(array_key_exists($usuario,$_SESSION["listaUsuarios"])) {

        if ($_SESSION["listaUsuarios"][$usuario]==$password) {

            return true;

        } else {

            return false;
        }
    }
}

?>