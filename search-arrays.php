<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

function arraySearch($names, $query) {

	return (is_numeric(array_search($query, $names))) ? "Name is present" . PHP_EOL : "Name not found!" . PHP_EOL;
};

echo arraySearch($names, "Tina");

// Refactored above to one line...

echo (is_numeric(array_search("Tina", $names))) ? "Name is present" . PHP_EOL : "Name not found!" . PHP_EOL;


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


// Refactored above to one line...

echo "There are " . count(array_intersect($names, $compare)) . " names in common" . PHP_EOL;
