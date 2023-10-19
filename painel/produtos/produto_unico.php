<?php
include("../../utils/verificar_login.php");
include("../../conexao.php");
verificar_admin();
?>


<!DOCTYPE html>
<html lang="en">

<?php

$sql_procurar_produtos = "SELECT * FROM produto WHERE id = " . $_GET['id'];

$result_query = mysqli_query($con, $sql_procurar_produtos);

$row = mysqli_fetch_assoc($result_query);
$id = $row['id'];
$nome = $row['nome'];
$qtde_estoque = $row['qtde_estoque'];
$valor_unitario = $row['valor_unitario'];
$unidade_medida = $row['unidade_medida'];

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../../cabecalho.php");


    getCabecalho();
    ?>
    <title>Document</title>
</head>


<body>
    <a href="./produtos.php">Voltar</a><br />
    <p>Produto: </p>
    <ul>
        <?php
        echo "
                <form action='./functions/func_atualizar_produto.php?id=$id' method='post'>
                    <input type='text' value='$nome' placeholder='nome' id='nome' name='nome'></input><br/>
                    <input type='text' value='$qtde_estoque' placeholder='quantidade' id='qtde_estoque' name='qtde_estoque'></input><br/>
                    <input type='text' value='$valor_unitario'  placeholder='valor por unidade' id='valor_unitario' name='valor_unitario'></input><br/>
                    <select value='$unidade_medida' id='unidade_medida' name='unidade_medida'>
                        <option value='kg'>kg</option>
                        <option value='g'>g</option>
                        <option value='l'>l</option>
                        <option value='ml'>ml</option>
                        <option value='un'>un</option>
                    </select><br/>

            
                    <button type='submit'>Atualizar</button>
                </form>

                <a href='./functions/func_apagar_produto.php?id=$id' type='text'>Deletar</a>
            ";

        ?>
    </ul>
</body>

</html>