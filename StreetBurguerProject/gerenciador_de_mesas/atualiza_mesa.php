<?php
session_start();
require_once('../login_cliente/conexao.php');

	if(!empty($_POST['mesa1'])){
		$mesa1 = implode(",", $_POST['mesa1']);
	}else{
		$mesa1 = "0";
	}
	
	if(!empty($_POST['mesa2'])){
		$mesa2 = implode(",", $_POST['mesa2']);
	}else{
		$mesa2 = "0";
	}

	if(!empty($_POST['mesa3'])){
		$mesa3 = implode(",", $_POST['mesa3']);
	}else{
		$mesa3 = "0";
	}

	if(!empty($_POST['mesa4'])){
		$mesa4 = implode(",", $_POST['mesa4']);
	}else{
		$mesa4 = "0";
	}

	if(!empty($_POST['mesa5'])){
		$mesa5 = implode(",", $_POST['mesa5']);
	}else{
		$mesa5 = "0";
	}

	if(!empty($_POST['mesa6'])){
		$mesa6 = implode(",", $_POST['mesa6']);
	}else{
		$mesa6 = "0";
	}

	if(!empty($_POST['mesa7'])){
		$mesa7 = implode(",", $_POST['mesa7']);
	}else{
		$mesa7 = "0";
	}

	if(!empty($_POST['mesa8'])){
		$mesa8 = implode(",", $_POST['mesa8']);
	}else{
		$mesa8 = "0";
	}

	if(!empty($_POST['mesa9'])){
		$mesa9 = implode(",", $_POST['mesa9']);
	}else{
		$mesa9 = "0";
	}

	if(!empty($_POST['mesa10'])){
		$mesa10 = implode(",", $_POST['mesa10']);
	}else{
		$mesa10 = "0";
	}

	mysqli_query($conn, "UPDATE mesas SET estado = '$mesa1' WHERE id_mesa = 1");

	mysqli_query($conn, "UPDATE mesas SET estado = '$mesa2' WHERE id_mesa = 2");

	mysqli_query($conn, "UPDATE mesas SET estado = '$mesa3' WHERE id_mesa = 3");

	mysqli_query($conn, "UPDATE mesas SET estado = '$mesa4' WHERE id_mesa = 4");

	mysqli_query($conn, "UPDATE mesas SET estado = '$mesa5' WHERE id_mesa = 5");

	mysqli_query($conn, "UPDATE mesas SET estado = '$mesa6' WHERE id_mesa = 6");

	mysqli_query($conn, "UPDATE mesas SET estado = '$mesa7' WHERE id_mesa = 7");

	mysqli_query($conn, "UPDATE mesas SET estado = '$mesa8' WHERE id_mesa = 8");

	mysqli_query($conn, "UPDATE mesas SET estado = '$mesa9' WHERE id_mesa = 9");

	mysqli_query($conn, "UPDATE mesas SET estado = '$mesa10' WHERE id_mesa = 10");

	header('Location: ../menu_admin/index.php');

	?>