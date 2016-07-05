<?php

fwrite(STDOUT, 'Type a number. ');
$firstNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Type a higher number. ');
$secondNumber = trim(fgets(STDIN));

for ($i = $firstNumber; $i <= $secondNumber; $i++) {
	fwrite(STDOUT, "{$i}\n");
}