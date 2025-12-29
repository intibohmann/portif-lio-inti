<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'portfolio_db');

$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false){
    die("ERRO: Não foi possivel conectar ao Banco de Dados(MySql).". $link->connect_error);
}

$link->set_charset("utf8mb4");

return $link;
?>