<?php
echo <"pre">;

//Empty = vazio

$var = "lucas";
if (empty($var)){
	var_dump("Vazio");
}

$var = false;
if (!empty($var)){
	var_dump("Não Vazio");
}

echo "<hr>";

// isset verifica se a variável existe ou não

if (isset($var2)){
	echo "Não existe";
}

if (isset($var)){
	echo "existe";
}

echo "<hr>";

// unset destroi variável

unset ($var)
 if (isset($var)){
	echo "existe";
}

echo "<hr>";

//set type coloca o tipo de na variável.

echo "<hr>";

// Renomeia a string
$var = "Olá Mundo";
$var2 = str_replace("Mundo", "4Linux", $var);
echo $var2;

echo "<hr>";

// Remove espaços em brancos ou simbolos do parametro.
$var = "    Olá       ";
$var2 = trim($var);
echo $var2;

echo "<hr>";

$var = "........ Olá ........";
$var2 = trim($var, ".");
echo $var2;

echo "<hr>"

//Coloca a primeira letra maiusculas.
$var = "ola mundo";
echo ucwords($var);

echo "<hr>"

//Converte para maiusculo
$var = "ola mundo";
echo strtoupper($var);

echo "<hr>"

//Ordena array e mantem a chave
$array = ['a', 'c', 'b', 'f','e'];
asort($array);
print_r($array);

echo "<hr>"

//Ordena array e por valores
$array = ['a' => '0', 'c' =>'1', 'b' => '2', 'f' => '3','e' => '4'];
ksort($array);
print_r($array);

echo "<hr>"



