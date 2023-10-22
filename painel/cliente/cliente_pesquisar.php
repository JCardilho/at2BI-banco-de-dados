<?php
include("../../utils/verificar_login.php");
include("../../conexao.php");
verificar_admin();
?>


<!DOCTYPE html>
<html lang="en">

<?php

$sql_procurar_cliente = "SELECT * FROM clientes WHERE nome LIKE '%" . $_POST['procurar_cliente'] . "%'";

$result_query = mysqli_query($con, $sql_procurar_cliente);

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
<a href="../painel.php">Voltar</a><br />
    <a href="../../usuario_cadastro.php">Cadastrar Usuário</a><br />
    <form action="./cliente_pesquisar.php" method="post">
        <input type="text" name="procurar_cliente" id="procurar_cliente">
        <button type='submit'>
            Procurar cliente
        </button>
    </form>
    <p>Todos os clientes: </p><br />
    <ul>
        <?php
        if (mysqli_num_rows($result_query) == 0) {
            echo "Nenhum cliente encontrado";
        } else {
            while ($row = mysqli_fetch_assoc($result_query)) {
                $id = $row['id'];
                $nome = $row['nome'];


                echo "
                <li>
                    <form action='./cliente_unico.php?id=$id' method='post'>
                        <button type='submit'>$nome</button>
                    </form>
                </li>
                ";
            }
        }
        ?>
    </ul>
</body>

</html>