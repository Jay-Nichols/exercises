<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


foreach($things as $thing) {
	if (is_int($thing)) {
		echo "{$thing} is an integer\n";
	} elseif (is_float($thing)) {
		echo "{$thing} is a float\n";
	} elseif (is_bool($thing)) {
		echo "{$thing} is a boolean\n";
	} elseif (is_array($thing)) {
	  	echo "{$thing} is an array\n";
	} elseif (is_null($thing)) {
		echo "{$thing} is null\n";
	} elseif (is_string($thing)) {
		echo "{$thing} is a string\n";
	} else {
		echo "It is none of these.";
	}

}