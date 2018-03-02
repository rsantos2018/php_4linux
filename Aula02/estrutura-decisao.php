<?php

echo "<pre>";

$idade = 20;
$carterinha = false;

if ($idade >= 18 && $carterinha){

	echo "Maior idade com carterinha";
}
else if ($idade >=18 && $carterinha == false){
	echo "Maior idade, faça carterinha";
}else {
	echo "Menor idade, carterinha não permitida";
}
	

echo "<hr>";


$idade = 61;

if ($idade >=18 && $idade < 60){
	echo "Voto obrigatório!";
} elseif ($idade >=16 || $idade >= 60) {
	echo "Voto opcional!";
}elseif ($idade < 16) {
		echo "Não vota!";
}else {
	echo "Idade Inválida!";
}

