<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../../cabecalho.php");
    getCabecalho();
    ?>
    <title>Criar Pedido</title>
</head>

<body>
    <a href="./painel.php">Voltar</a><br />
    <form action="./functions/func_criar_pedido.php" method="post">
        <input type='date' placeholder="Data" id="data_pedido" name="data_pedido"><br />
        <input type='number' placeholder="Id do cliente" id="id_cliente" name="id_cliente"><br />
        <input type='text' placeholder="Observação" id="observacao" name="observacao"><br />
        <input type='text' placeholder="Condição do pagamento" id="cond_pagto" name="cond_pagto"><br />
        <input type='text' placeholder="Prazo de entrega" id="prazo_entrega" name="prazo_entrega"><br />
        <button type="submit">Salvar pedido</button>
    </form>

    <!-- Campo para adicionar item ao pedido -->
    <div>
        <form action="./functions/func_adicionar_item.php" method="post">
            <input type="hidden" name="id_pedido" value="<?php echo $id_pedido; ?>">
            <label for="produto">Produto:</label>
            <input type="text" id="produto" name="produto" placeholder="Nome ou ID do Produto">
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade">
            <button type="submit" id="btnAdicionarItem">Adicionar Item</button>
        </form>
    </div>
</body>

</html>
