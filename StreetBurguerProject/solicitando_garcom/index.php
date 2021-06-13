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
    <title>Projeto ADS - Hamburgueria - Solicitando Garçom</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
    	<img src="Rectangle.svg" class="ret">
</head>
<body>
	<img src="cc10aa0b80217891d077dd25327c6597.png" class="burger">
	<img src="logo.png" class="bb">
	<a class="sol">Solicitando o garçom, aguarde o atendimento...</a>
  <a href="../login_cliente/sair_cliente.php"><button class="enc">Encerrar Atendimento</button></a>
</body>
</html>
