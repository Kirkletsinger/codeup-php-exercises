<?php

$x = 0;
$y = 5;
$z = 10;

// TODO:
// If $x < $y < $z then echo "{$x} < {$y} < {$z}\n";
	if(($x < $y) && ($y < $z)) {
		echo "{$x} < {$y} < {$z}\n";
	}
// TODO:
// If 0 is less than $x OR $x is less than 10
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".
	if ((0 <$x) || ($x < 10){
		echo "0 is less than {$x} OR {$x} is less than 10";
	}
// TODO:
// repeat the if statement for $y and $z.
	if ((0 <$y) || ($y < 10){
		echo "0 is less than {$x} OR {$x} is less than 10";
	}
	if ((0 <$z) || ($z < 10){
		echo "0 is less than {$x} OR {$x} is less than 10";
	}
// TODO:
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".
	if (0 < $x && $x < 10){
		echo "0 is less than {$x} AND {$x} is less than 10"; . PHP_EOL;
	}	
// TODO:
// repeat the if statement for $y and $z.
	if (0 < $y && $y < 10){
		echo "0 is less than {$x} AND {$x} is less than 10"; . PHP_EOL;
	}	

	if (0 < $z && $z < 10){
		echo "0 is less than {$x} AND {$x} is less than 10"; . PHP_EOL;
	}	

	if(is_numeric($x)){
		echo "the value of \$x is a is numeric". PHP_EOL;
	}
	If(is_boo($x)){
		echo "The data type of \$x is aa boolean" . PHP_EOL;
	}

