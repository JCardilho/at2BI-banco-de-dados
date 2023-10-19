<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'at2bimestre';

$con = mysqli_connect($servidor, $usuario, $senha, $db);

if (!$con) {
    print("Erro na conexão com Mysql");
    print("Erro: " . mysqli_connect_error());
    exit;
}
