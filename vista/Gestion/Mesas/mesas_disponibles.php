<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesas disponibles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/aec7d72014.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Mesas</h1>

    <form name="SelMesaForm" method="post">
        <div>
    <?php
          
          include "../../../modelo/conexion.php";
          include "../../../componentes/seleccionmesa.php";

          ?>
          </diV>

          <a href="vista/Gestion/Mesas/pedidos_mesa.php?id=<?= $datos->id ?>">Enviar</a>
</form>
    <a href="../../../vista/Pedidos/menu.php"><i class="fa-solid fa-backward"></i></button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>