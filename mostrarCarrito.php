<?php
include "header.php";
?>

<div class="cesta">
    <h2 class="texto-centrado">Resumen de tu Carrito</h2>
    <?php
        if(!empty($_SESSION["carrito"])) {

    ?>
    <table>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
            <th>Acciones</th>
        </tr>
        <?php
        //Llamar $_SESSION["carrito"] con foreach para sacar todo
        $total = 0;

        foreach ($_SESSION["carrito"] as $productoID=>$producto) {

         $subtotal = $producto["precio"] * $producto["cantidad"];
         $total += $subtotal;
        ?>
        <tr>
            <td><?php echo $producto["nombre"]?></td>
            <td>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $productoID?>">
                    <input type="number" name="cantidad" value="<?php echo $producto["cantidad"]?>" min="1"">
                    <input type="submit" name="actualizarCarrito" value="Actualizar">
                </form>
            </td>
            <td><?php echo $producto["precio"]?>€</td>
            <td><?php echo $subtotal?>€</td>
            <td>
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id"  value="<?php echo $productoID?>">
                    <input type="submit" name="eliminarProducto" id="delete-product" value="Eliminar">
                </form>
            </td>
        </tr>

        <?php
        }
        ?>
    </table>
    <div class="resultados-carrito">
        <div>
            <a href="tramitarPedido.php">Tramitar Pedido</a>
            <form action="carrito.php" method="post">
                <input type="submit" name="eliminarCarrito" value="Vaciar Cesta">
            </form>
        </div>
        <?php echo "<p class='total-price'>Total: ". $total ."€</p>"; ?>
    </div>

    <?php

        } else {

            echo "Tu carrito está vacío";
        }
    ?>
</div>

<body>

</body>
</html>