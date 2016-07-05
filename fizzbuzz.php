<?php

for ($i = 0; $i <= 100; $i++) {
	if ($i % 3 == 0 && $i % 5 != 0) {
		fwrite(STDOUT, "FIZZ\n");
	} elseif ($i % 5 == 0 && $i % 3 != 0) {
		fwrite(STDOUT, "BUZZ\n");
	} elseif ($i % 3 == 0 && $i % 5 == 0) {
		fwrite(STDOUT, "FIZZBUZZ\n");
	} else {
		fwrite(STDOUT, "{$i}\n");
	}
}