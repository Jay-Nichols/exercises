<?php

fwrite(STDOUT, 'Type a number. ');
$firstNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Type a higher number. ');
$secondNumber = trim(fgets(STDIN));

if ($argc === 2) {

	for ($i = $firstNumber; $i <= $secondNumber; $i += $argv[1]) {
		fwrite(STDOUT, "{$i}\n");
	}

}

if ($argc === 1) {
	for ($i = $firstNumber; $i <= $secondNumber; $i++) {
		fwrite(STDOUT, "{$i}\n");
	}
}