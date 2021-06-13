<?php
  
  session_start();

  if(!isset($_SESSION['usuario'])){
    header('Location: ../login_admin/index.php?erro=1');
  }
  include_once("../login_cliente/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Projeto ADS - Hamburgueria - Gerenciador de Mesas</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
</head>
<body>
  <img src="restaurant-table.png" class="mesa">
  <a class="mesas">Mesas DisponÃ­veis</a>
  <img src="Rounded.svg" class="round1">
  <img src="Rounded.svg" class="round2">
  <img src="Rounded.svg" class="round3">
  <img src="Rounded.svg" class="round4">
  <img src="Rounded.svg" class="round5">
  <img src="Rounded.svg" class="round6">
  <img src="Rounded.svg" class="round7">
  <img src="Rounded.svg" class="round8">
  <img src="Rounded.svg" class="round9">
  <img src="Rounded.svg" class="round10">
  <form method="post" action="atualiza_mesa.php">
    <?php 
  $query = mysqli_query($conn, "SELECT * FROM mesas");
            while($row_mesas = mysqli_fetch_assoc($query)){
      if($row_mesas['id_mesa'] == 1){
  echo '<p class="mesa1">'?>
  <input type="checkbox" name="mesa1[]" value="1" <?php if($row_mesas['estado'] == 1){ echo 'checked'; } ?>>Mesa 1</p>
<?php
}
if($row_mesas['id_mesa'] == 2){
        echo '<p class="mesa2">'?>
  <input type="checkbox" name="mesa2[]" value="1" <?php if($row_mesas['estado'] == 1){ echo 'checked'; } ?>>Mesa 2</p>
<?php
}
if($row_mesas['id_mesa'] == 3){
    echo '<p class="mesa3">'?>
  <input type="checkbox" name="mesa3[]" value="1" <?php if($row_mesas['estado'] == 1){ echo 'checked'; } ?>>Mesa 3</p>
<?php
}
if($row_mesas['id_mesa'] == 4){
     echo '<p class="mesa4">'?>
  <input type="checkbox" name="mesa4[]" value="1" <?php if($row_mesas['estado'] == 1){ echo 'checked'; } ?>>Mesa 4</p>
<?php
}
if($row_mesas['id_mesa'] == 5){
     echo '<p class="mesa5">'?>
  <input type="checkbox" name="mesa5[]" value="1" <?php if($row_mesas['estado'] == 1){ echo 'checked'; } ?>>Mesa 5</p>
<?php
}
if($row_mesas['id_mesa'] == 6){
    echo '<p class="mesa6">'?>
  <input type="checkbox" name="mesa6[]" value="1" <?php if($row_mesas['estado'] == 1){ echo 'checked'; } ?>>Mesa 6</p>
<?php
}
if($row_mesas['id_mesa'] == 7){
        echo '<p class="mesa7">'?>
  <input type="checkbox" name="mesa7[]" value="1" <?php if($row_mesas['estado'] == 1){ echo 'checked'; } ?>>Mesa 7</p>
<?php
}
if($row_mesas['id_mesa'] == 8){
        echo '<p class="mesa8">'?>
  <input type="checkbox" name="mesa8[]" value="1" <?php if($row_mesas['estado'] == 1){ echo 'checked'; } ?>>Mesa 8</p>
<?php
}
if($row_mesas['id_mesa'] == 9){
       echo '<p class="mesa9">'?>
  <input type="checkbox" name="mesa9[]" value="1" <?php if($row_mesas['estado'] == 1){ echo 'checked'; } ?>>Mesa 9</p>
<?php
}
if($row_mesas['id_mesa'] == 10){
      echo '<p class="mesa10">'?>
  <input type="checkbox" name="mesa10[]" value="1" <?php if($row_mesas['estado'] == 1){ echo 'checked'; } ?>>Mesa 10</p>
<?php
}
}
?>
<button type="buttom" class="fin" id="btn_login">Finalizar</button>
</form>
 <a href="../menu_admin/index.php"><button class="voltar">Voltar ao Menu Principal</button></a>
</body>
</html>