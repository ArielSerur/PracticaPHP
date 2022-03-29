<?php
session_start();
include './php/conexion.php';
$id = $_GET['id'];
// echo $id;
print_r($_SESSION['carrito']);
echo array_search($id, array_column($_SESSION['carrito'], 'Id'));
$idDelete = array_search($id, array_column($_SESSION['carrito'], 'Id'));


unset($_SESSION['carrito'][$idDelete]);
$_SESSION['carrito'] = array_values($_SESSION['carrito']);
header("Location: cart.php");
