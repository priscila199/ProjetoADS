<?php

session_start();

if(!isset($_SESSION['nome'])){
    header('Location: ../login_cliente/index.php?erro=1');
}
include_once("../login_cliente/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Projeto ADS - Hamburgueria - Cardápio</title>
    <link rel="shortcut icon" href="cc10aa0b80217891d077dd25327c6597.png">
    <link href='https://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
    <img src="Rectangle.svg" class="ret">
</head>
<body>
    <img src="cc10aa0b80217891d077dd25327c6597.png" class="burger">
    <img src="logo.png" class="bb">
    <h3 class="card">CARDÁPIO</h3>

  <form method="post" action="atualiza_pedido.php">

   <?php

   $result_usuarios = "SELECT * FROM produtos";
   $resultado_usuarios = mysqli_query($conn, $result_usuarios);
   while($row_produto = mysqli_fetch_assoc($resultado_usuarios)){

    if($row_produto['id_produto'] == 1){
        if($row_produto['quantidade'] != 0){
            echo '<img src="Rounded.svg" class="rou1">';
            echo "<img src='pizza.png' class='piz'>";
            echo '<label class="pizza">'. $row_produto['nome'] .'</label>'; ?>
            <input type="hidden" class="pizza" name="produto1" value="<?php echo $row_produto['nome'] ?>" >
            <?php echo '<label class="pre1">R$'. $row_produto['preco'] .'</label>'; "<br>"; ?>
            <input type="hidden" class="pre1" name="preco1" value="<?php echo $row_produto['preco'] ?>" >
            <?php echo  '<label class="quantd1">Quantidade Disponível:'. $row_produto['quantidade'] .'</label>';
            echo  '<label class="quant1">Quantidade:</label>'; ?>
            <input type="number" class="valor1" id="valor1" name="quant1" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"> <?php
        } else {
            echo '<img src="Rounded.svg" class="rou1">';
            echo "<img src='pizza.png' class='piz'>";?>
            <input type="hidden" class="pizza" name="produto1" value="<?php echo $row_produto['nome'] ?>" >
            <input type="hidden" name="preco1" value="<?php echo $row_produto['preco'] ?>" >
            <input type="hidden" class="valor1" id="valor1" name="quant1" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"><?php
            echo '<label class="pizza">'. $row_produto['nome'] .'</label>';
            echo'<label class="pre1">ESGOTADO</label>'; "<br>";
        }
    }

    if($row_produto['id_produto'] == 2){
        if($row_produto['quantidade'] != 0){
            echo '<img src="Rounded.svg" class="rou2">';
            echo "<img src='cachorro_quente.png' class='cacho'>";
            echo '<label class="cachorro">'. $row_produto['nome'] .'</label>';?>
            <input type="hidden" class="cachorro" name="produto2" value="<?php echo $row_produto['nome'] ?>" >
            <?php echo'<label class="pre2">R$'. $row_produto['preco'] .'</label>'; "<br>";?>
            <input type="hidden" class="pre2" name="preco2" value="<?php echo $row_produto['preco'] ?>" >
            <?php echo '<label class="quantd2">Quantidade Disponível:'. $row_produto['quantidade'] .'</label>';
            echo '<label class="quant2">Quantidade:</label>';?>
            <input type="number" class="valor2" id="valor2" name="quant2" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"> <?php
        } else {
            echo '<img src="Rounded.svg" class="rou2">';
            echo "<img src='cachorro_quente.png' class='cacho'>";?>
            <input type="hidden" class="cachorro" name="produto2" value="<?php echo $row_produto['nome'] ?>" >
            <input type="hidden" name="preco2" value="<?php echo $row_produto['preco'] ?>" >
            <input type="hidden" class="valor2" id="valor2" name="quant2" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"><?php
            echo '<label class="cachorro">'. $row_produto['nome'] .'</label>';
            echo '<label class="pre2">ESGOTADO</label>';
        }
    }

    if($row_produto['id_produto'] == 3){
        if($row_produto['quantidade'] != 0){
            echo '<img src="Rounded.svg" class="rou3">';
            echo "<img src='batata_frita.png' class='bat'>";
            echo '<label class="batata">'. $row_produto['nome'] .'</label>';?>
            <input type="hidden" class="batata" name="produto3" value="<?php echo $row_produto['nome'] ?>" >
            <?php echo '<label class="pre3">R$'. $row_produto['preco'] .'</label>'; "<br>";?>
            <input type="hidden" class="pre3" name="preco3" value="<?php echo $row_produto['preco'] ?>" >
            <?php echo  '<label class="quantd3">Quantidade Disponível:'. $row_produto['quantidade'] .'</label>';
            echo  '<label class="quant3">Quantidade:</label>';?>
            <input type="number" class="valor3" id="valor3" name="quant3" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"> <?php        
        } else {
            echo '<img src="Rounded.svg" class="rou3">';
            echo "<img src='batata_frita.png' class='bat'>";?>
            <input type="hidden" class="batata" name="produto3" value="<?php echo $row_produto['nome'] ?>" >
            <input type="hidden" name="preco3" value="<?php echo $row_produto['preco'] ?>" >
            <input type="hidden" class="valor3" id="valor3" name="quant3" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"><?php
            echo '<label class="batata">'. $row_produto['nome'] .'</label>';
            echo '<label class="pre3">ESGOTADO</label>';
        }
    }

    if($row_produto['id_produto'] == 4){
        if($row_produto['quantidade'] != 0){
            echo '<img src="Rounded.svg" class="rou4">';
            echo "<img src='copo_refrigerante.png' class='ref'>";
            echo '<label class="refri">'. $row_produto['nome'] .'</label>';?>
            <input type="hidden" class="refri" name="produto4" value="<?php echo $row_produto['nome'] ?>" >
            <?php echo '<label class="pre4">R$'. $row_produto['preco'] .'</label>'; "<br>";?>
            <input type="hidden" class="pre4" name="preco4" value="<?php echo $row_produto['preco'] ?>" >
            <?php echo '<label class="quantd4">Quantidade Disponível:'. $row_produto['quantidade'] .'</label>';
            echo '<label class="quant4">Quantidade:</label>';?>
            <input type="number" class="valor4" id="valor4" name="quant4" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"> <?php
        } else {
            echo '<img src="Rounded.svg" class="rou4">';
            echo "<img src='copo_refrigerante.png' class='ref'>";?>
            <input type="hidden" class="refri" name="produto4" value="<?php echo $row_produto['nome'] ?>" >
            <input type="hidden" name="preco4" value="<?php echo $row_produto['preco'] ?>" >
            <input type="hidden" class="valor4" id="valor4" name="quant4" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"><?php
            echo '<label class="refri">'. $row_produto['nome'] .'</label>';
            echo '<label class="pre4">ESGOTADO</label>';
        }
    }

    if($row_produto['id_produto'] == 5){
        if($row_produto['quantidade'] != 0){
            echo '<img src="Rounded.svg" class="rou5">';
            echo "<img src='milk_shake.png' class='mil'>";
            echo '<label class="milk">'. $row_produto['nome'] .'</label>';?>
            <input type="hidden" class="milk" name="produto5" value="<?php echo $row_produto['nome'] ?>" >
            <?php echo '<label class="pre5">R$'. $row_produto['preco'] .'</label>'; "<br>";?>
            <input type="hidden" class="pre5" name="preco5" value="<?php echo $row_produto['preco'] ?>" >
            <?php echo '<label class="quantd5">Quantidade Disponível:'. $row_produto['quantidade'] .'</label>';
            echo '<label class="quant5">Quantidade:</label>';?>
            <input type="number" class="valor5" id="valor5" name="quant5" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"> <?php
        } else {
            echo '<img src="Rounded.svg" class="rou5">';
            echo "<img src='milk_shake.png' class='mil'>";?>
            <input type="hidden" class="milk" name="produto5" value="<?php echo $row_produto['nome'] ?>" >
            <input type="hidden" name="preco5" value="<?php echo $row_produto['preco'] ?>" >
            <input type="hidden" class="valor5" id="valor5" name="quant5" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"><?php
            echo '<label class="milk">'. $row_produto['nome'] .'</label>';
            echo '<label class="pre5">ESGOTADO</label>';
        }
    }

    if($row_produto['id_produto'] == 6){
        if($row_produto['quantidade'] != 0){
            echo '<img src="Rounded.svg" class="rou6">';
            echo "<img src='hamburguer.png' class='ham'>";
            echo '<label class="hamburguer">'. $row_produto['nome'] .'</label>';?>
            <input type="hidden" class="hamburguer" name="produto6" value="<?php echo $row_produto['nome'] ?>" >
            <?php echo '<label class="pre6">R$'. $row_produto['preco'] .'</label>'; "<br>";?>
            <input type="hidden" class="pre6" name="preco6" value="<?php echo $row_produto['preco'] ?>" >
            <?php echo '<label class="quantd6">Quantidade Disponível:'. $row_produto['quantidade'] .'</label>';
            echo  '<label class="quant6">Quantidade:</label>';?>
            <input type="number" class="valor6" id="valor6" name="quant6" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"> <?php
        } else {
            echo '<img src="Rounded.svg" class="rou6">';
            echo "<img src='hamburguer.png' class='ham'>";?>
            <input type="hidden" class="hamburguer" name="produto6" value="<?php echo $row_produto['nome'] ?>" >
            <input type="hidden" name="preco6" value="<?php echo $row_produto['preco'] ?>" >
            <input type="hidden" class="valor6" id="valor6" name="quant6" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"><?php
            echo '<label class="hamburguer">'. $row_produto['nome'] .'</label>';
            echo'<label class="pre6">ESGOTADO</label>'; "<br>";
        }
    }

    if($row_produto['id_produto'] == 7){
        if($row_produto['quantidade'] != 0){
            echo '<img src="Rounded.svg" class="rou7">';
            echo "<img src='sorvete.png' class='sor'>";
            echo '<label class="sorvete">'. $row_produto['nome'] .'</label>';?>
            <input type="hidden" class="sorvete" name="produto7" value="<?php echo $row_produto['nome'] ?>" >
            <?php echo '<label class="pre7">R$'. $row_produto['preco'] .'</label>'; "<br>";?>
            <input type="hidden" class="pre7" name="preco7" value="<?php echo $row_produto['preco'] ?>" >
            <?php echo '<label class="quantd7">Quantidade Disponível:'. $row_produto['quantidade'] .'</label>';
            echo  '<label class="quant7">Quantidade:</label>';?>
            <input type="number" class="valor7" id="valor7" name="quant7" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"> <?php
        } else {
            echo '<img src="Rounded.svg" class="rou7">';
            echo "<img src='sorvete.png' class='sor'>";?>
            <input type="hidden" class="sorvete" name="produto7" value="<?php echo $row_produto['nome'] ?>" >
            <input type="hidden" name="preco7" value="<?php echo $row_produto['preco'] ?>" >
            <input type="hidden" class="valor7" id="valor7" name="quant7" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"><?php
            echo '<label class="sorvete">'. $row_produto['nome'] .'</label>';
            echo'<label class="pre7">ESGOTADO</label>'; "<br>";
        }
    }

    if($row_produto['id_produto'] == 8){
        if($row_produto['quantidade'] != 0){
            echo '<img src="Rounded.svg" class="rou8">';
            echo "<img src='aneis_de_cebola.png' class='ane'>";
            echo '<label class="anel">'. $row_produto['nome'] .'</label>';?>
            <input type="hidden" class="anel" name="produto8" value="<?php echo $row_produto['nome'] ?>" >
            <?php echo'<label class="pre8">R$'. $row_produto['preco'] .'</label>'; "<br>";?>
            <input type="hidden" class="pre8" name="preco8" value="<?php echo $row_produto['preco'] ?>" >
            <?php echo '<label class="quantd8">Quantidade Disponível:'. $row_produto['quantidade'] .'</label>';
            echo  '<label class="quant8">Quantidade:</label>';?>
            <input type="number" class="valor8" id="valor8" name="quant8" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"> <?php
        } else {
            echo '<img src="Rounded.svg" class="rou8">';
            echo "<img src='aneis_de_cebola.png' class='ane'>";?>
            <input type="hidden" class="anel" name="produto8" value="<?php echo $row_produto['nome'] ?>" >
            <input type="hidden" name="preco8" value="<?php echo $row_produto['preco'] ?>" >
            <input type="hidden" class="valor8" id="valor8" name="quant8" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"><?php
            echo '<label class="anel">'. $row_produto['nome'] .'</label>';
            echo'<label class="pre8">ESGOTADO</label>'; "<br>";
        }
    }

    if($row_produto['id_produto'] == 9){
        if($row_produto['quantidade'] != 0){
            echo '<img src="Rounded.svg" class="rou9">';
            echo "<img src='balde_de_frango_frito.png' class='bal'>";
            echo '<label class="balde">'. $row_produto['nome'] .'</label>';?>
            <input type="hidden" class="balde" name="produto9" value="<?php echo $row_produto['nome'] ?>" >
            <?php echo '<label class="pre9">R$'. $row_produto['preco'] .'</label>'; "<br>";?>
            <input type="hidden" class="pre9" name="preco9" value="<?php echo $row_produto['preco'] ?>" >
            <?php echo '<label class="quantd9">Quantidade Disponível:'. $row_produto['quantidade'] .'</label>';
            echo '<label class="quant9">Quantidade:</label>';?>
            <input type="number" class="valor9" id="valor9" name="quant9" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"> <?php
        } else {
            echo '<img src="Rounded.svg" class="rou9">';
            echo "<img src='balde_de_frango_frito.png' class='bal'>";?>
            <input type="hidden" class="balde" name="produto9" value="<?php echo $row_produto['nome'] ?>" >
            <input type="hidden" name="preco9" value="<?php echo $row_produto['preco'] ?>" >
            <input type="hidden" class="valor9" id="valor9" name="quant9" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"><?php
            echo '<label class="balde">'. $row_produto['nome'] .'</label>';
            echo'<label class="pre9">ESGOTADO</label>'; "<br>";
        }
    }

    if($row_produto['id_produto'] == 10){
        if($row_produto['quantidade'] != 0){
            echo '<img src="Rounded.svg" class="rou10">';
            echo "<img src='combo.png' class='com'>";
            echo '<label class="combo">'. $row_produto['nome'] .'</label>';?>
            <input type="hidden" class="combo" name="produto10" value="<?php echo $row_produto['nome'] ?>" >
            <?php echo'<label class="pre10">R$'. $row_produto['preco'] .'</label>'; "<br>";?>
            <input type="hidden" class="pre10" name="preco10" value="<?php echo $row_produto['preco'] ?>" >
            <?php echo '<label class="quantd10">Quantidade Disponível:'. $row_produto['quantidade'] .'</label>';
            echo '<label class="quant10">Quantidade:</label>';?>
            <input type="number" class="valor10" id="valor10" name="quant10" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"> <?php
        } else {
            echo '<img src="Rounded.svg" class="rou10">';
            echo "<img src='combo.png' class='com'>";?>
            <input type="hidden" class="combo" name="produto10" value="<?php echo $row_produto['nome'] ?>" >
            <input type="hidden" name="preco10" value="<?php echo $row_produto['preco'] ?>" >
            <input type="hidden" class="valor10" id="valor10" name="quant10" value="0" min="0" max="<?php echo $row_produto['quantidade'] ?>"><?php
            echo '<label class="combo">'. $row_produto['nome'] .'</label>';
            echo'<label class="pre10">ESGOTADO</label>'; "<br>";
        }
    }
}

?>
<button type="buttom" class="fec" id="btn_pedido">Fechar Pedido</button>
</form>
<a href="../login_cliente/sair_cliente.php"><button class="canc">Cancelar Pedido</button></a>
</body>
</html>