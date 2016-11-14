<?php

function formatPhoneNumber($numberString) 
{
	$firstThree = substr($numberString, 0, 3);
	$middleThree = substr($numberString, 3, 3);
	$lastThree = substr($numberString, 6, 4);

	return "{$firstThree}-{$middleThree}-{$lastThree}";
}


function parseContacts($filename)
{
	$contacts = [];
	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename)));
	fclose($handle);

	$contents = explode("\n", $contents);

	foreach ($contents as $line) {
		$contact = [];
		$line = explode("|", $line);
		$contact['name'] = $line[0];
		$contact['number'] = formatPhoneNumber($line[1]);

		$contacts[] = $contact;
	}

	return $contacts;

	
}

var_dump(parseContacts('contacts.txt'));