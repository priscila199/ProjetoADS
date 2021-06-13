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
    <title>Projeto ADS - Hamburgueria - Pedidos</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

  <div class="col-md-6">
    <div id="contas" class="list-group div-personalizada"></div>
  </div>

<?php

require_once('../login_cliente/conexao.php');

  $mesa = $_GET['mesa'];

  $sql = " SELECT nome_produto, quantidade, preco_produto FROM pedidos WHERE id_mesa = $mesa ";

  $resultado_id = mysqli_query($conn, $sql);
  $resultado = mysqli_query($conn, "SELECT sum(preco_produto) FROM pedidos WHERE id_mesa = $mesa");
  $linhas = mysqli_num_rows($resultado);

  if($resultado_id){
    while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
      echo '<h3 class="visuliza">Visualização do Pedido</h3>';
    echo '<a href="#" class="list-group-item">';
        echo '<h4 class="list-group-item-heading">'.$registro['nome_produto'].'<small> - R$'.$registro['preco_produto'].'</small></h4>';
        echo '<p class="list-group-item-text">'.$registro['quantidade'].'x</p>';
      echo '</a>';

    }
  } else {
    echo 'Erro na consulta no banco de dados!';
  }

  while($linhas = mysqli_fetch_array($resultado)){
        echo  '<label class="tot">Total: </label>';
         echo '<p class="total">R$'.$linhas['sum(preco_produto)'].'<br/>';
         echo '<a href="pedidos_1.php"><button class="voltar">Voltar para os pedidos</button></a>';
            
            ?>
 
            <?php
        }
  ?>
</body>
</html>