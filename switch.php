<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         echo 'monday' . PHP_EOL;
         break;
     case 2:
    	echo 'tuesday' . PHP_EOL;
    	break;
    case 3:
    	echo 'wednesday' . PHP_EOL;
    	break; 
    case 4:
    	echo 'thursday' . PHP_EOL;
    	break;
    case 5: 
    	echo 'friday' . PHP_EOL;
    	break;
    case 6:
    	echo 'saterday' . PHP_EOL;
    	break;
    case 7:
    	echo 'sunday' . PHP_EOL;
    	break;
    	
 }
