<?php

// Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

// Construct a loop that iterates through each value and outputs only values with a type that is scalar.

// Create a loop that will echo out every value, including those nested in arrays. 



$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
echo "\n\033[36m===================================================================================================================================================\n";
echo "\t\033[0mConstruct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.\n";
echo "\033[36m===================================================================================================================================================\033[0m\n\n";

foreach ($things as $thing) {
	echo gettype($thing) . PHP_EOL;
}

echo "\n\033[36m===================================================================================================================================================\n";
echo "\t\t\033[0mConstruct a loop that iterates through each value and outputs only values with a type that is scalar.\n";
echo "\033[36m===================================================================================================================================================\033[0m\n\n";

foreach ($things as $thing) {
	if (is_scalar($thing)) {
		echo gettype($thing) . PHP_EOL;
	}
}

echo "\n\033[36m===================================================================================================================================================\n";
echo "\t\t\t\033[0mCreate a loop that will echo out every value, including those nested in arrays.\n";
echo "\033[36m===================================================================================================================================================\033[0m\n\n";

foreach ($things as $thing) {
	if (is_array($thing)) {
		echo "Array: [";
		foreach ($thing as $element) {
			echo $element . ", ";
		}
		echo "\x08\x08]\n";
	} else if (is_null($thing)) {
		echo "Value is NULL" . PHP_EOL;
	} else if (is_bool($thing)){
		var_dump($thing);
	} else {
		echo $thing . PHP_EOL;
	}
}

























