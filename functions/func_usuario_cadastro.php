<?php
require("../conexao.php");

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$data_nasc = $_POST['data_nasc'];


function ErrorMessage(string $message)
{
    echo '<h2 class="title cor-destaque">ERRO AO CADASTRAR:' . $message . '</h2>';
    return;
}

if (!$nome)  return ErrorMessage("Nome não informado");
if (!$email)  return ErrorMessage("Email não informado");
if (!$cpf_cnpj)  return ErrorMessage("CPF/CNPJ não informado");
if (!$rg)  return ErrorMessage("RG não informado");
if (!$celular)  return ErrorMessage("Celular não informado");
if (!$data_nasc)  return ErrorMessage("Data de nascimento não informado");


$sql = "
INSERT INTO clientes (nome, endereco, numero, bairro, cidade, estado, email, cpf_cnpj, rg, telefone, celular, data_nasc) 
VALUES ('$nome', '$endereco', '$numero', '$bairro', '$cidade', '$estado', '$email', '$cpf_cnpj', '$rg', '$telefone', '$celular', '$data_nasc')
";

$result_query = mysqli_query($con, $sql);
/* $last_inserted_id = $conn->insert_id; */


if (
    $result_query == false ||
    mysqli_affected_rows($con) == 0
) {
    echo ErrorMessage("Erro ao cadastrar cliente");
    return;
}

print("Usuário cadastrado com sucesso!");

print("SEUS DADOS: <br>");
print("Nome: $nome <br>");
print("Endereço: $endereco <br>");
print("Número: $numero <br>");
print("Bairro: $bairro <br>");
print("Cidade: $cidade <br>");
print("Estado: $estado <br>");
print("Email: $email <br>");
print("CPF/CNPJ: $cpf_cnpj <br>");
print("RG: $rg <br>");
print("Telefone: $telefone <br>");
print("Celular: $celular <br>");
print("Data de nascimento: $data_nasc ");

print("<br><hr /><br>");

print("Utilize no login: " . $email . ". E no campo senha: " . $cpf_cnpj . ".");

echo "
    <a href='../login.php'>Login</a>
";

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../cabecalho.php");
    getCabecalho();
    ?>
    <title>Document</title>
</head>

<body>

</body>

</html>