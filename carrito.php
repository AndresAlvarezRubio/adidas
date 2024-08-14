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
}
$_SESSION["totalProductos"]=0;
foreach($_SESSION["carrito"] as $productoID => $producto){

    $_SESSION["totalProductos"]+=$producto["cantidad"];
}

header("Location: index.php");
?>