<?php
include "header.php";

/* Crear formulario con datos de contacto como nombre, dirección y correo */
/* Selección de método de pago: Paypal o Tarjeta */
/* En Paypal se redirige a: https://www.paypal.com/paypalme/ */
/* En Tarjeta poner datos de tarjeta*/
/* Al verificar tarjeta, se redirige a otra página que sea "Validación de pago" */

?>

<form class="form-payment" action="finalizarCompra.php" method="post">
    <h1>Finalizar compra</h1>
    <div class="data-user">
        <label for="nombre">Nombre
            <input type="text" id="nombre" name="nombre" >
        </label>
        <label for="apellido">Apellido
            <input type="text" id="apellido" name="apellido">
        </label>
        <label for="direccion">Direccion
            <input type="text" id="direccion" name="direccion" >
        </label>
        <label for="mail">Correo Electrónico
            <input type="email" id="mail" name="mail" >
        </label>
    </div>
    <div class="pay-method">
        <input type="submit" class="boton" name="paypalPay" value="Pagar con Paypal">
        <input type="submit" class="boton" name="creditCardPay" value="Pagar con Tarjeta">
    </div>
    <?php if ( !empty (  $_GET["mensaje"] )){  echo $_GET["mensaje"];  } ?>
</form>

