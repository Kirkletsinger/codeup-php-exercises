<?php

function add($a, $b)
{
	if(is_numeric($a)&& is_numeric($b)){
    return $a + $b;
}

function subtract($a, $b)
{
    if(is_numeric($a)&& is_numeric($b)){
    return $a - $b;
}

function multiply($a, $b)
{
    if(is_numeric($a)&& is_numeric($b)){
    return $a * $b;
}

function divide($a, $b)
{
    if(is_numeric($a)&& is_numeric($b)){
    return $a / $b;
}

// Add code to test your functions here
function modulus($a,$b)
{
	return $a % $b;
}
	echo '5 + 4 = ' . add(5, 4) . PHP_EOL;
	echo '40 - 10 = ' . subtract(37, 15) . PHP_EOL;
	echo '10 * 30 = ' . multiply(12, 95) . PHP_EOL;
	echo '10 / 0 = ' . divide(27, 0) . PHP_EOL; 
	echo '6 % 12 =' .modulus(57, 12) . PHP_EOL;

