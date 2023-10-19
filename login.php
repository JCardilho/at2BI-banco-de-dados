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
    <form action="./functions/func_login.php" method="post">
        <div>
            <label for="nome">Login: </label>
            <input type="text" placeholder="Digite seu login" id="login" name="login" required>
        </div>
        <div>
            <label for="senha">Senha: </label>
            <input type="text" placeholder="Digite sua senha" id="senha" name="senha">
        </div>

        <div>
            <input type="submit" value="Entrar">
        </div>

    </form>
</body>

</html>