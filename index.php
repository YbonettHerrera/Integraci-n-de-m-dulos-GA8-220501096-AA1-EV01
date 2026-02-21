<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <style>
    ul { list-style-type:none; margin:0; padding:0; width:320px; background-color:#f1f1f1; }
    li a { display:block; color:#000; padding:10px 16px; text-decoration:none; }
    li a:hover { background-color:#555; color:white; }
    .title { text-align:center; margin:20px 0; }
  </style>
</head>

<body>
<div class="container">
  <h2 class="title">PIKING Y PAKING</h2>

  <ul>
    <li><a href="listar_bodegas.php">BODEGAS</a></li>
    <li><a href="listar_productos.php">PRODUCTOS</a></li>
    <li><a href="listar_cliente.php">CLIENTES</a></li>
    <li><a href="listar_coordinador.php">COORDINADORES</a></li>
    <li><a href="listar_correos_clientes.php">CORREOS CLIENTES</a></li>
    <li><a href="listar_ordenes.php">ORDEN DE DESPACHO</a></li>
  </ul>
</div>

<!-- Chatbot flotante -->
<?php include 'chatbot_widget.html'; ?>

</body>
</html>