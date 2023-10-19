<?php
session_start();
print_r($_SESSION);
echo "<br>";
print_r("id: " .  $_SESSION['id']);
/* 
email: admin@admin.com
senha: 1111111111111111111
 */
/* session_destroy(); <-- faz o usuario ser deslogado, ou seja, limpa a sessão*/
session_abort();
