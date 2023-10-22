<?php

include("../../../utils/verificar_login.php");
include("../../../conexao.php");
verificar_admin();

$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado =$_POST['estado'];
$email = $_POST['email'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$data_nasc =$_POST['data_nasc'];



$sql_criar_cliente = "UPDATE clientes SET nome='$nome', endereco='$endereco', bairro='$bairro', cidade='$cidade', estado='$estado', email='$email', cpf_cnpj='$cpf_cnpj', rg='$rg', telefone='$telefone', celular='$celular', data_nasc='$data_nasc' WHERE id = " . $_GET['id'] . "";

if (mysqli_query($con, $sql_criar_cliente)) {
    header("Location: ../cliente.php");
} else {
    echo "Erro: " . mysqli_error($con);
}
