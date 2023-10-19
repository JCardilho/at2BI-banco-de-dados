<?php

require("../conexao.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$procurar_login = "SELECT * FROM login_usuarios WHERE login = '$login'";

$result_query = mysqli_query($con, $procurar_login);
if (mysqli_num_rows($result_query) == 0) {
    print("Login não encontrado");
    return;
}

$usuario = mysqli_fetch_assoc($result_query);

if (md5($senha) != $usuario['senha']) {
    print("Senha incorreta");
    return;
}

session_start();

$_SESSION['id'] = $usuario['id_cliente'];
$_SESSION['admin'] = $usuario['admin'];

header("Location: ../index.php");
