<!DOCTYPE html>
<?php include('conexao.php'); ?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="teste01.css">
    <title>Icaro WEB PHP</title>
    </head>

<body>
    <h1>Aurich Sistema - Relatório // <a class = "red" href="painel.php" ><strong>VOLTAR</strong></a></h1>
    <?php
    
        echo ' 
            <table>
                <tr>
                    <td><b>VENDA</b></td>
                    <td><b>CLIENTE</b></td>
                    <td><b>ID PRODUTO</b></td>
                    <td><b>PRODUTO</b></td>
                    <td><b>PRECO</b></td>
                    <td><b>QUANTIDADE</b></td>
                </tr>
            </table>
        ';      

        $QueryGetProdutos = "select orcamentos.id,clientes.nome as cliente,id_prod, produtos.nome, prod_preco, quantidade from orc_pro
        inner join produtos ON orc_pro.id_prod = produtos.id
        inner join orcamentos ON orc_pro.id_orc = orcamentos.id
        inner join clientes ON orcamentos.id_cliente = clientes.id
        order by id desc";
        $QueryGetProdutosResult = mysqli_query($conexao,$QueryGetProdutos);
        while($row = mysqli_fetch_assoc($QueryGetProdutosResult)) {

            echo "<table>
            <td>00000".$row["id"].
            "<td>____".$row["cliente"].
            "<td>0000.0000.00".$row["id_prod"].
            "<td>______".$row["nome"].
            "<td>00000".$row["prod_preco"].
            "<td>000000000000".$row["quantidade"].
            "</td></table>"."<br>";
        }
    ?>
</body>
</html>