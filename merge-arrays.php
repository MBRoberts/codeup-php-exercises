<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

function arraySearch($names, $query) {

	return (is_numeric(array_search($query, $names))) ? "Name present" . PHP_EOL : "Name not found!" . PHP_EOL;
};

echo arraySearch($names, "Tina");

// Refactored above without function

echo (is_numeric(array_search("Tina", $names))) ? "Name present" . PHP_EOL : "Name not found!" . PHP_EOL;


// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

function arrayCompare($names, $compare) {

	$count = 0;

	foreach ($compare as $compareName) {

		if (is_numeric(array_search($compareName, $names))) {
			$count++;
		};
	};

	return $count;
};

echo "There are " . arrayCompare($names, $compare) . " names in common" . PHP_EOL;


// Refactored above

echo "There are " . count(array_intersect($names, $compare)) . " names in common" . PHP_EOL;



// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

function combineArrays($arrayOne, $arrayTwo) 
{
	$newArray = [];

	foreach ($arrayOne as $index => $name) {
		array_push($newArray, $name);
		if ($name != $arrayTwo[$index]) {
			array_push($newArray, $arrayTwo[$index]);
		}
	};

	return $newArray;
}

var_dump(combineArrays($names, $compare));

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().
// Test your combine_arrays() function with $names and $compare. The resulting array should look like:
// Array
//  (
//      [0] => Tina
//      [1] => Dana
//      [2] => Dean
//      [3] => Mike
//      [4] => Mel
//      [5] => Amy
//      [6] => Adam
//      [7] => Michael
//  )











