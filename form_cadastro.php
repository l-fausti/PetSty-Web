<?php
$msg = isset($_GET['mensagem'])?$_GET['mensagem']:"";
function mensagem($texto){
    echo "<div id=mensagem>";
    echo "<p>$texto</p>";
    echo "</div>";
    echo "<p onclick=closeMessage() id=fechar>X</p>";
}

if($msg != ""){
    if($msg == 1)
    mensagem("Atenção! Campos vazios!");
    if($msg == 2)
    mensagem("Atenção! E-mail já cadastrado!");
    if($msg == 3)
    mensagem("Atenão! Senhas não conferem!");
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Petsty</title>
    <link href="styles/login.css" rel="stylesheet">
    <link href="styles/cadastro2.css" rel="stylesheet">
    <script src="scripts/fechar.js" defer></script>
    <!-- <link rel="stylesheet" href="styles/cadastro2.css"> -->
    
</head>
<body>
    <header>
        <div id="titulo">
            <a href="index.php" id=><h1>Petsty</h1></a>
    </div>
    </header>

    <nav>
        <main id="container_login">
            <form action="cadastrar.php" method="post">
                <h1>Crie sua conta</h1>
                <input type="text" name="nome" placeholder="Digite seu nome e sobrenome">
                <input type="email" name="email" placeholder="Digite seu e-mail">
                <input type="text" name="telefone"  placeholder= "Telefone">
                <!-- <input type="text" name="telefone"  placeholder= "Telefone"> -->
                <input id="senha1" type="password" name="senha" placeholder="Senha">
                <input id="senha2" type="password" name="confirm_senha" placeholder="Confirmar senha">
                <input id="botao_cadastro" type="submit" value="Cadastrar">
                <!-- <input id="botao" type="submit" value="Cadastrar"> -->
            </form>
        
            <p><a id="voltar_login" href="ja_tem_conta.php">Logar</a></p>
        </main>

        <aside>
            <span><h2>Cadastre-se agora na Petsty!</h2></span>
            <p>No nosso Pet Shop, cuidamos do seu melhor amigo como se ele fosse nosso!</p>
        </aside>
    </nav>
   
</body>
</html>