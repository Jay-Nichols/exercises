<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


foreach($things as $thing) {
	if (is_string($thing)) {
		echo "{$thing}\n";
	} elseif (is_int($thing)) {
		echo "{$thing}\n";
	} elseif (is_array($thing)) {
		echo "{$thing}\n";
	}

}