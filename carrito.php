<?php

include "header.php";


if(isset($_POST["agregar"])) {
    $productoID=$_POST["id-producto"];
    $nombreProducto=$_POST["nombre-producto"];
    $precioProcucto=$_POST["precio"];
    $cantidadProducto=$_POST["cantidad"];
}

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = array();
}
if (isset($_SESSION["carrito"][$productoID])){

    $_SESSION["carrito"][$productoID]["cantidad"]+=$cantidadProducto;

} else{

    $_SESSION["carrito"][$productoID]=array(
        "nombre"=>$nombreProducto,
        "precio"=>$precioProcucto,
        "cantidad"=>$cantidadProducto
    );
    actualizarCesta();
    header("Location: index.php");
}





/**
Función que cuenta los artículos que están en la cesta para mostrarlos en el header
**/
function actualizarCesta() {

    $_SESSION["totalProductos"]=0;

    foreach($_SESSION["carrito"] as $productoID => $producto){

        $_SESSION["totalProductos"]+=$producto["cantidad"];
    }
}




if(isset($_POST["eliminarCarrito"])) {

    unset($_SESSION["carrito"]); //eliminar array $_SESSION["carrito"]
    actualizarCesta();
    header("Location: mostrarCarrito.php");
}



if(isset($_POST["actualizarCarrito"])) {

    $id=$_POST["id"];
    $cantidad=$_POST["cantidad"];

    if(isset($_SESSION["carrito"][$id])) {

        $_SESSION["carrito"][$id]["cantidad"]=$cantidad;
    }
    actualizarCesta();
    header("Location: mostrarCarrito.php");
}




if(isset($_POST["eliminarProducto"])) {

    $id=$_POST["id"];

    unset($_SESSION["carrito"][$id]);

    actualizarCesta();
    header("Location: mostrarCarrito.php");
}

?>