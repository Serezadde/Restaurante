<?php
include "../../../modelo/conexion.php";
include "../../../modelo/mesas.php";

$mesas = new Mesas($conexion); 
if (!empty($_POST["btncrear"])) {
    if (!empty($_POST["nombre"])) {
        $nombre = $_POST["nombre"];

        $resultado = $mesas->crearMesa($nombre); 
        if ($resultado['success']) {
            echo '<div class="alert alert-success">' . $resultado['mensaje'] . '</div>';
        } else {
            echo '<div class="alert alert-danger">' . $resultado['mensaje'] . '</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campo vacío</div>';
    }
}