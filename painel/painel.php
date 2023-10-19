<?php
include("../utils/verificar_login.php");
verificar_admin();
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
    <a href="../index.php">Voltar</a><br />
    <a href="./produtos/produtos.php">Produtos</a>
</body>

</html>