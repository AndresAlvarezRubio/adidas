<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['carrito']);
header("Location: index.php");