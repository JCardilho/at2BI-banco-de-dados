<?php
require("../../conexao.php");

$atualizar = $_GET['atualizar'];
$login = $_POST['login'];
$senha = $_POST['senha'];

session_start();

if ($atualizar == 'true') {
    if (!$login) {
        return header("Location: ../usuario/primeiro_login/index.php");
    }

    if (!$senha) {
        return header("Location: ../usuario/primeiro_login/index.php");
    }

    $senha_criptografada = md5($senha);
    $atualizar_login_sql = "UPDATE login_usuarios SET login = '$login', senha = '$senha_criptografada', logado = 1 WHERE id_cliente = " . $_SESSION['id'];


    $result_query = mysqli_query($con, $atualizar_login_sql);
} else {
    $atualizar_login_sql = "UPDATE login_usuarios SET logado = 1 WHERE id_cliente = " . $_SESSION['id'];
    $result_query = mysqli_query($con, $atualizar_login_sql);
}


header("Location: ../../index.php");
