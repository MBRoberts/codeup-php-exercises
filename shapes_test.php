<?php

require_once 'Square.php';

$rectangle = new Rectangle(6,5);
$square = new Square(5);

echo "The area is " . $rectangle->area() . PHP_EOL;
echo "The perimeter is " . $rectangle->perimeter() . PHP_EOL;

echo "The area is " . $square->area() . PHP_EOL;
echo "The perimeter is " . $square->perimeter() . PHP_EOL;
