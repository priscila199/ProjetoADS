<?php

	session_start();

	if(!isset($_SESSION['nome'])){
   		header('Location: ../login_cliente/index.php?erro=1');
  	}

	require_once('../login_cliente/conexao.php');

	$nome_produto1 = $_POST['produto1'];
	$preco_produto1 = $_POST['preco1'];
	$quantidade1 = $_POST['quant1'];

	$nome_produto2 = $_POST['produto2'];
	$preco_produto2 = $_POST['preco2'];
	$quantidade2 = $_POST['quant2'];

	$nome_produto3 = $_POST['produto3'];
	$preco_produto3 = $_POST['preco3'];
	$quantidade3 = $_POST['quant3'];

	$nome_produto4 = $_POST['produto4'];
	$preco_produto4 = $_POST['preco4'];
	$quantidade4 = $_POST['quant4'];

	$nome_produto5 = $_POST['produto5'];
	$preco_produto5 = $_POST['preco5'];
	$quantidade5 = $_POST['quant5'];

	$nome_produto6 = $_POST['produto6'];
	$preco_produto6 = $_POST['preco6'];
	$quantidade6 = $_POST['quant6'];

	$nome_produto7 = $_POST['produto7'];
	$preco_produto7 = $_POST['preco7'];
	$quantidade7 = $_POST['quant7'];

	$nome_produto8 = $_POST['produto8'];
	$preco_produto8 = $_POST['preco8'];
	$quantidade8 = $_POST['quant8'];

	$nome_produto9 = $_POST['produto9'];
	$preco_produto9 = $_POST['preco9'];
	$quantidade9 = $_POST['quant9'];

	$nome_produto10 = $_POST['produto10'];
	$preco_produto10 = $_POST['preco10'];
	$quantidade10 = $_POST['quant10'];
	
	$id_usuario = $_SESSION['id_cliente'];

	$sql = "SELECT mesa FROM clientes WHERE id_cliente = $id_usuario";
	$resultado_da_mesa = mysqli_query($conn, $sql);
	$dados_mesa_cliente = mysqli_fetch_array($resultado_da_mesa);
	$mesa = $dados_mesa_cliente['mesa'];
  
	if($quantidade1 != 0){
		$sql = "SELECT quantidade FROM produtos WHERE id_produto = 1";
   		$resultado_produto = mysqli_query($conn, $sql);
   		$dados_produto = mysqli_fetch_array($resultado_produto);
   		$preco_produto_atualizado1 = $preco_produto1 * $quantidade1; 
    			$sql = "INSERT INTO pedidos(nome_produto, preco_produto, quantidade, id_cliente, id_mesa) VALUES('$nome_produto1', $preco_produto_atualizado1, $quantidade1, $id_usuario, $mesa) ";
    			mysqli_query($conn, $sql);
   		$quantidade_produto = $dados_produto['quantidade'];
   		$quantidade_atual = $quantidade_produto - $quantidade1;
   		$sql = "UPDATE produtos SET quantidade = $quantidade_atual WHERE id_produto = 1";
		mysqli_query($conn, $sql);
		};

	if($quantidade2 != 0){
		$sql = "SELECT quantidade FROM produtos WHERE id_produto = 2";
   		$resultado_produto = mysqli_query($conn, $sql);
   		$dados_produto = mysqli_fetch_array($resultado_produto);
   		$preco_produto_atualizado2 = $preco_produto2 * $quantidade2; 
    			$sql = "INSERT INTO pedidos(nome_produto, preco_produto, quantidade, id_cliente, id_mesa) VALUES('$nome_produto2', $preco_produto_atualizado2, $quantidade2, $id_usuario, $mesa) ";
    			mysqli_query($conn, $sql);	
   		$quantidade_produto = $dados_produto['quantidade'];
   		$quantidade_atual = $quantidade_produto - $quantidade2;
   		$sql = "UPDATE produtos SET quantidade = $quantidade_atual WHERE id_produto = 2";
		mysqli_query($conn, $sql);
		};

	if($quantidade3 != 0){
		$sql = "SELECT quantidade FROM produtos WHERE id_produto = 3";
   		$resultado_produto = mysqli_query($conn, $sql);
   		$dados_produto = mysqli_fetch_array($resultado_produto);
   		$preco_produto_atualizado3 = $preco_produto3 * $quantidade3; 
    			$sql = "INSERT INTO pedidos(nome_produto, preco_produto, quantidade, id_cliente, id_mesa) VALUES('$nome_produto3', $preco_produto_atualizado3, $quantidade3, $id_usuario, $mesa) ";
    			mysqli_query($conn, $sql);	
   		$quantidade_produto = $dados_produto['quantidade'];
   		$quantidade_atual = $quantidade_produto - $quantidade3;
   		$sql = "UPDATE produtos SET quantidade = $quantidade_atual WHERE id_produto = 3";
		mysqli_query($conn, $sql);		
		};

	if($quantidade4 != 0){
		$sql = "SELECT quantidade FROM produtos WHERE id_produto = 4";
   		$resultado_produto = mysqli_query($conn, $sql);
   		$dados_produto = mysqli_fetch_array($resultado_produto);
   		$preco_produto_atualizado4 = $preco_produto4 * $quantidade4; 
    			$sql = "INSERT INTO pedidos(nome_produto, preco_produto, quantidade, id_cliente, id_mesa) VALUES('$nome_produto4', $preco_produto_atualizado4, $quantidade4, $id_usuario, $mesa) ";
    			mysqli_query($conn, $sql);	
   		$quantidade_produto = $dados_produto['quantidade'];
   		$quantidade_atual = $quantidade_produto - $quantidade4;
   		$sql = "UPDATE produtos SET quantidade = $quantidade_atual WHERE id_produto = 4";
		mysqli_query($conn, $sql);	
		};
	if($quantidade5 != 0){
		$sql = "SELECT quantidade FROM produtos WHERE id_produto = 5";
   		$resultado_produto = mysqli_query($conn, $sql);
   		$dados_produto = mysqli_fetch_array($resultado_produto);
   		$preco_produto_atualizado5 = $preco_produto5 * $quantidade5; 
    			$sql = "INSERT INTO pedidos(nome_produto, preco_produto, quantidade, id_cliente, id_mesa) VALUES('$nome_produto5', $preco_produto_atualizado5, $quantidade5, $id_usuario, $mesa) ";
    			mysqli_query($conn, $sql);		
   		$quantidade_produto = $dados_produto['quantidade'];
   		$quantidade_atual = $quantidade_produto - $quantidade5;
   		$sql = "UPDATE produtos SET quantidade = $quantidade_atual WHERE id_produto = 5";
		mysqli_query($conn, $sql);
		};
	if($quantidade6 != 0){
		$sql = "SELECT quantidade FROM produtos WHERE id_produto = 6";
   		$resultado_produto = mysqli_query($conn, $sql);
   		$dados_produto = mysqli_fetch_array($resultado_produto);
   		$preco_produto_atualizado6 = $preco_produto6 * $quantidade6; 
    			$sql = "INSERT INTO pedidos(nome_produto, preco_produto, quantidade, id_cliente, id_mesa) VALUES('$nome_produto6', $preco_produto_atualizado6, $quantidade6, $id_usuario, $mesa) ";
    			mysqli_query($conn, $sql);
   		$quantidade_produto = $dados_produto['quantidade'];
   		$quantidade_atual = $quantidade_produto - $quantidade6;
   		$sql = "UPDATE produtos SET quantidade = $quantidade_atual WHERE id_produto = 6";
		mysqli_query($conn, $sql);		
		};
	if($quantidade7 != 0){
		$sql = "SELECT quantidade FROM produtos WHERE id_produto = 7";
   		$resultado_produto = mysqli_query($conn, $sql);
   		$dados_produto = mysqli_fetch_array($resultado_produto);
   		$preco_produto_atualizado7 = $preco_produto7 * $quantidade7; 
    			$sql = "INSERT INTO pedidos(nome_produto, preco_produto, quantidade, id_cliente, id_mesa) VALUES('$nome_produto7', $preco_produto_atualizado7, $quantidade7, $id_usuario, $mesa) ";
    			mysqli_query($conn, $sql);	
   		$quantidade_produto = $dados_produto['quantidade'];
   		$quantidade_atual = $quantidade_produto - $quantidade7;
   		$sql = "UPDATE produtos SET quantidade = $quantidade_atual WHERE id_produto = 7";
		mysqli_query($conn, $sql);	
		};
	if($quantidade8 != 0){
		$sql = "SELECT quantidade FROM produtos WHERE id_produto = 8";
   		$resultado_produto = mysqli_query($conn, $sql);
   		$dados_produto = mysqli_fetch_array($resultado_produto);
   		$preco_produto_atualizado8 = $preco_produto8 * $quantidade8; 
    			$sql = "INSERT INTO pedidos(nome_produto, preco_produto, quantidade, id_cliente, id_mesa) VALUES('$nome_produto8', $preco_produto_atualizado8, $quantidade8, $id_usuario, $mesa) ";
    			mysqli_query($conn, $sql);	
   		$quantidade_produto = $dados_produto['quantidade'];
   		$quantidade_atual = $quantidade_produto - $quantidade8;
   		$sql = "UPDATE produtos SET quantidade = $quantidade_atual WHERE id_produto = 8";
		mysqli_query($conn, $sql);	
		};
	if($quantidade9 != 0){
		$sql = "SELECT quantidade FROM produtos WHERE id_produto = 9";
   		$resultado_produto = mysqli_query($conn, $sql);
   		$dados_produto = mysqli_fetch_array($resultado_produto);
   		$preco_produto_atualizado9 = $preco_produto9 * $quantidade9; 
    			$sql = "INSERT INTO pedidos(nome_produto, preco_produto, quantidade, id_cliente, id_mesa) VALUES('$nome_produto9', $preco_produto_atualizado9, $quantidade9, $id_usuario, $mesa) ";
    			mysqli_query($conn, $sql);
   		$quantidade_produto = $dados_produto['quantidade'];
   		$quantidade_atual = $quantidade_produto - $quantidade9;
   		$sql = "UPDATE produtos SET quantidade = $quantidade_atual WHERE id_produto = 9";
		mysqli_query($conn, $sql);		
		};
	if($quantidade10 != 0){
		$sql = "SELECT quantidade FROM produtos WHERE id_produto = 10";
   		$resultado_produto = mysqli_query($conn, $sql);
   		$dados_produto = mysqli_fetch_array($resultado_produto);
   		$preco_produto_atualizado10 = $preco_produto10 * $quantidade10; 
    			$sql = "INSERT INTO pedidos(nome_produto, preco_produto, quantidade, id_cliente, id_mesa) VALUES('$nome_produto10', $preco_produto_atualizado10, $quantidade10, $id_usuario, $mesa) ";
    			mysqli_query($conn, $sql);
   		$quantidade_produto = $dados_produto['quantidade'];
   		$quantidade_atual = $quantidade_produto - $quantidade10;
   		$sql = "UPDATE produtos SET quantidade = $quantidade_atual WHERE id_produto = 10";
		mysqli_query($conn, $sql);		
		};
	
	header('Location: ../conta/index.php');

	?>