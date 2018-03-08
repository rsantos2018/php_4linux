<?php

$host 	= "localhost";
$port 	= "5432";
$dbname = "aula08";
$user 	= "reginaldo";
$pass	= "123";

$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

//echo $con_string;

echo "<hr>";

$con = pg_connect($con_string);
//var_dump($con);

//$sql = "INSERT INTO usuarios(usuario,senha) VALUES ('adriana', '456')";
//pg_query($con,$sql);

$sql = "SELECT * FROM usuarios";

$result = pg_query($con, $sql);

$usuarios = pg_fetch_all($result);
print_r($usuarios);

echo "<hr>";

echo "<ul>";
foreach ($usuarios as $usuario) {
	
	echo "<li> {$usuario['usuario']} </li>";
}
echo "</ul>";
echo "<hr>";


