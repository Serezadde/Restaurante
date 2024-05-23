<?php 
include "../../../modelo/conexion.php";
include "../../../modelo/mesas.php";

$mesas = new Mesas($conexion); 

if (!empty($_POST["btneditar"])) {
    if (!empty($_POST["nombre"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];

        if ($mesas->editarMesa($id, $nombre)) {
            header("location:mesas2.php");
        } else {
            echo '<div class="alert alert-danger">Ocurrió un error</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campo vacío</div>';
    }
}
