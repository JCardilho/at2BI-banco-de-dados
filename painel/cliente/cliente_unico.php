<?php
include("../../utils/verificar_login.php");
include("../../conexao.php");
verificar_admin();
?>


<!DOCTYPE html>
<html lang="en">

<?php

$sql_procurar_clientes = "SELECT * FROM clientes WHERE id = " . $_GET['id'];

$result_query = mysqli_query($con, $sql_procurar_clientes);

$row = mysqli_fetch_assoc($result_query);
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

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../../cabecalho.php");


    getCabecalho();
    ?>
    <title>Document</title>
</head>


<body>
    <a href="./cliente.php">Voltar</a><br />
    <p>Cliente: </p>
    <ul>
        <?php
        echo "
                <form action='./functions/func_atualizar_cliente.php?id=$id' method='post'>
                <input type='text' value='$nome' placeholder='Digite seu nome' id='nome' name='nome' required></input><br/>
                <input type='text' value='$endereco' placeholder='Digite seu endereço' id='endereco' name='endereco'></input><br/>
                <input type='text' value ='$numero' placeholder='Digite seu número' id='numero' name='numero'></input><br/>
                <input type='text' value='$bairro' placeholder='Digite seu bairro' id='bairro' name='bairro'></input><br/>
                <input type='text' value='$cidade' placeholder='Digite sua cidade' id='cidade' name='cidade'></input><br/>
                <input type='text' value='$estado' placeholder='Digite seu estado' id='estado' name='estado'></input><br/>
                <input type='email' value='$email' placeholder='Digite seu email' id='email' name='email' required></input><br/>
                <input type='text' value='$cpf_cnpj' placeholder='Digite seu CPF/CNPJ' id='cpf_cnpj' name='cpf_cnpj' required></input><br/>
                <input type='text' value='$rg' placeholder='Digite seu RG' id='rg' name='rg' required></input><br/>
                <input type='text' value='$telefone' placeholder='Digite seu telefone' id='telefone' name='telefone'></input><br/>
                <input type='text' value='$celular' placeholder='Digite seu celular' id='celular' name='celular' required></input><br/>
                <input type='date' value='$data_nasc' placeholder='Digite sua data de nascimento' id='data_nasc' name='data_nasc' required></input><br/>
                <button type='submit'>Atualizar</button>
                </form>

                <a href='./functions/func_apagar_cliente.php?id=$id' type='text'>Deletar</a>
            ";

        ?>
    </ul>
</body>

</html>