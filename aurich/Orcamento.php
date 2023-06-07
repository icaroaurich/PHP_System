<!DOCTYPE html>

<?php
    include('conexao.php');

    $QueryOrcAtual = "select id from orcamentos order by id desc limit 1";
    $GetQueryOrcAtual = mysqli_query($conexao,$QueryOrcAtual);
    $row = mysqli_fetch_assoc($GetQueryOrcAtual);
    $idOrc = $row["id"];
    ?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="teste01.css">
    <title>Icaro WEB PHP</title>
</head>

<body>
    <h1>Aurich Sistema - Painel // <a class = "red" href="painel.php" ><strong>VOLTAR</strong></a></h1>
    <h2>Adicionar produto no orçamento <?php echo $idOrc ?></h2>

    

    <form action="addProdutoOrcamento.php" method="POST">
            <a>Número do produto</a>
            <input name="nuProduto" name="text" autofocus="">
            <br>
            <a>Quantidade</a>
            <input name="qt" name="text">
            <br><br>
            <button type="submit">Adicionar Produto no orçamento</button>
        </form>

    <form action="vendas.php" method="POST">
            <button type="submit">Fechar Orçamento</button>
        </form>
    <?php
    
        echo ' 
            <table>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>NOME</b></td>
                    <td><b>Preço</b></td>
                    <td><b>Quantidade</b></td>
                </tr>
            </table>
        ';      

        $QueryGetProdutos = "select id_prod, produtos.nome, prod_preco, quantidade from orc_pro inner join produtos ON orc_pro.id_prod = produtos.id  where id_orc = '{$idOrc}';";
        $QueryGetProdutosResult = mysqli_query($conexao,$QueryGetProdutos);
        while($row = mysqli_fetch_assoc($QueryGetProdutosResult)) {

            echo "<table>
            <td>".$row["id_prod"].
            "<td>".$row["nome"].
            "<td>".$row["prod_preco"].
            "<td>".$row["quantidade"].
            "</td></table>"."<br>";
        }
    ?>
</body>
</html>