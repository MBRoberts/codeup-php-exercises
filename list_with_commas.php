<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(', ' , $physicistsString);

function humanizedArray($array , $alphabetize = false) 
{
	$newArray = [];
	$str = implode(' ', $array);
	$array = explode(' ', $str);

	foreach ($array as $key => $name) {
		if ($key % 2 == 0){
			array_push($newArray, $name);
		};
	};

	if ($alphabetize) {
		sort($newArray);
	};

	$finalName = 'and ' . array_pop($newArray) . '.' . PHP_EOL;

	array_push($newArray, $finalName);

	return implode(', ', $newArray);
};

$famousFakePhysicists = humanizedArray($physicistsArray, true);
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}" .  PHP_EOL;