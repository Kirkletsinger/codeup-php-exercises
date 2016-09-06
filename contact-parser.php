<?php

function parseContacts($filename)
{
	$contacts = array();
	    //pulls my content out of my text file and assigns to the $contacts array
	$filename = 'contacts.txt';
	$handle = fopen('contacts.txt', 'r');
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	    // formats my array
	$contacts = explode("\n", trim($contents));
	    // empty array used later to push content from the $contacts array into once manipulated the data 
	$newArray = array();
	foreach ($contacts as $key => $value) {
	    // separates the name from the number as two different keys within my array
	$splitCont = explode('|', $value);
	    // pulls out the area code from the string of numbers
	$areaCode = substr($splitCont[1], -10, 3);
	    // pulls out the exchange number from the string of numbers
	$exchange = substr($splitCont[1], -7, 3);
	     // this pulls the grr out of the string of numbers
	$grr = substr($splitCont[1], -4, 4);
	    // concatenates the area code, exchange, and grr, back together as one phone number with dashes between them
	$number = $areaCode.'-'.$exchange.'-'.$grr;
	    // populates my contacts array with name and number as my keys and assigns the proper values to each key
	$contacts = array('name' => $splitCont[0], 'phone' => $number);
	    // pushes my newly formatted $contacts array into my $newArray
	        array_push($newArray, $contacts);  
	    }

    return $newArray;
}

var_dump(parseContacts('contacts.txt'));
