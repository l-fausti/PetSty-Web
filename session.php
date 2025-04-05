<?php
session_start();
$nome = isset($_SESSION['nome_session'])?$_SESSION['nome_session']:"";
$email = isset($_SESSION ['email_session'])?$_SESSION['email_session']:"";
$nivel = isset($_SESSION ['senha_session'])?$_SESSION['senha_session']:"";

?>