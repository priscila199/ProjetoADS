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
    <title>Projeto ADS - Hamburgueria - Gerenciador de Cardápio</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
</head>
<body>
	<h3 class="card">Cardápio Disponível</h3>

<?php 
  $query = mysqli_query($conn, "SELECT * FROM produtos");
            while($row_produtos = mysqli_fetch_assoc($query)){
      if($row_produtos['id_produto'] == 6){
  echo '<img src="Rounded.svg" class="rou1">';
  echo '<img src="1f354.png" class="ham">';
  echo '<label class="nome1">Nome:</label>'; ?>
  <input class="nom1" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco1">Preço:</label>';?>
  <input type="number" step=0.01 class="prec1" value="<?php echo $row_produtos['preco']; ?>"><?php
  echo '<label class="quant1">Quantidade:</label>';?>
  <input type="number" class="valor1" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
  if($row_produtos['id_produto'] == 7){
  echo '<img src="Rounded.svg" class="rou2">';
  echo '<img src="2717a5313eeb0e1355fb3061f11e532d.png" class="sor">';
  echo '<label class="nome2">Nome:</label>'; ?>
  <input class="nom2" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco2">Preço:</label>';?>
  <input type="number" step=0.01 class="prec2" value="<?php echo $row_produtos['preco']; ?>"><?php
  echo '<label class="quant2">Quantidade:</label>';?>
  <input type="number" class="valor2" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
  if($row_produtos['id_produto'] == 8){
  echo '<img src="Rounded.svg" class="rou3">';
  echo '<img src="123311.png" class="ane">';
  echo '<label class="nome3">Nome:</label>'; ?>
  <input class="nom3" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco3">Preço:</label>';?>
  <input type="number" step=0.01 class="prec3" value="<?php echo $row_produtos['preco']; ?>"><?php
  echo '<label class="quant3">Quantidade:</label>';?>
  <input type="number" class="valor3" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
  if($row_produtos['id_produto'] == 9){
  echo '<img src="Rounded.svg" class="rou4">';
  echo '  <img src="1046773.png" class="bal">';
  echo '<label class="nome4">Nome:</label>'; ?>
  <input class="nom4" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco4">Preço:</label>';?>
  <input type="number" step=0.01 class="prec4" value="<?php echo $row_produtos['preco']; ?>"><?php
  echo '<label class="quant4">Quantidade:</label>';?>
  <input type="number" class="valor4" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
  if($row_produtos['id_produto'] == 10){
  echo '<img src="Rounded.svg" class="rou5">';
  echo '<img src="cc397916027d6967d09b5a2f5d3f7d6f.png" class="com">';
  echo '<label class="nome5">Nome:</label>'; ?>
  <input class="nom5" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco5">Preço:</label>';?>
  <input type="number" step=0.01 class="prec5" value="<?php echo $row_produtos['preco']; ?>"><?php
  echo '<label class="quant5">Quantidade:</label>';?>
  <input type="number" class="valor5" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
}
?>

 <a href="../menu_admin/index.php"><button class="volt">Voltar ao Menu Principal</button></a>
    <a class="ant" href="gerenciador_de_cardapio_1.php">Anterior</a>
    <a class="um" href="gerenciador_de_cardapio_1.php">1</a>
    <a class="dois">2</a>
  <button class="fin">Finalizar</button>
</body>
</html>
