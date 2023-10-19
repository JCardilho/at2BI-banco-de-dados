<?php

include("../../../utils/verificar_login.php");
include("../../../conexao.php");
verificar_admin();

$id = $_GET['id'];


$sql_criar_produto = "DELETE FROM produto WHERE id = $id";

if (mysqli_query($con, $sql_criar_produto)) {
    header("Location: ../produtos.php");
} else {
    echo "Erro: " . mysqli_error($con);
}
