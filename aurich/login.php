<?php
session_start();
include('conexao.php');

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select * from usuarios where nome='{$usuario}' and senha='{$senha}'";
$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);

if ($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('location : painel.php');
}
else{
    header('location : index.php');
};