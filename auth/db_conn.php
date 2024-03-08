<?php

$user = 'web';
$pass = 'web';
$database = 'grupo-05';
$host = 'localhost';

$mysqli = new mysqli($host, $user, $pass, $database);

if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}