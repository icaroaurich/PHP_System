<?php
    include('conexao.php');
    
    $nuCliente = mysqli_real_escape_string($conexao, $_POST['nuCliente']);
    $insert = "INSERT INTO orcamentos (id_cliente) VALUES ('{$nuCliente}');";
    mysqli_query($conexao,$insert);

    
    //echo $idOrc;    

    header('location : Orcamento.php')
    ?>