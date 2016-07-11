<?php

function humanizedList($array) {
	$lastItem = array_pop($array);
	$lastItem = 'and ' . $lastItem;
	array_push($array, $lastItem);
	$implodedArray = implode(', ', $array);
	return $implodedArray;
}




$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);
print_r($physicistsArray);

$famousFakePhysicists = humanizedList($physicistsArray);

echo "Some of the most famous physicists are {$famousFakePhysicists}\n";