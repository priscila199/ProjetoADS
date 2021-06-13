<?php
session_start();
require_once('../login_cliente/conexao.php');

	$nome1 = $_POST['nome1'];
	$preco1 = $_POST['preco1'];
	$quant1 = $_POST['quant1'];
	
	$nome2 = $_POST['nome2'];
	$preco2 = $_POST['preco2'];
	$quant2 = $_POST['quant2'];

	$nome3 = $_POST['nome3'];
	$preco3 = $_POST['preco3'];
	$quant3 = $_POST['quant3'];

	$nome4 = $_POST['nome4'];
	$preco4 = $_POST['preco4'];
	$quant4 = $_POST['quant4'];

	$nome5 = $_POST['nome5'];
	$preco5 = $_POST['preco5'];
	$quant5 = $_POST['quant5'];

	$nome6 = $_POST['nome6'];
	$preco6 = $_POST['preco6'];
	$quant6 = $_POST['quant6'];

	$nome7 = $_POST['nome7'];
	$preco7 = $_POST['preco7'];
	$quant7 = $_POST['quant7'];

	$nome8 = $_POST['nome8'];
	$preco8 = $_POST['preco8'];
	$quant8 = $_POST['quant8'];

	$nome9 = $_POST['nome9'];
	$preco9 = $_POST['preco9'];
	$quant9 = $_POST['quant9'];
	
	$nome10 = $_POST['nome10'];
	$preco10 = $_POST['preco10'];
	$quant10 = $_POST['quant10'];

	mysqli_query($conn, "UPDATE produtos SET nome = '$nome1', quantidade = '$quant1', preco = '$preco1' WHERE id_produto = 1");

	mysqli_query($conn, "UPDATE produtos SET nome = '$nome2', quantidade = '$quant2', preco = '$preco2' WHERE id_produto = 2");

	mysqli_query($conn, "UPDATE produtos SET nome = '$nome3', quantidade = '$quant3', preco = '$preco3' WHERE id_produto = 3");

	mysqli_query($conn, "UPDATE produtos SET nome = '$nome4', quantidade = '$quant4', preco = '$preco4' WHERE id_produto = 4");

	mysqli_query($conn, "UPDATE produtos SET nome = '$nome5', quantidade = '$quant5', preco = '$preco5' WHERE id_produto = 5");

	mysqli_query($conn, "UPDATE produtos SET nome = '$nome6', quantidade = '$quant6', preco = '$preco6' WHERE id_produto = 6");

	mysqli_query($conn, "UPDATE produtos SET nome = '$nome7', quantidade = '$quant7', preco = '$preco7' WHERE id_produto = 7");

	mysqli_query($conn, "UPDATE produtos SET nome = '$nome8', quantidade = '$quant8', preco = '$preco8' WHERE id_produto = 8");

	mysqli_query($conn, "UPDATE produtos SET nome = '$nome9', quantidade = '$quant9', preco = '$preco9' WHERE id_produto = 9");

	mysqli_query($conn, "UPDATE produtos SET nome = '$nome10', quantidade = '$quant10', preco = '$preco10' WHERE id_produto = 10");

	header('Location: ../menu_admin/index.php');

	?>