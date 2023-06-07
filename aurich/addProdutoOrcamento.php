<?php 
session_start();
include('conexao.php');

$QueryOrcAtual = "select id from orcamentos order by id desc limit 1";
$GetQueryOrcAtual = mysqli_query($conexao,$QueryOrcAtual);
$row = mysqli_fetch_assoc($GetQueryOrcAtual);
$idOrc = $row["id"];

$id_prod = mysqli_real_escape_string($conexao, $_POST['nuProduto']);
//$prod_preco = mysqli_real_escape_string($conexao, $_POST['preco']);

$QueryValPro = "select preco from produtos where id='{$id_prod}'";
$GetQueryValPro = mysqli_query($conexao,$QueryValPro);
$row = mysqli_fetch_assoc($GetQueryValPro);
$prod_preco = $row["preco"];

$quantidade = mysqli_real_escape_string($conexao, $_POST['qt']);

$insert = "INSERT INTO orc_pro (id_prod,id_orc,prod_preco,quantidade) VALUES ('{$id_prod}','{$idOrc}','{$prod_preco}','{$quantidade}');";
//echo $insert;
mysqli_query($conexao,$insert);

header('location : addOrcamento.php')

?>
