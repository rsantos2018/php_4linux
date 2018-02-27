<?php

echo "<pre>";

//Igual
var_dump(2 == 2); //true
var_dump(2 == "2"); //true
echo "<hr>";

//Identico
var_dump(2 === "2"); //false
var_dump(2 === 2); //true
echo "<hr>";

//Diferente
var_dump(2 != 2); //false
var_dump(3 != 2); //true
echo "<hr>";

//Menor que
var_dump(2 < 5); //true
var_dump(5 < 2); //false
var_dump(2 < 2); //false
echo "<hr>";

// Menor ou igual
var_dump(2 <= 5); //true
var_dump(5 <= 2); //false
var_dump(2 <= 2); //false
echo "<hr>";

// Maior ou igual
var_dump(2 >= 5); //false
var_dump(5 >= 2); //true
var_dump(2 >= 2); //false
echo "<hr>";



