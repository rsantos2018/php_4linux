<?php

$host = "localhost";
$user = "reginaldo";
$pass = "@da6linux";
$db = "aula07";

$conexao = mysqli_connect($host, $user, $pass, $db);

var_dump($conexao);