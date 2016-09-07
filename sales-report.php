<?php

// Output should include:
// - total number of employees
// - total number of units sold
// - avg units sold per employee
// - Then output should share employee production, ordered from highest to lowest # of units
// * Units   |     Full Name       |   Employee Number
// * 5             Bob Boberson        2

function getContent($filename)
{
	$handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $employees = explode("\n", $contents);
    fclose($handle);

    return $employees;
}

function attachKeys($array)
{
	$newArray = [];
	$keys = ["Employee Number", "First Name", "Last Name", "Units"];
	
	foreach ($array as $index => $employee) {
		$array[$index] = explode(", ", $employee);
		array_push($newArray, array_combine($keys, $array[$index]));
	}
	foreach ($newArray as $index => $employee) {
		$newArray[$index]["Full Name"] = $newArray[$index]["First Name"] . " " . $newArray[$index]["Last Name"];
	}
	$mask = "\t\t\t\t||  %5.5s  |   %-10s  |  %15s  ||\n";
	echo "\t\t\t\t------------------------------------------------\n";
	printf($mask, "UNITS", "FULL NAME", "EMPLOYEE NUMBER");
	echo "\t\t\t\t------------------------------------------------\n";	
}

$employeeArray = getContent('sales-report.txt');

attachKeys($employeeArray);