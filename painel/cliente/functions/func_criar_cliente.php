<?php

include("../../../utils/verificar_login.php");
include("../../../conexao.php");
verificar_admin();

$id = $row['id'];
$nome = $row['nome'];
$endereco = $row['endereco'];
$numero = $row['numero'];
$bairro = $row['bairro'];
$cidade = $row['cidade'];
$estado = $row['estado'];
$email = $row['email'];
$cpf_cnpj = $row['cpf_cnpj'];
$rg = $row['rg'];
$telefone = $row['telefone'];
$celular = $row['celular'];
$data_nasc = $row['data_nasc'];

$sql_criar_cliente = "INSERT INTO clientes (nome, endereco, numero, bairro, cidade, estado, email, cpf_cnpj, rg, telefone, celular, data_nasc) VALUES ('$nome', '$endereco', '$bairro', '$cidade', '$estado', '$email', '$cpf_cnpj', '$rg', '$telefone', '$celular, '$data_nasc')";

if (mysqli_query($con, $sql_criar_cliente)) {
    header("Location: ../produtos.php");
} else {
    echo "Erro: " . mysqli_error($con);
}

?>

