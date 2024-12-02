<?php
$hostname = "localhost";
$username = "root";
$password = "2013028130";
$database = "teste";
$conexao = new mysqli($hostname, $username, $password, $database);
if(!$conexao){
    die("Erro na conexão com o Banco de Dados:" . mysqli_connect_errno()); 
}
    else{
        echo "Conexão bem sucedida";
    }
?>