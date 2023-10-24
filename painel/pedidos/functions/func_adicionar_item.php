<?php
include("../../../utils/verificar_login.php");
include("../../../conexao.php");
verificar_admin();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pedido = $_POST['id_pedido'];
    $id_produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];

    
    $sql_verificar_estoque = "SELECT qtde_estoque FROM produto WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql_verificar_estoque);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id_produto);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_bind_result($stmt, $qtde_estoque_atual);
        mysqli_stmt_fetch($stmt);

        if ($qtde_estoque_atual >= $quantidade) {
            $nova_quantidade_estoque = $qtde_estoque_atual - $quantidade;
            $sql_atualizar_estoque = "UPDATE produto SET qtde_estoque = ? WHERE id = ?";
            $stmt_atualizar_estoque = mysqli_prepare($con, $sql_atualizar_estoque);

            if ($stmt_atualizar_estoque) {
                mysqli_stmt_bind_param($stmt_atualizar_estoque, "ii", $nova_quantidade_estoque, $id_produto);
                mysqli_stmt_execute($stmt_atualizar_estoque);

        
                $sql_adicionar_item = "INSERT INTO itens_pedido (id_pedido, id_produto, qtde) VALUES (?, ?, ?)";
                $stmt_adicionar_item = mysqli_prepare($con, $sql_adicionar_item);

                if ($stmt_adicionar_item) {
                    mysqli_stmt_bind_param($stmt_adicionar_item, "iii", $id_pedido, $id_produto, $quantidade);
                    mysqli_stmt_execute($stmt_adicionar_item);

                    header("Location: ../pedidos.php");
                    exit();
                } else {
                    echo "Erro ao preparar a declaração de inserção: " . mysqli_error($con);
                }
            } else {
                echo "Erro ao preparar a declaração de atualização de estoque: " . mysqli_error($con);
            }
        } else {
            echo "Quantidade indisponível em estoque.";
        }

        mysqli_stmt_close($stmt);
        mysqli_stmt_close($stmt_atualizar_estoque);
        mysqli_stmt_close($stmt_adicionar_item);
    } else {
        echo "Erro na preparação da consulta: " . mysqli_error($con);
    }
} else {
    echo "Método de requisição inválido.";
}
?>
