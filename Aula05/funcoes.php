<?php

function negrito(){
	echo "<strong>Negrito</strong> <br>";
}

negrito();

echo "<hr>";

function italico($valor){
	echo "<i>($valor)</i><br>";
}

italico("Italico");
italico("4Linux");
italico("Lucas");

echo "<hr>";


function italico2($valor = "valor",$valor2 = "valor2"){
	echo "<i><b>{$valor} - {$valor2}</b></i><br>";
}

italico2("Italico");
italico2("4Linux");
italico2("um par","dois par");
italico2();

echo "<hr>";


function quadrado($num){
	return pow($num,2);
}
function cubo($num){
	return $num * $num * $num;
}
// function potencia($num,$potencia){
// 	$numero;
// 	for ($i=0; $i < $potencia; $i++) { 
// 		$numero = $numero * $num;
// 	}
// 	return $numero;
// }

// $var = potencia(2,3);
// echo $var;

$taxa = 1.09;

function taxar($valor){
	global $taxa;
	return $valor + $taxa;
}

echo taxar(10);

echo "<hr>";

function adicionar(&$fruta){
	return ++$fruta;
}

$laranjas = 5;
adicionar($laranjas);
echo $laranjas;
$limao = 10;
adicionar($limao);
echo $limao;

echo "<hr>";

$array = [1,2,3,4,5,6];
$pares = array_filter($array,function($valor){
	if ($valor % 2 == 0){
		return $valor;
	}
});
print_r($pares);

echo "<hr>";

$msg = "Olá";

$func = function($a) use ($msg){
	// $msg = "Hello";
	echo $msg.$a;
};

$func("4Linux");

