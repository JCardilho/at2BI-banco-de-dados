<?php

require("../conexao.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

$procurar_login = "SELECT * FROM login_usuarios WHERE login = '$login'";

$result_query = mysqli_query($con, $procurar_login);
if (mysqli_num_rows($result_query) == 0) {
    print("Credenciais invalidas");
    return;
}

$usuario = mysqli_fetch_assoc($result_query);

if (md5($senha) != $usuario['senha']) {
    print("Credenciais invalidas");
    return;
}

session_start();

$_SESSION['id'] = $usuario['id_cliente'];
$_SESSION['admin'] = $usuario['admin'];

if ($usuario['logado'] == 0) {
    return header("Location: ../usuario/primeiro_login.php");
}

header("Location: ../index.php");
