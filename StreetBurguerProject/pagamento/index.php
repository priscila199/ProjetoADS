<?php
  
  session_start();

  if(!isset($_SESSION['nome'])){
    header('Location: ../login_cliente/index.php?erro=1');
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <title>Projeto ADS - Hamburgueria - Pagamento</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
    	<img src="Rectangle.svg" class="ret">
</head>
<body>
	<img src="cc10aa0b80217891d077dd25327c6597.png" class="burger">
	<img src="logo.png" class="bb">
	<a class="pag">PAGAMENTO COM CARTÂO</a>
    <img src="Rounded.svg" class="round">
    <a class="esc">Escolha a bandeira do cartão:</a>
    <img src="Icon.svg" class="ame">
    <img src="master.svg" class="master">
    <img src="visa.svg" class="vis">
    <form>
  <input type="radio" class="ameri">
  <label class="american">American Express</label><br>
  <input type="radio" class="mast">
  <label class="mastercard">Mastercard</label><br>
  <input type="radio" class="vi">
  <label class="visa">Visa</label>
</form>
  <a class="nome">Nome impresso no cartão</a>
  <input type="text" class="nom" placeholder="Nome no Cartão">
  <a class="numero">Número do cartão</a>
  <input type="text" class="num" placeholder="Número do Cartão">
  <a class="validade">Validade</a>
  <input type="text" class="val" placeholder="Validade">
  <a class="cvv">CVV</a>
  <input type="text" class="cv" placeholder="CVV">
  <a href="../login_cliente/sair_cliente.php"><button class="fin">Finalizar</button></a>
</body>
</html>
