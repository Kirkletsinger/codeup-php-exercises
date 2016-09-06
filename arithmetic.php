<?php
$a = 2;
$b = 10;
function add($a, $b){
	if(is_numeric($a)&& is_numeric($b)){
    	return $a + $b;
	}else{
		return "ERROR: Both arguments must be numbers\n";

	}
}

function subtract($a, $b){
    if(is_numeric($a)&& is_numeric($b)){
    	return $a - $b;
	}else{
		return "ERROR: Both arguments must be numbers\n";

	}
}

function multiply($a, $b){
    if(is_numeric($a)&& is_numeric($b)){
    	return $a * $b;
	}else{
		return throwErrorMessage("");
	}
}
function divide($a, $b){
    if(is_numeric($a)&& is_numeric($b)){
    	return $a / $b;
	}else{
		return "ERROR: Both arguments must be numbers\n";

	}
}

function modulus($a,$b){
	if(is_numeric($a)&& is_numeric($b)){
		return $a % $b;
	}else{
		return "ERROR: Both arguments must be numbers\n";

	}
}
// Add code to test your functions here
function Test($a,$b)
	{

	echo '5 + 4 = ' . add(5, 4) . PHP_EOL;
	echo '40 - 10 = ' . subtract(40, 10) . PHP_EOL;
	echo '10 * 30 = ' . multiply(10, 30) . PHP_EOL;
	echo '10 / 0 = ' . divide(10, 0) . PHP_EOL; 
	echo '6 % 12 =' .modulus(6, 12) . PHP_EOL;


