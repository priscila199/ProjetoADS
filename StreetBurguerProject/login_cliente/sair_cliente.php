<?php

    session_start();
    require_once('../login_cliente/conexao.php');
 
    //unset($_SESSION['mesa']);
        $id_usuario = $_SESSION['id_cliente'];
    $sql = "SELECT mesa FROM clientes WHERE id_cliente = $id_usuario";
    $resultado_da_mesa = mysqli_query($conn, $sql);
    $dados_mesa_cliente = mysqli_fetch_array($resultado_da_mesa);
    $mesa = $dados_mesa_cliente['mesa'];
       mysqli_query($conn, "UPDATE mesas SET estado = 1 WHERE id_mesa = $mesa");
       mysqli_query($conn, "DELETE FROM pedidos WHERE id_cliente = $id_usuario");
       mysqli_query($conn, "DELETE FROM clientes WHERE mesa = $mesa");
       unset($_SESSION['usuario']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
    <title>StreetBurguerProject - Faça Login</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
</head>
<body>
	<img src="cc10aa0b80217891d077dd25327c6597.png" class="burger">
	<h3 class="login">Faça seu pedido!</h3>
	<img src="logo.png" class="bb">

    <a href="../login_cliente/index.php"><button type="buttom" class="btn" id="btn_login">Peça agora!</button></a>
    <br><br>

</form>

</body>
</html>