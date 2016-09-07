<?php

function parseContacts($filename)
{

    $contacts = [];
    $newContacts = [];
    $keys = ["name", "number"];

    // todo - read file and parse contacts

    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contacts = explode("\n", $contents);
    fclose($handle);

    foreach ($contacts as $index => $contact) {

    	$contacts[$index] = explode("|", $contact);
	  	array_push($newContacts, array_combine($keys, $contacts[$index]));
    	$newContacts[$index]["number"] = preg_replace("/(\d{3})(\d{3})(\d{4})/", "$1-$2-$3", $newContacts[$index]["number"]);

    };

    return $newContacts;

};

print_r(parseContacts('contacts.txt'));
