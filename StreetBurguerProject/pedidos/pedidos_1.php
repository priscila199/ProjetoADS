<?php
  
  session_start();

  if(!isset($_SESSION['usuario'])){
    header('Location: ../login_admin/index.php?erro=1');
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Projeto ADS - Hamburgueria - Pedidos</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
</head>
<body>

  <h3 class="ped">Pedidos</h3>

  <img src="Rounded.svg" class="rou1">
  <img src="restaurant-table.png" class="mes1">
  <a class="mesa1">Mesa 1</a>
  <a href="visualiza_pedido.php?mesa=1"><button class="v1">Visualizar Pedido</button></a>

  <img src="Rounded.svg" class="rou2">
  <img src="restaurant-table.png" class="mes2">
  <a class="mesa2">Mesa 2</a>
  <a href="visualiza_pedido.php?mesa=2"><button class="v2">Visualizar Pedido</button></a>

  <img src="Rounded.svg" class="rou3">
  <img src="restaurant-table.png" class="mes3">
  <a class="mesa3">Mesa 3</a>
  <a href="visualiza_pedido.php?mesa=3"><button class="v3">Visualizar Pedido</button></a>

  <img src="Rounded.svg" class="rou4">
  <img src="restaurant-table.png" class="mes4">
  <a class="mesa4">Mesa 4</a>
  <a href="visualiza_pedido.php?mesa=4"><button class="v4">Visualizar Pedido</button></a>

  <img src="Rounded.svg" class="rou5">
  <img src="restaurant-table.png" class="mes5">
  <a class="mesa5">Mesa 5</a>
  <a href="visualiza_pedido.php?mesa=5"><button class="v5">Visualizar Pedido</button></a>

  <img src="Rounded.svg" class="rou6">
  <img src="restaurant-table.png" class="mes6">
  <a class="mesa6">Mesa 6</a>
  <a href="visualiza_pedido.php?mesa=6"><button class="v6">Visualizar Pedido</button></a>

  <img src="Rounded.svg" class="rou7">
  <img src="restaurant-table.png" class="mes7">
  <a class="mesa7">Mesa 7</a>
  <a href="visualiza_pedido.php?mesa=7"><button class="v7">Visualizar Pedido</button></a>

  <img src="Rounded.svg" class="rou8">
  <img src="restaurant-table.png" class="mes8">
  <a class="mesa8">Mesa 8</a>
  <a href="visualiza_pedido.php?mesa=8"><button class="v8">Visualizar Pedido</button></a>

  <img src="Rounded.svg" class="rou9">
  <img src="restaurant-table.png" class="mes9">
  <a class="mesa9">Mesa 9</a>
    <a href="visualiza_pedido.php?mesa=9"><button class="v9">Visualizar Pedido</button></a>

  <img src="Rounded.svg" class="rou10">
  <img src="restaurant-table.png" class="mes10">
  <a class="mesa10">Mesa 10</a>
  <a href="visualiza_pedido.php?mesa=10"><button class="v10">Visualizar Pedido</button></a>
  
  <a href="../menu_admin/index.php"><button class="volt">Voltar ao Menu Principal</button></a>

</body>
</html>
