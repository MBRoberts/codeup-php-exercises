<?php

// <!-- Create a file named for.php in your exercises repo. Commit and push all changes after each step.

// Prompt user for a starting number and ending number, then display all the numbers from the starting to ending using a for loop.

// Refactor to allow user to choose increment. (count by 1, 2, 10, ...)

// Default increment to 1 if no input.

// Make sure you are only allowing users to pass in numbers. Give an error message is both passed arguments are not numeric. See php.net/is_numeric. -->

do {

	fwrite(STDOUT, "\n\033[0mENTER A STARTING NUMBER: ");
	$starting = trim(fgets(STDIN));

	if (!is_numeric($starting)) {
		echo "Must be Numbers!! TRY AGAIN!!" . PHP_EOL;
	}

} while (!is_numeric($starting));

//====================================================================================

do {

	fwrite(STDOUT, "\nENTER A ENDING NUMBER: ");
	$ending = trim(fgets(STDIN));

	if (!is_numeric($ending)) {
		echo "Must be Numbers!! TRY AGAIN!!" . PHP_EOL;
	}
	if (is_numeric($ending) && $starting > $ending) {
		echo "Starting point is larger than ending point!! TRY AGAIN!!" . PHP_EOL;
	}

} while (!is_numeric($ending) || $starting > $ending);

//====================================================================================

do {

	fwrite(STDOUT, "\nENTER INCREMENT: ");
	$increment = trim(fgets(STDIN));

	if (!is_numeric($increment)) {
		echo "Must be Numbers!! TRY AGAIN!!" . PHP_EOL;
	}
	if ($increment >= ($ending - $starting)) {
		echo "Increment too high!! TRY AGAIN!!" . PHP_EOL;
	}

} while (!is_numeric($increment) || ($increment >= ($ending - $starting)));

//======================================================================================

for ($starting ; $starting <= $ending ; $starting += $increment) {
	echo "{$starting}" . PHP_EOL;
}
