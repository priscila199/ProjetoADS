<?php
	session_start();

	require_once('../login_admin/db.class.php');

	if(isset($_POST['usuario'])){
        echo "<br>Existe Variavel";
        if(!empty($_POST['usuario'])){
            echo "Campo Preenchido";
            $nome = $_POST['usuario'];

	$nome = $_POST['usuario'];
	$mesa = $_POST['mesa'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "INSERT INTO clientes(nome, mesa) VALUES ('$nome', '$mesa')";

	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
		mysqli_query($link, "UPDATE mesas SET estado = 0 WHERE id_mesa = $mesa");
	} else {
		echo 'Erro ao registrar o usuário!';
	}

	$sql = " SELECT id_cliente, nome FROM clientes WHERE nome = '$nome' ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if ($resultado_id) {
		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['nome'])){
			
			$_SESSION['id_cliente'] = $dados_usuario['id_cliente'];
			$_SESSION['nome'] = $dados_usuario['nome'];

			header('Location: ../cardapio/cardapio_1.php');

		} else {
			header('Location: ../login_cliente/index.php?erro=1');
		}
	} else {
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}

	}else{
    echo "Campo nome obrigatorio";
    header('Location: ../login_cliente/index.php?erro=1');
}
}

?>