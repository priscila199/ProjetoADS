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
  <form method="post" action="atualiza_cardapio.php">
	<h3 class="card">Cardápio Disponível</h3>
  <?php 
  $query = mysqli_query($conn, "SELECT * FROM produtos");
            while($row_produtos = mysqli_fetch_assoc($query)){
      if($row_produtos['id_produto'] == 1){
  echo '<img src="Rounded.svg" class="rou1">';
  echo '<img src="images.png" class="piz">';
  echo '<label class="nome1">Nome:</label>'; ?>
  <input class="nom1" name= "nome1" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco1">Preço:</label>';?>
  <input type="number" step=0.01 class="prec1" name= "preco1" value="<?php echo $row_produtos['preco']; ?>" min="0.05"><?php
  echo '<label class="quant1">Quantidade:</label>';?>
  <input type="number" class="valor1" name= "quant1" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
    if($row_produtos['id_produto'] == 2){
  echo '<img src="Rounded.svg" class="rou2">';
  echo '<img src="image_processing20200510-6203-ih89.png" class="cacho">';
  echo '<label class="nome2">Nome:</label>'; ?>
  <input class="nom2" name= "nome2" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco2">Preço:</label>';?>
  <input type="number" step=0.01 class="prec2" name= "preco2" value="<?php echo $row_produtos['preco']; ?>" min="0.05"><?php
  echo '<label class="quant2">Quantidade:</label>';?>
  <input type="number" class="valor2" name= "quant2" value="<?php echo $row_produtos['quantidade']; ?>" min="0">
  <?php
}
    if($row_produtos['id_produto'] == 3){
  echo '<img src="Rounded.svg" class="rou3">';
  echo '<img src="french-fries-6118.png" class="bat">';
  echo '<label class="nome3">Nome:</label>'; ?>
 <input class="nom3" name="nome3" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco3">Preço:</label>';?>
  <input type="number" step=0.01 class="prec3" name= "preco3" value="<?php echo $row_produtos['preco']; ?>" min="0.05"><?php
  echo '<label class="quant3">Quantidade:</label>';?>
  <input type="number" class="valor3" name= "quant3" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
  if($row_produtos['id_produto'] == 4){
  echo '<img src="Rounded.svg" class="rou4">';
  echo '<img src="Copo-Refrigerante-PNG.png" class="ref">';
  echo '<label class="nome4">Nome:</label>'; ?>
  <input class="nom4" name="nome4" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco4">Preço:</label>';?>
  <input type="number" step=0.01 class="prec4" name= "preco4" value="<?php echo $row_produtos['preco']; ?>" min="0.05"><?php
  echo '<label class="quant4">Quantidade:</label>';?>
  <input type="number" class="valor4" name= "quant4" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
  if($row_produtos['id_produto'] == 5){
  echo '<img src="Rounded.svg" class="rou5">';
  echo '<img src="f90630c4ebd98f56cfbee5646e9ba905.png" class="mil">';
  echo '<label class="nome5">Nome:</label>'; ?>
  <input class="nom5" name="nome5" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco5">Preço:</label>';?>
  <input type="number" step=0.01 class="prec5" name= "preco5" value="<?php echo $row_produtos['preco']; ?>" min="0.05"><?php
  echo '<label class="quant5">Quantidade:</label>';?>
  <input type="number" class="valor5" name= "quant5" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
  if($row_produtos['id_produto'] == 6){
  echo '<img src="Rounded.svg" class="rou6">';
  echo '<img src="1f354.png" class="ham">';
  echo '<label class="nome6">Nome:</label>'; ?>
  <input class="nom6" name="nome6" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco6">Preço:</label>';?>
  <input type="number" step=0.01 class="prec6" name="preco6" value="<?php echo $row_produtos['preco']; ?>" min="0.05"><?php
  echo '<label class="quant6">Quantidade:</label>';?>
  <input type="number" class="valor6" name="quant6" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
  if($row_produtos['id_produto'] == 7){
  echo '<img src="Rounded.svg" class="rou7">';
  echo '<img src="2717a5313eeb0e1355fb3061f11e532d.png" class="sor">';
  echo '<label class="nome7">Nome:</label>'; ?>
  <input class="nom7" name="nome7" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco7">Preço:</label>';?>
  <input type="number" step=0.01 class="prec7" name="preco7" value="<?php echo $row_produtos['preco']; ?>" min="0.05"><?php
  echo '<label class="quant7">Quantidade:</label>';?>
  <input type="number" class="valor7" name="quant7" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
  if($row_produtos['id_produto'] == 8){
  echo '<img src="Rounded.svg" class="rou8">';
  echo '<img src="123311.png" class="ane">';
  echo '<label class="nome8">Nome:</label>'; ?>
  <input class="nom8" name="nome8" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco8">Preço:</label>';?>
  <input type="number" step=0.01 class="prec8" name="preco8" value="<?php echo $row_produtos['preco']; ?>" min="0.05"><?php
  echo '<label class="quant8">Quantidade:</label>';?>
  <input type="number" class="valor8" name="quant8" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
  if($row_produtos['id_produto'] == 9){
  echo '<img src="Rounded.svg" class="rou9">';
  echo '  <img src="1046773.png" class="bal">';
  echo '<label class="nome9">Nome:</label>'; ?>
  <input class="nom9" name="nome9" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco9">Preço:</label>';?>
  <input type="number" step=0.01 class="prec9" name="preco9" value="<?php echo $row_produtos['preco']; ?>" min="0.05"><?php
  echo '<label class="quant9">Quantidade:</label>';?>
  <input type="number" class="valor9" name="quant9" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
  if($row_produtos['id_produto'] == 10){
  echo '<img src="Rounded.svg" class="rou10">';
  echo '<img src="cc397916027d6967d09b5a2f5d3f7d6f.png" class="com">';
  echo '<label class="nome10">Nome:</label>'; ?>
  <input class="nom10" name="nome10" value="<?php echo $row_produtos['nome']; ?>" >
  <?php
  echo '<label class="preco10">Preço:</label>';?>
  <input type="number" step=0.01 class="prec10" name="preco10" value="<?php echo $row_produtos['preco']; ?>" min="0.05"><?php
  echo '<label class="quant10">Quantidade:</label>';?>
  <input type="number" class="valor10" name="quant10" value="<?php echo $row_produtos['quantidade']; ?>" min="0"><?php
}
} 
?>
  <button type="buttom" class="fin" id="btn_login">Finalizar</button>
</form>

   <a href="../menu_admin/index.php"><button class="volt">Voltar ao Menu Principal</button></a>
</body>
</html>
