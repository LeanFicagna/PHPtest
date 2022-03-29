<?php

include_once  __DIR__ . '/../config/config.php';

$mysqli = new mysqli(HOSTNAME, USER, PASS, DB);
if($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}