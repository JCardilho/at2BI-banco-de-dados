<?php
include("../../common/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./pedidos">Voltar</a><br />
    <form action="./functions/func_criar_pedido.php" method="post">
        <input type='date' placeholder="Data" id="data_pedido" name="data_pedido"><br />
        <input type='number' placeholder="Id do cliente" id="id_cliente" name="id_cliente"><br />
        <input type='text' placeholder="Observação" id="observacao" name="observacao"><br />
        <input type='text' placeholder="Condição do pagamento" id="cond_pagamento" name="cond_pagamento"><br />
        <input type='text' placeholder="Prazo de entrega" id="prazo_entrega" name="prazo_entrega"><br />
        <button type="submit">Salvar pedido</button>
    </form>

   
</body>

</html>