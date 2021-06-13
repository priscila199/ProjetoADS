<?php
session_start();

  if(!isset($_SESSION['nome'])){
      header('Location: ../login_cliente/index.php?erro=1');
    }

  require_once('../login_cliente/conexao.php');

  $id_usuario = $_SESSION['id_cliente'];

  $sql = " SELECT nome_produto, quantidade, preco_produto FROM pedidos WHERE id_cliente = $id_usuario ";
  $resultado_id = mysqli_query($conn, $sql);
   $resultado = mysqli_query($conn, "SELECT sum(preco_produto) FROM pedidos WHERE id_cliente = $id_usuario");
  $linhas = mysqli_num_rows($resultado);

  if($resultado_id){
    while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
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
            
            ?>
 
            <?php
        }
?>