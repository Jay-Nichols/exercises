<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function combineArrays($array1, $array2) {

	$newArray = [];
	for($i = 0; $i < count($array1); $i++) {
		if ($array1[$i] == $array2[$i]) {
			$newArray[] = $array1[$i]; 
		} else {
			$newArray[] = $array1[$i];
			$newArray[] = $array2[$i];
		}
	}
	return $newArray;
}

var_dump(combineArrays($names, $compare));
