<?php
include "session.php";
if ($email != ""){
  header("location:ja_tem_conta.php");
}


$msg = isset($_GET['mensagem'])?$_GET['mensagem']:"";
function mensagem($texto){
    echo "<div id=mensagem>";
    echo "<p id='campos_vazio'>$texto</p>";
    echo "</div>";
}

if($msg != ""){
  mensagem("Atenção! Campos vazios!");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet">
    <link href="styles/media.css" rel="stylesheet">
    
    <title>Landing Page</title>
</head>
<body>
    <header>
        <div id="title">
                <a href="index.php" id="link-titulo1"><h1>Esse lugar é</h1></a>
                <a href="index.php" id="link-titulo2"><h1>O bicho🐶</h1></a>
        </div><!--title-->

        <ul>
            <a href="index.php" id="inscreva-se-btn"><li>Início</li></a>
        </ul>
    </header>

    <main>
        <aside>
            <h2><span>Bem-vindo(a)</span></h2>
            <h2>ao Petsty!</h2>
            <p>Aqui, você encontra tudo o que seu amigo de quatro patas precisa para uma vida cheia de saúde, conforto e diversão. 
            </p>
                 
          <form action="logar.php" method="post">
            <input type="email" name = "email" id="email_login" placeholder="E-mail" name="email_login">
            <input type="password" name = "senha" id = "senha_login" placeholder="Senha" name="senha_login">
            <input id="botao" type="submit" value="Enviar">
            <a href="form_cadastro.php"><strong>Criar conta</strong></a>
          </form>

        </aside>

        <article>
            <img src="components/imagens/dogzin.png" alt="homen-com-cachorro">
        </article>

    </main>