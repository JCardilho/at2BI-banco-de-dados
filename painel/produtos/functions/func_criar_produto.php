<?php

include("../../../utils/verificar_login.php");
include("../../../conexao.php");
verificar_admin();

$nome = $_POST['nome'];
$qtde_estoque = $_POST['qtde_estoque'];
$valor_unitario = $_POST['valor_unitario'];
$unidade_medida = $_POST['unidade_medida'];


$sql_criar_produto = "INSERT INTO produto (nome, qtde_estoque, valor_unitario, unidade_medida) VALUES ('$nome', '$qtde_estoque', '$valor_unitario', '$unidade_medida')";

if (mysqli_query($con, $sql_criar_produto)) {
    header("Location: ../produtos.php");
} else {
    echo "Erro: " . mysqli_error($con);
}

?>

