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
    <title>Projeto ADS - Hamburgueria - Menu Admin</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
</head>
<body>
	<h1>Olá, <?php echo $_SESSION['usuario'];?></h1>

	<h2><a href="../login_admin/sair.php">Sair</a></h2>
	<a class="menu">MENU</a>
	<a href="../pedidos/pedidos_1.php"><button class="pedidos">Pedidos</button></a>
	<a href="../gerenciador_de_mesas/gerenciador_de_mesas_1.php"><button class="mesas">Gerenciar Mesas</button></a>
	<a href="../gerenciador_de_cardapio/gerenciador_de_cardapio_1.php"><button class="cardapio">Gerenciar Cardápio</button></a>
</body>
</html>
