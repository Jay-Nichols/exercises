<?php

for ($i = 0; $i <= 100; $i++) {
	if ($i % 3 == 0) {
		fwrite(STDOUT, "FIZZ\n");
	}
	if ($i % 5 == 0) {
		fwrite(STDOUT, "BUZZ\n");
	} 
	if ($i % 3 == 0 && $i % 5 == 0) {
		fwrite(STDOUT, "FIZZBUZZ\n");
	} else {
		fwrite(STDOUT, "{$i}\n");
	}
}