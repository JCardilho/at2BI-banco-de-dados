
<?php

include("../../../common/config.php");

$id_item = $_GET['id_item'];
$id_pedido = $_GET['id_pedido'];
$id_produto = $_GET['id_produto'];
$qtde = $_GET['qtde'];

$sql_apagar_item_pedido = "DELETE FROM itens_pedido WHERE id_item = '$id_item'";
$sql_selecionar_produto = "SELECT * FROM produto WHERE id = '$id_produto'";

$result = mysqli_query($conexao, $sql_selecionar_produto);

if ($row = mysqli_fetch_assoc($result)) {
    $quantidade = $row['qtde_estoque'];

    $nova_quantidade = $qtde + $quantidade;

    $sql_update_produto =  "UPDATE produto SET qtde_estoque = '$nova_quantidade' WHERE id = '$id_produto'";
    mysqli_query($conexao, $sql_update_produto);
}

if (mysqli_query($conexao, $sql_apagar_item_pedido)) {
    header("Location: ../cadastrar_item_pedidos.php?id=$id_pedido");
} else {
    echo "Erro: " . mysqli_error($con);
}

mysqli_close($conexao);

?>
