<?php
include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <title>Projeto ADS - Hamburgueria - Login Cliente</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
    	<img src="Rectangle.svg" class="ret">
</head>
<body>
	<img src="cc10aa0b80217891d077dd25327c6597.png" class="burger">
	<img src="logo.png" class="bb">
	<img src="restaurant-1495593-1267764.png" class="rest">
	<h3 class="login">LOGIN</h3>
	<img src="fast-food-1851561-1569286.png" class="ham">

	<p></p>
<button class="btn">Logar</button>

<form method="post" action="validar_acesso_cliente.php" id="formLogin">
  <div class="form-group">
        <label class="name">Nome</label><br>
        <input type="text" class="form-control nome" id="campo_usuario" name="usuario" placeholder="Nome" maxlength="30" />
  </div>
                                
    <label class="mes">Mesa</label><br>
      <select name="mesa" class="mesa">
      <?php
            $query = mysqli_query($conn, "SELECT * FROM mesas WHERE estado = 1");
            while($row_mesas = mysqli_fetch_assoc($query)){ ?>
              <option value="<?php echo $row_mesas['id_mesa']; ?>"><?php echo $row_mesas['nome']; ?></option> <?php } ?>
      </select>

    <button type="buttom" class="btn" id="btn_login">Logar</button>
    <br><br>
</form>

</body>
</html>
