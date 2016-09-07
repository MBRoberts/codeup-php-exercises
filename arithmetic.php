<?php

function add($a, $b) {

	echo "{$a} + {$b} = " . ($a + $b) . PHP_EOL;
};


function subtract($a, $b) {

	echo "{$a} - {$b} = " . ($a - $b) . PHP_EOL;
};


function multiply($a, $b) {

	echo "{$a} * {$b} = " . ($a * $b) . PHP_EOL;
};


function divide($a, $b) {

	echo "{$a} / {$b} = " . ($a / $b) . PHP_EOL;
};


function modulus($a, $b) {

	echo "{$a} % {$b} = " . ($a % $b) . PHP_EOL;
};


function errorMessage($a) {

	echo "ERROR! {$a} is not a valid number, Try Again!" . PHP_EOL;
};


function validate($a) {

	if ((is_numeric($a)) && ($a != 0)) {
		return true;
	} else {
		errorMessage($a);
		return false;
	};
};


function userPrompt($numOrder) {

	fwrite(STDOUT, "ENTER {$numOrder} NUMBER: ");
	$input = trim(fgets(STDIN));

	if (validate($input)) {
		return $input;
	} else {
		return userPrompt($numOrder);
	};
};

$a = userPrompt("FIRST");
var_dump($a);

$b = userPrompt("SECOND");
var_dump($b);

add($a, $b);
subtract($a, $b);
multiply($a, $b);
modulus($a, $b);
divide($a, $b);
