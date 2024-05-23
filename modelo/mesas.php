<?php

require_once "conexion.php";
class Mesas {
    private $conexion;
    private $id;
    private $nombre;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function crearMesa($nombre) {
       
        $sql = $this->conexion->query("INSERT INTO mesa(nombre) VALUES ('$nombre')");
        if ($sql === TRUE) {
            $nuevo_id = $this->conexion->insert_id;
            return array('success' => true, 'mensaje' => 'Mesa creada correctamente, ID: ' . $nuevo_id);
        } else {
            return array('success' => false, 'mensaje' => 'Error al registrar: ' . $this->conexion->error);
        }
    }

    public function editarMesa($id, $nombre) {
        $sql = $this->conexion->query("UPDATE mesa SET nombre='$nombre' WHERE id='$id'");
        if ($sql == 1) {
            return true; 
        } else {
            return false; 
        }
    }

    public function eliminarMesa($id) {
        $sql = $this->conexion->query("DELETE FROM mesa WHERE id='$id'");
        if ($sql == 1) {
            return true; 
        } else {
            return false; 
        }
    }    





    public function getId()
    {
        return $this->id;
    }
    public function setId($id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }



}


?>