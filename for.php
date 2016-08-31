<?php
fwrite(STDOUT, 'Give me a starting number: ');
$startNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Give me an ending number: ');
$endingNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Choose increment: ');
$increment = trim(fgets(STDIN));
if(!is_numeric($increment)){
	$increment = 1;
}
for($i = $startNumber; $i <= $endingNumber; $i += $increment) {
	echo $i . PHP_EOL;
}