<?php
echo "<pre>";

$exercicio1 = 2;
var_dump($exercicio1);
$cast = (string) $exercicio1;
var_dump($cast);
$cast = (array) $exercicio1;
var_dump($cast);
$cast = (boolean) $exercicio1;
var_dump($cast);
$cast = (float) $exercicio1;
var_dump($cast);
$cast = (object) $exercicio1;
var_dump($cast);
$cast = (int) $exercicio1;
var_dump($cast);
echo "<br>";
echo "<hr>";

$valor = 2;
var_dump($valor);
$valor = $valor + "2 casas";
var_dump($valor);
$valor = "2 tratores" + "22 pontes";
var_dump($valor);
$valor = $valor - "20 casas";
var_dump($valor);
echo "<br>";
echo "<hr>";

$var = 100;
echo "O pátio possue " . $var . " carros.";
echo "<br>";
echo "<hr>";

define ("Versao",1);
echo ("Primeiro Exercicio, versão: ");
echo Versao;
echo "<br>";
echo "<hr>";

