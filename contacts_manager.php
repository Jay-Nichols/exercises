<?php



//shows all contacts
function showContacts($filename) {
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	fclose($handle);
	return $contents;
}

//add contact
function addContact($filename, $newContact) {
	$handle = fopen($filename, 'a');
	fwrite($handle, PHP_EOL . $newContact);
	fclose($handle);

}

//search for a contact
function arraySearch($filename, $searchedName) {
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contacts = explode("\n", $contents);

	$names = [];
	foreach ($contacts as $index => $contact) {
		$contact = explode("|", $contact);
		$names[$index] = $contact[0];
	}

	foreach ($contacts as $contact) {
		$result = array_search($searchedName, $names);
		if ($result !== false) {
			return $contacts[$result];
		} else {
			return "That name is not in the database.";
		}
	}
}

//delete contact
function deleteContact($filename, $deletedName) {
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contacts = explode("\n", $contents);

	foreach ($contacts as $index => $contact) {
		if(strpos($contact, $deletedName) !== false) {
			unset($contacts[$index]);
		} else {
			"That name is not in the database.";
		}
		var_dump($contacts);

	// 	$contact = explode("|", $contact);
	// 	$names[$index] = $contact[0];
	// }

	// foreach($contacts as $contact) {
	// 	$result = array_search($deletedName, $names);
	// 	if ($result !== false) {

	// 	}
	}

}


do {

	fwrite(STDOUT, '1. View contacts'. PHP_EOL . '2. Add a new contact' . PHP_EOL . '3. Search a contact by name.' . PHP_EOL . '4. Delete an existing contact' . PHP_EOL . '5. Exit.' . PHP_EOL . 'Enter an option(1, 2, 3, 4, or 5)' . PHP_EOL);

	$mainMenuNumber = trim(fgets(STDIN));


	if ($mainMenuNumber == 1) {
		print_r(showContacts('contacts.txt'));	
	} elseif ($mainMenuNumber == 2) {
		fwrite(STDOUT, 'Enter a name and number: ');
		$newContact = trim(fgets(STDIN));
		addContact('contacts.txt', $newContact);
	} elseif ($mainMenuNumber == 3) {
		fwrite(STDOUT, 'Search for a name: ' );
		$searchedName = trim(fgets(STDIN));
		$contact = arraySearch('contacts.txt', $searchedName);
		print_r($contact . PHP_EOL);
	} elseif($mainMenuNumber == 4) {
		fwrite(STDOUT, 'Delete a name: ');
		$deletedName = trim(fgets(STDIN));
		deleteContact('contacts.txt', $deletedName); 

	} else {
		exit(0);
	}
} while ($mainMenuNumber !== 5);


