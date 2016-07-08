<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$find = 'Dana';

function namesArray($name, $array) {
	if (array_search($name, $array) === false) {
		echo "FALSE", PHP_EOL;
	} else {
		echo "TRUE", PHP_EOL;
	}
}

namesArray($find, $names);




$i = 0;
$count = 0;
foreach($names as $name) {
	if(array_search($name, $compare) !== false) {
		$count++;
	}
};
echo "$count\n";


