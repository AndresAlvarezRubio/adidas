<?php

$numTarjeta = false;
$fechaMes = false;
$fechaAnio = false;
$cvv = false;

$expRegCard = '/^(?:4[0-9]{12}(?:[0-9]{3})?           # Visa
                       |  5[1-5][0-9]{14}                    # MasterCard
                       |  3[47][0-9]{13}                     # American Express
                       |  3(?:0[0-5]|[68][0-9])[0-9]{11}     # Diners Club
                       |  6(?:011|5[0-9]{2})[0-9]{12}        # Discover
                       |  (?:2131|1800|35\d{3})\d{11}        # JCB
                       )$/x';


/*Validación numero tarjeta*/
if (!empty($_POST["tarjetaNum"]) && preg_match($expRegCard,$_POST["tarjetaNum"])) {

    $numTarjeta = true;
}


/*Validación caducidad mensual*/
if (!empty($_POST["caducidadMes"]) && preg_match("/^(0[1-9]|1[0-2])$/",$_POST["caducidadMes"])) {

    $fechaMes = true;
}

/*Validación caducidad anual*/
if (!empty($_POST["caducidadAnio"]) && preg_match("/^([0-9]{2})$/",$_POST["caducidadAnio"])) {

    $fechaAnio = true;
}


/*Validación CVV*/
if (!empty($_POST["cvv"]) && preg_match("/^([0-9]{3})$/",$_POST["cvv"])) {

    $cvv = true;
}




if($numTarjeta && $fechaMes && $fechaAnio && $cvv) {

    if(isset($_POST["pagoTarjeta"])) { header("Location:index.php");}

} else {
    header("Location:pagoCard.php?mensaje=Hay datos incorrectos o que faltan por rellenar");
}
