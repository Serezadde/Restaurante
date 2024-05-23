<?php

include "../../../modelo/conexion.php";

if (!empty($_POST["btncrear"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["precio"]) && !empty($_POST["seleccionCat"])) {
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $selCat = $_POST["seleccionCat"];

        // Verificar si el nombre del producto ya existe
        $sql_check = $conexion->query("SELECT * FROM producto WHERE nombre = '$nombre'");
        if ($sql_check->num_rows > 0) {
            
        } else {
            $sql = $conexion->query("INSERT INTO producto(nombre, precio, id_categoria) VALUES ('$nombre', '$precio', '$selCat')");
            if ($sql === TRUE) {
                $nuevo_id = $conexion->insert_id;
                echo '<div class="alert alert-success">Producto creado correctamente, ID: '.$nuevo_id.'</div>';
            } else {
                echo '<div class="alert alert-danger">Error al registrar el producto: '.$conexion->error.'</div>';
            }
        }
    } else {
        echo '<div class="alert alert-warning">Todos los campos son obligatorios</div>';
    }
}
?>


