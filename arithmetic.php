<?php

$a = 6;
$b = 10;

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;
	} else {
		return "Error. All variables must be numbers.\n";
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a - $b;	
	} else {
		return "Error. All variables must be numbers.\n";
	}
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a * $b;
	} else {
		return "Error. All variables must be numbers.\n";
	}
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b) && $b !== 0) {
	    return $a / $b;		
	} else {
		return "Error. All variables must be numbers. \$b cannot be zero\n";
	}
}

// Add code to test your functions here

echo add(3, 4) . PHP_EOL;
echo subtract(3, 4) . PHP_EOL;
echo multiply(3, 4) . PHP_EOL;
echo divide(3, 4) . PHP_EOL;


function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;	
	} else {
		return "Error. All variables must be numbers.\n";
	}
}

echo modulus(12, 5) . PHP_EOL;
