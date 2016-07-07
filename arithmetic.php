<?php


function add($a, $b, $strict = true) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;
	} else {
		return throwErrorMessage($a, $b);
	}
}

function subtract($a, $b, $strict = true) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a - $b;	
	} else {
		return throwErrorMessage($a, $b);
	}
}

function multiply($a, $b, $strict = true) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a * $b;
	} else {
		return throwErrorMessage($a, $b);
	}
}

function divide($a, $b, $strict = true) {
	if (is_numeric($a) && is_numeric($b) && $b !== 0) {
	    return $a / $b;		
	} else {
		return throwErrorMessage($a, $b);
	}
}

function modulus($a, $b, $strict = true) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;	
	} else {
		return throwErrorMessage($a, $b);
	}
}
// Add code to test your functions here

echo add(3, 4) . PHP_EOL;
echo subtract(3, 4) . PHP_EOL;
echo multiply(3, 4) . PHP_EOL;
echo divide(3, 4) . PHP_EOL;
echo modulus(12, 5) . PHP_EOL;


function throwErrorMessage($a, $b) {
	return "$a and $b are not valid numbers";
}
