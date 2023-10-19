<?php
include("../../utils/verificar_login.php");
include("../../conexao.php");
verificar_admin();
?>


<!DOCTYPE html>
<html lang="en">

<?php


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
    <form action="./functions/func_criar_produto.php" method="post">
        <input type='text' placeholder="nome" id="nome" name="nome"></input><br />
        <input type='text' placeholder="quantidade" id="qtde_estoque" name="qtde_estoque"></input><br />
        <input type='text' placeholder="valor por unidade" id="valor_unitario" name="valor_unitario"></input><br />
        <select id="unidade_medida" name="unidade_medida">
            <option value='kg'>kg</option>
            <option value='g'>g</option>
            <option value='l'>l</option>
            <option value='ml'>ml</option>
            <option value='un'>un</option>
        </select><br />
        <button type="submit"> Cadastrar produto</button>
    </form>
</body>

</html>