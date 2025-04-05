<?php
include "connection.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$confSenha = $_POST['confirm_senha'];


if($nome == "" || $email == "" || $telefone == "" || $senha == ""){
    header("location:form_cadastro.php?mensagem=1");
}
else{

    $consulta = $conn->query("SELECT * FROM usuarios WHERE email_usuario = '$email'");
    $resultado_consulta = $consulta->fetch(PDO::FETCH_ASSOC);
    if($resultado_consulta){
        header("location:form_cadastro.php?mensagem=2");
    }
    else if($senha != $confSenha){
        header("location:form_cadastro.php?mensagem=3");
    }
    else if($senha == $confSenha){
        $sql = $conn->query("INSERT INTO usuarios(nome_usuario,email_usuario,cel_usuario,senha_usuario)VALUES
                          ('$nome','$email','$telefone','$senha')");
                        
        echo "<main>";
        echo "<p class=text_center>Usuário cadastrado com sucesso!";
        echo "<a href=index.php>Logar</a></p>";
        echo "</main>";
    }
    
    
}

?>