<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="teste01.css">
    <title>Icaro WEB PHP</title>
</head>

<body>
    <h1>Aurich Sistema - Clientes // <a class = "red" href="painel.php" ><strong>VOLTAR</strong></a></h1>
    <h2>Cadastrar Cliente</h2>

    <form action="addCliente.php" method="POST">
            <a>Nome do cliente</a>
            <input name="nomeCliente" name="text" autofocus="">
            <br>
            <a>CPF do cliente</a>
            <input name="CPF" name="text"><br>
            <a>(apenas números)</a>
            <br></br>
            <button type="submit">Adicionar Cliente</button>
        </form>

    <?php
    include('conexao.php');
        echo ' 
            <table>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Nome</b></td>
                    <td><b>CPF</b></td>
                </tr>
            </table>
        ';      

        $QueryGetProdutos = "select id, nome, CPF from clientes;";
        $QueryGetProdutosResult = mysqli_query($conexao,$QueryGetProdutos);
        while($row = mysqli_fetch_assoc($QueryGetProdutosResult)) {

            echo "<table><td>0".$row["id"]."<td>".$row["nome"]."<td>".$row["CPF"]."</td></table>"."<br>";
        }
    ?>
</body>
</html>