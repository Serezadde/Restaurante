<div class="form-group">
    <label for="seleccionMesa">Mesas</label>
    <select class="form-select" name="seleccionMesa" id="seleccionMesa" aria-label="Seleccionar Mesa" style="font-size: 18px;">        <?php
        include "../../../modelo/conexion.php";
        $sql = "CALL ObtenerMesasDisponibles()";
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            while ($categoria = $result->fetch_assoc()) {
                echo "<option value='" . $categoria['id'] . "'>" . $categoria['nombre'] . "</option>";
            }
        }
        ?>
    </select>
</div>