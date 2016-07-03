<?php 

$randomNumber = mt_rand(1, 100);

fwrite(STDOUT, 'Guess a number between 1 and 100. ');


$number = fgets(STDIN);


if ($number < $randomNumber) {
	fwrite(STDOUT, "Higher\n");
} elseif ($number > $randomNumber) {
	fwrite(STDOUT, "Lower\n");	
} else {
	fwrite(STDOUT, "That's the number.\n");
}
