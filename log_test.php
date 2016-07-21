<?php

require_once 'Log.php';

$log = new Log();
$log->logMessage('Something', 'Today is July 21, 2016'); 
$log->info('Anything'); 
$log->error('Error'); 





// function logMessage($logLevel, $message)
// {

// 	$fileName = 'log-' . date('Y-m-d') . '.log';
// 	$handle = fopen($fileName, 'a');
// 	$formattedMessage = date('Y-m-d H:i:s') . "[$logLevel] $message";
// 	fwrite($handle, $formattedMessage);
	
//     // todo - complete this function
// }

// function logInfo() {
// 	logMessage('INFO', $message);

// }

// function logError() {
// 	logMessage('ERROR', $message);

// }

// logInfo("INFO", "This is an info message.");
// logError("ERROR", "This is an info message.");