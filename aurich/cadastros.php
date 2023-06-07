<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="teste01.css">
    <title>Icaro WEB PHP</title>
</head>

<body>
    <h1>Aurich Sistema - Cadastros // <a class = "red" href="painel.php" ><strong>VOLTAR</strong></a></h1>
    <h2>Cadastrar produto</h2>

    <form action="addProduto.php" method="POST">
            <a>Nome do produto</a>
            <input name="nomeProduto" name="text" autofocus="">
            <br>
            <a>Preço do produto</a>
            <input name="preco" name="text">
            <br></br>
            <button type="submit">Adicionar Produto</button>
        </form>
    <?php
    include('conexao.php');
        echo ' 
            <table>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Nome</b></td>
                    <td><b>Preço</b></td>
                </tr>
            </table>
        ';      

        $QueryGetProdutos = "select id, nome, preco from produtos;";
        $QueryGetProdutosResult = mysqli_query($conexao,$QueryGetProdutos);
        while($row = mysqli_fetch_assoc($QueryGetProdutosResult)) {

            echo "<table><td>".$row["id"]."<td>".$row["nome"]."<td>".$row["preco"]."</td></table>"."<br>";
        }
    ?>
</body>
</html>