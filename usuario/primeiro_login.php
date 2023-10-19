<!DOCTYPE html>
<html lang="en">

<?php


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./functions/func_primeiro_login.php?atualizar=true" method="post">
        <input type="text" name="login" id="login" placeholder="Alterar login">
        <input type="text" name="senha" id="senha" placeholder="Alterar senha">
        <button type="submit">Alterar login e senha</button>
    </form>
    <a href="./functions/func_primeiro_login.php?atualizar=false">Pular</a>
</body>

</html>