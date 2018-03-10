<?php

$host = "localhost";
$user = "reginaldo";
$pass = "@da6linux";
$db = "aula07";

$conexao = mysqli_connect($host, $user, $pass, $db);

//var_dump($conexao);

//mysqli_query($conexao, "INSERT INTO posts (usuario_id, post) VALUES (7,'Meu sétimo post');");

$query = "SELECT * FROM posts";
$result = mysqli_query($conexao,$query);

echo "<pre>";
while ($row = mysqli_fetch_assoc($result)){
		echo "Post: {$row['id]} <br>";
		echo $row['post'];
		echo "<hr>";

}

$found = mysqli_fetch_array($result);
print_r($found);