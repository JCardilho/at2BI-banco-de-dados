<?php

include("../../../utils/verificar_login.php");
include("../../../conexao.php");
verificar_admin();

$nome = $_POST['nome'];
$qtde_estoque = $_POST['qtde_estoque'];
$valor_unitario = $_POST['valor_unitario'];
$unidade_medida = $_POST['unidade_medida'];


$sql_criar_produto = "UPDATE produto SET nome='$nome', qtde_estoque='$qtde_estoque', valor_unitario='$valor_unitario', unidade_medida='$unidade_medida' WHERE id = " . $_GET['id'] . "";

if (mysqli_query($con, $sql_criar_produto)) {
    header("Location: ../produtos.php");
} else {
    echo "Erro: " . mysqli_error($con);
}
