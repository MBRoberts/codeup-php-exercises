<?php

// Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.


for($i = 1 ; $i <= 100 ; $i++) {

	switch ($i) {
		case ($i % 3 == 0 && $i % 5 == 0) :
			echo "\033[36mFIZZ\033[31mBUZZ". PHP_EOL;
			shell_exec('say -v Zarvox "A"');
			break;
		case ($i % 3 == 0) :
			echo "\033[36mFIZZ". PHP_EOL;
			break;
		case ($i % 5 == 0) :
			echo "\033[31mBUZZ". PHP_EOL;
			break;
		default :
			echo "\033[32m{$i}" . PHP_EOL;
	}
}