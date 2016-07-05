<?php 

if ($argc == 3) {

$randomNumber = mt_rand($argv[1], $argv[2]);




$counter = 0;

do {
	fwrite(STDOUT, 'Guess a number between 1 and 100. ');
	$number = trim(fgets(STDIN));

	if ($number < $randomNumber) {
		fwrite(STDOUT, "Higher\n");
	} elseif ($number > $randomNumber) {
		fwrite(STDOUT, "Lower\n");	
	} else {
		fwrite(STDOUT, "Correct\n");
	}
	$counter++;
} while ($number !== $randomNumber);

fwrite(STDOUT, "You guessed $counter times.");

}





