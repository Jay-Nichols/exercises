<?php

function parseContacts($filename)
{
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
    $contacts = explode("|", $contents);
    fclose($handle);

    // todo - read file and parse contacts

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));