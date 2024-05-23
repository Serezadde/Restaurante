<?php

require_once "conexion.php";
require_once "categoria.php";


class Producto
{

    private $conexion;



    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    function eliminarProducto($id) {
 

        $sql = $this->conexion->query("DELETE FROM producto WHERE id='$id'");
        if ($sql == 1) {
            return true; 
        } else {
            return false; 
        }
    }



    function editarProducto($id, $nombre, $precio, $id_categoria) {

        $sql = $this->conexion->query("UPDATE producto SET nombre='$nombre', precio='$precio', id_categoria='$id_categoria' WHERE id='$id'");
        if ($sql === TRUE) {
            return true; 
        } else {
            return false; 
        }
    }
}

