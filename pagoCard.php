<section class="verify-card">
    <h1>Pago con Tarjeta</h1>
    <form action="verificarTarjeta.php" method="post">
            <label for="nombre">Nº Tarjeta
                <input type="number" id="tarjetaNum" name="tarjetaNum" placeholder="XXXX XXXX XXXX XXXX">
            </label>
            <label>Caducidad
                <input type="number" id="caducidadMes" name="caducidadMes" placeholder="Mes">
                <input type="number" id="caducidadAnio" name="caducidadAnio" placeholder="Año">
            </label>
            <label for="cvv">CVV
                <input type="number" id="cvv" name="cvv" placeholder="XXX">
            </label>

        </div>
        <div class="pay-method">
            <input type="submit" class="boton" name="pagoTarjeta" value="Pagar con Paypal">
        </div>
        <?php if ( !empty (  $_GET["mensaje"] )){  echo $_GET["mensaje"];  } ?>
    </form>
</section>
<?php
