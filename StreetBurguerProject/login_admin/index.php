<?php

    $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
    <title>StreetBurguerProject - Login Admin</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
</head>
<body>
	<img src="cc10aa0b80217891d077dd25327c6597.png" class="burger">
	<h3 class="login">LOGIN ADMIN</h3>
	<img src="logo.png" class="bb">

<form method="post" action="validar_acesso.php" id="formLogin">
    <div class="form-group">
        <label class="user">Usuário</label><br>
        <input type="text" class="form-control usuario" id="campo_usuario" name="usuario" placeholder="Usuário" maxlength="30" />
    </div>
                                
    <div class="form-group">
        <label class="pass">Senha</label><br>
        <input type="password" class="form-control red senha" id="campo_senha" name="senha" placeholder="Senha" maxlength="50"/>
    </div>

    <button type="buttom" class="botao" id="btn_login">Entrar</button>
    <br><br>

    <?php

        if($erro == 1){
            echo '<font color="red">Usuário e/ou senha inválido(s)</font>';
        }

    ?>
</form>

</body>
</html>
