<?php
include "connection.php";
$senha = $_POST['senha'];
$email = $_POST['email'];

if($senha == "" || $email == ""){
    header("location:ja_tem_conta.php?mensagem=1");
    // header("location:ja_tem_conta.php?mensagem=1");
}
else{

    $consulta = $conn->query("SELECT * FROM usuarios WHERE email_usuario = '$email' and senha_usuario = '$senha'");
    $resultado_consulta = $consulta->fetch(PDO::FETCH_ASSOC);
    if($resultado_consulta){
        session_start();
        $_SESSION['nome_session'] = $resultado_consulta['nome_usuario'];
        $_SESSION ['email_session'] = $email;
        $_SESSION ['senha_session'] = $senha;

        header("location:index.php");
    }
    
    
}

?>