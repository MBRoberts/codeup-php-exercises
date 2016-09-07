<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)

$dayOfWeek = date('N');

switch($dayOfWeek) {
	case 1 :
		echo "Monday";
		break;
	 // Output Monday
	case 2 :
		echo "Tuesday";
		break;
	case 3 :
		echo "Wednesday";
		break;
	case 4 :
		echo "Thursday";
		break;
	case 5 :
		echo "Friday";
		break;
	case 6 :
		echo "Saturday";
		break;
	case 7 :
		echo "Sunday";
		break;

     // Output Tuesday
 // etc through day 7
}

echo " " . PHP_EOL;


// Test and verify the results before proceeding by creating a matching if block. The output should be identical.

if($dayOfWeek == 1) {
	echo "Monday";
}

if($dayOfWeek == 2) {
	echo "Tuesday";
}

if($dayOfWeek == 3) {
	echo "Wednesday";
}

if($dayOfWeek == 4) {
	echo "Thursday";
}

if($dayOfWeek == 5) {
	echo "Friday";
}

if($dayOfWeek == 6) {
	echo "Saturday";
}

if($dayOfWeek == 7) {
	echo "Sunday";
}

echo "" . PHP_EOL;









