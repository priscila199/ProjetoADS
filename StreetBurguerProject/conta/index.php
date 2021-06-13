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

    <title>Projeto ADS - Hamburgueria - Conta</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
    <img src="Rectangle.svg" class="ret">
    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
    <script type="text/javascript">

      $(document).ready( function(){

        function atualizaConta(){
          //carregar a conta

          $.ajax({
            url: 'pegue_conta.php',
            success: function(data) {
              $('#contas').html(data);
            }
          });
        }

        atualizaConta();

      });

    </script>
    	
</head>
<body>
    <div>
      <img src="cc10aa0b80217891d077dd25327c6597.png" class="burger"> 
      <img src="logo.png" class="bb">
    </div>

    <div class="col-md-3">
      <h3 class="conta">CONTA</h3>
    </div>

	 <div class="col-md-6">

    <div id="contas" class="list-group div-personalizada"></div>
  </div>


 
<div class="col-md-3">

    <div>
      <a href="../solicitando_garcom/index.php"><button class="dinheiro">Fazer Pagamento</button></a>
     
    <a href="../cardapio/cardapio_1.php"><button class="voltar">Voltar para o cardápio</button></a>
    </div>
  </div>


</body>
</html>