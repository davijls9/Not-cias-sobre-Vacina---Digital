<?php

$conect = mysqli_connect("localhost", "root", "");
if (!$conect) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");
$db = mysqli_select_db($conect,"cartao_vacina");

?>