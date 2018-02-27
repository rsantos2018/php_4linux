<?php

echo "<pre>";

var_dump(true and true); //true
var_dump(true and false); //false
var_dump(true && true); //true
var_dump(true && false); //false
echo "<hr>";

var_dump(true or true); //true
var_dump(true or false); //false
var_dump(true || true); //true
var_dump(true || false); //true
var_dump(false || false); //false
echo "<hr>";

var_dump(true xor true); //false
var_dump(true xor false); //true
var_dump(false xor false); //false
echo "<hr>";

var_dump(!true); //false
var_dump(!false); //true