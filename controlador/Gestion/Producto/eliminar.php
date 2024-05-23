<?php 

require "../../../modelo/conexion.php";
require "../../../modelo/producto.php";

$producto = new Producto($conexion); 

if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    if ($producto->eliminarProducto($id)) {
        echo '<div class="alert alert-success">Producto eliminado</div>';
    } else {
        echo '<div class="alert alert-danger">Ocurrió un error</div>';
    }
}

