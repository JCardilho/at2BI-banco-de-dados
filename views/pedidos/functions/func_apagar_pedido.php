<?php
include("../../../utils/verificar_login.php");
include("../../../conexao.php");
verificar_admin();

// Use $_POST em vez de $_GET
$id = $_POST['id_pedido'];

// Use prepared statement para evitar SQL injection
$sql_apagar_pedido = "DELETE FROM pedidos WHERE id = ?";
$stmt = mysqli_prepare($con, $sql_apagar_pedido);

// Vincule o parâmetro
mysqli_stmt_bind_param($stmt, "i", $id);

// Execute a consulta
if (mysqli_stmt_execute($stmt)) {
    header("Location: ../pedidos");
} else {
    echo "Erro: " . mysqli_error($con);
}

// Feche o statement
mysqli_stmt_close($stmt);

// Feche a conexão
mysqli_close($con);
?>
