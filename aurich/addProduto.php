<?php 
session_start();
include('conexao.php');

$nomeProduto = mysqli_real_escape_string($conexao, $_POST['nomeProduto']);
$preco = mysqli_real_escape_string($conexao, $_POST['preco']);

$insert = "INSERT INTO produtos (nome,preco) VALUES ('{$nomeProduto}',{$preco});";
mysqli_query($conexao,$insert);

header('location : cadastros.php')

?>
