<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("cabecalho.php");
    getCabecalho();
    ?>
    <title>Document</title>
</head>




<body>
    <form action="./functions/func_usuario_cadastro.php" method="post">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" placeholder="Digite seu nome" id="nome" name="nome" required>
        </div>
        <div>
            <label for="endereco">Endereço: </label>
            <input type="text" placeholder="Digite seu endereço" id="endereco" name="endereco">
        </div>
        <div>
            <label for="numero">Número: </label>
            <input type="text" placeholder="Digite seu número" id="numero" name="numero">
        </div>
        <div>
            <label for="bairro">Bairro: </label>
            <input type="text" placeholder="Digite seu bairro" id="bairro" name="bairro">
        </div>
        <div>
            <label for="cidade">Cidade: </label>
            <input type="text" placeholder="Digite sua cidade" id="cidade" name="cidade">
        </div>
        <div>
            <label for="estado">Estado: </label>
            <input type="text" placeholder="Digite seu estado" id="estado" name="estado">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" placeholder="Digite seu email" id="email" name="email" required>
        </div>

        <div>
            <label for="cpf_cnpj">CPF/CNPJ: </label>
            <input type="text" placeholder="Digite seu CPF/CNPJ" id="cpf_cnpj" name="cpf_cnpj" required>
        </div>
        <div>
            <label for="rg">RG: </label>
            <input type="text" placeholder="Digite seu RG" id="rg" name="rg" required>
        </div>
        <div>
            <label for="telefone">Telefone: </label>
            <input type="text" placeholder="Digite seu telefone" id="telefone" name="telefone">
        </div>
        <div>
            <label for="celular">Celular: </label>
            <input type="text" placeholder="Digite seu celular" id="celular" name="celular" required>
        </div>
        <div>
            <label for="data_nasc">Data de nascimento: </label>
            <input type="date" placeholder="Digite sua data de nascimento" id="data_nasc" name="data_nasc" required>
        </div>

        <div>
            <input type="submit" value="Cadastrar">
        </div>

    </form>
</body>

</html>