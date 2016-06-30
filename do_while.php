<?php 

$var = 2;
 
do {
	echo "{$var}" . PHP_EOL;
	$var = $var * $var;

} while ($var <= 65536);