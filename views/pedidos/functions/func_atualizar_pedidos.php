<?php

include("../../../common/config.php");

$id_pedido = $_POST['id_pedido'];
$id = $_POST['id'];
$observacao = $_POST['observacao'];
$cond_pagamento = $_POST['cond_pagamento'];
$prazo_entrega = $_POST['prazo_entrega'];

$sql_atualizar_pedido = "UPDATE pedidos SET observacao = '$observacao', cond_pagamento = '$cond_pagamento', prazo_entrega = '$prazo_entrega' WHERE id = '$id'";
if (mysqli_query($conexao, $sql_atualizar_pedido)) {
    header("Location: ../cadastrar_item_pedidos.php?id=$id_pedido");
} else {
    echo "Erro: " . mysqli_error($con);
}
