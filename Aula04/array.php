<?php

echo "<pre>";


$pessoa = ["reginaldo", 48, 1.70];

var_dump($pessoa);
var_dump($pessoa [1]);

echo "<hr>";

for ($i=0; $i<3; $i++){

	echo $pessoa [$i] . "\n";
}
echo "<hr>";

for ($i=0; $i<3; $i++){
	if ($i == 1)
		continue;
	}
	echo $pessoa [$i] . "\n";

echo "<hr>";

$pessoa = ["nome" => "Reginaldo", "idade" => 48, "altura" => 1.70];

print_r($pessoa["nome"]);

echo "<hr>";

$cliente = ["nome" => "Frederico dos Santos", "idade" => 27, "altura" => 1.70, "email" => "frederico@gmail.com"];
print_r($cliente);

echo "<hr>";

$cliente = ["nome" => "Frederico dos Santos", "idade" => 27, "altura" => 1.70, "email" => "frederico@gmail.com"];
print_r($cliente["email"]);

echo "<hr>";

$cliente = ["nome" => "Frederico dos Santos", "idade" => 27, "altura" => 1.70, "email" => "frederico@gmail.com"];
var_dump($cliente);

echo "<hr>";

$cliente = ["Frederico dos Santos",27, 1.70, "frederico@gmail.com"];
echo $cliente [3];
echo "<hr>";

$cliente = ["Frederico dos Santos",27, 1.70, "frederico@gmail.com"];
echo $cliente [0] . " - Programador";
echo "<hr>";