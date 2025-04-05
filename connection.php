<?php
$server = "VPR0681555W11-1\SQLEXPRESS";
$banco = "db_petsty";
$user = "sa";
$pass = "123456";

try{
   $conn = new PDO("sqlsrv:server=$server;Database=$banco",$user,$pass);
}catch(PDOException $e){
    echo $e->getMessage();
}

?>