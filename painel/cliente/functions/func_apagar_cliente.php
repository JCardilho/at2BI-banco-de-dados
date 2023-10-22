<?php

include("../../../utils/verificar_login.php");
include("../../../conexao.php");
verificar_admin();

$id = $_GET['id'];


$sql_criar_cliente = "DELETE FROM clientes WHERE id = $id";

if (mysqli_query($con, $sql_criar_cliente)) {
    header("Location: ../cliente.php");
} else {
    echo "Erro: " . mysqli_error($con);
}
