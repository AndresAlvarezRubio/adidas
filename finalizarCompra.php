<?php

$nombre = false;
$direccion = false;
$email = false;


/*Validación nombre*/
if (!empty($_POST["nombre"]) && preg_match("/[a-zA-ZáéíóúÁÉÍÓÚÑñ]/",$_POST["nombre"])) {

    $nombre = true;
}


/*Validación dirección*/
if (!empty($_POST["direccion"])) {

    $direccion = true;
}


/*Validación mail*/
if (!empty($_POST["mail"]) && preg_match("/[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}/",$_POST["mail"])) {

    $email = true;
}




if($nombre && $direccion && $email) {

    if(isset($_POST["paypalPay"])) { header("Location:https://www.paypal.com/paypalme/");}
    if(isset($_POST["creditCardPay"])) { header("Location:pagoCard.php"); }

} else {
    header("Location:tramitarPedido.php?mensaje=Hay datos incorrectos o que faltan por rellenar");
}
