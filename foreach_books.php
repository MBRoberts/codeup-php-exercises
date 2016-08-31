<?php

// Construct a loop that iterates through each book and then each book's keys and values. Have it output the book's title, then list the key value pairs for the data about each book.

// Update your loop to only show books that were written after 1950.


$books = [
	'The Hobbit' => [
		'published' => 1937,
		'author' => 'J. R. R. Tolkien',
		'pages' => 310
	],
	'Game of Thrones' => [
		'published' => 1996,
		'author' => 'George R. R. Martin',
		'pages' => 835
	],
	'The Catcher in the Rye' => [
		'published' => 1951,
		'author' => 'J. D. Salinger',
		'pages' => 220
	],
	'A Tale of Two Cities' => [
		'published' => 1859,
		'author' => 'Charles Dickens',
		'pages' => 544
	]
];

foreach ($books as $title => $data) {
//	if ($data['published'] > 1950) {
		echo "\n\033[34m{$title}:\033[33m\n";
		foreach ($data as $key => $info) {
			echo "\t{$key}: {$info}\n";
		}
		echo PHP_EOL;
//	}
}

