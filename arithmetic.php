<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

// Add code to test your functions here

echo add(3, 4) . PHP_EOL;
echo subtract(3, 4) . PHP_EOL;
echo multiply(3, 4) . PHP_EOL;
echo divide(3, 4) . PHP_EOL;


function modulus($a, $b) {
	return $a % $b;
}

echo modulus(12, 5) . PHP_EOL;
