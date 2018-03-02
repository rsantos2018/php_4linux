<?php

echo "<pre>";

$pessoa = ["reginaldo", 48, 1.70];

$i = 0;
foreach ($pessoa as $nome => $valor) {
	
	echo ++$i . $valor . "\n";
}
echo "<hr>";

$pessoa = [
	"nome" => "Lucas",
	"idade" => "24",
	"altura" => 1.80
];

foreach ($pessoa as $valor) {
	echo $valor . "\n";
}
echo "<hr>";


foreach ($pessoa as $chave => $valor) {
	echo "$chave -> $valor. \n";
}
echo "<hr>";

foreach ($pessoa as $chave => $valor) {
	if ($chave == 'nome'){
		echo $valor;

	}
echo "<hr>";



echo "<hr>";
