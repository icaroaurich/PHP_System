<?php 
session_start();
include('conexao.php');

$nomeCliente = mysqli_real_escape_string($conexao, $_POST['nomeCliente']);
$CPF = mysqli_real_escape_string($conexao, $_POST['CPF']);

$insert = "INSERT INTO clientes (nome,CPF) VALUES ('{$nomeCliente}','{$CPF}');";
//echo $insert;
mysqli_query($conexao,$insert);

header('location : clientes.php')

?>
