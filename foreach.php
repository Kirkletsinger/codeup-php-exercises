<?php
	$things = array('Sgt. Pepper', "11", null, array( 1,2,3),3.14 , "12 + 7", false, (string) 11 );
	foreach ($things as $stuff) {
		if (is_array($stuff)) {
			foreach ($stuff as $thingies) {
				echo "$thingies" . PHP_EOL;
				
			}
		} else {
			echo "$stuff" . PHP_EOL;
		}
	}
