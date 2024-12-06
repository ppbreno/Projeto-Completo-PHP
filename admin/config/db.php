<?php
include_once './config.php';

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_PASS, DB_PORT);

if ($db->connect_errno) {
    echo "Erro no banco de dados {$db->connect_error}";
}