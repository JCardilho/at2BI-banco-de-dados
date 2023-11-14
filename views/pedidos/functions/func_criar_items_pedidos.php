<?php

include("../../../common/config.php");

$id_pedido = $_POST['id_pedido'];
$id_produto = $_POST['select-item'];
$quantidade = $_POST['quantidade'];

$verificar_quantidade_produto_sql = "SELECT * FROM produto WHERE id = '$id_produto' ";
$verificar_produto_existente = "SELECT * FROM itens_pedido WHERE id_pedido = '$id_pedido' AND id_produto = '$id_produto'";
$verificar_quantidade_produto_query = mysqli_query($conexao, $verificar_quantidade_produto_sql);
$verificar_produto_existente_query = mysqli_query($conexao, $verificar_produto_existente);

if (!$verificar_produto_existente_query || !$verificar_quantidade_produto_query) {
    echo "Erro: " . mysqli_error($con);
    exit();
}

$row = mysqli_fetch_assoc($verificar_quantidade_produto_query);
$qtde_estoque = $row['qtde_estoque'];

if ($qtde_estoque < $quantidade) {
    echo "Quantidade indisponível";
    echo '
    <script>alert("Quantidade indisponivel");
    window.location.href = "../cadastrar_item_pedidos.php?id=' . $id_pedido . '";
    </script> ';
    exit();
}


if (!mysqli_num_rows($verificar_produto_existente_query) > 0) {
    $sql_criar_item_pedido = "INSERT INTO itens_pedido (id_pedido, id_produto, qtde) VALUES ('$id_pedido', '$id_produto', '$quantidade');";
    mysqli_query($conexao, $sql_criar_item_pedido);
} else {
    $row_verificar_produto_existente = mysqli_fetch_assoc($verificar_produto_existente_query);
    $quantidade_nova = $row_verificar_produto_existente['qtde'] + $quantidade;
    $sql_atualizar_item_pedido = "UPDATE itens_pedido SET qtde = '$quantidade_nova' WHERE id_pedido = '$id_pedido' AND id_produto = '$id_produto'";
    mysqli_query($conexao, $sql_atualizar_item_pedido);
}

$nova_quantidade_no_estoque = $qtde_estoque - $quantidade;
$sql_atualizar_produto = "UPDATE produto SET qtde_estoque = '$nova_quantidade_no_estoque' WHERE id = '$id_produto'";

if (mysqli_query($conexao, $sql_atualizar_produto)) {
    header("Location: ../cadastrar_item_pedidos.php?id=$id_pedido");
} else {
    echo "Erro: " . mysqli_error($con);
}

mysqli_close($conexao);
