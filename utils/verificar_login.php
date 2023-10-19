<?php

session_start();

function getRootPath()
{
    $base_url = "http://$_SERVER[HTTP_HOST]/José/projeto%20_inicial/at_2bim_joao/atividade_2bim";

    return $base_url;
}

function verificar_login()
{
    if (!isset($_SESSION['id'])) {
        header("Location: " . getRootPath() . "/login.php");
    }
}

function verificar_admin()
{
    if (!isset($_SESSION['admin'])) {

        header("Location: " . getRootPath() . "/index.php");
    }
}
