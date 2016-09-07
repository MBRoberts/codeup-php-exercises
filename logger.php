<?php

function logMessage($logLevel, $message)
{
    date_default_timezone_set('America/Chicago');

    $filename = "logs/" . $logLevel . "_" . date('Y-n-d') . ".log";
   	$handle = fopen($filename, 'a');

   	fwrite($handle, date('Y-n-d h:i:s A ') . " [" . $logLevel . "] " . $message . PHP_EOL . PHP_EOL);
   	fclose($handle);
};


function logInfo($msg)
{
	logMessage("INFO", $msg);
};


function logError($msg)
{
	logMessage("ERROR", $msg);
};


logInfo("Meaningless info.");
logError("You messed up.");

