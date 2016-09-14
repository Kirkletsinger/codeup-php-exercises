<?php

function logMessage($logLevel, $message)
{
 	$logdate = date('Y,m,d');
 	$logtime = date('h:i:s');
 	$filename = "log-{$logDate}.log";
 	$handle = fopen($fileName, 'a');
 	$datelog = [];
 	$message = $logDate.' '.$logTime.' [ '.$logLevel.' ] '.$message;
	   
	fwrite($handle, $message.PHP_EOL);    
	    
	fclose($handle);
}
	
function logInfo($logMessage)
{
    logMessage("INFO",$logMessage);
}
	
function logError($logMessage)
{
    logMessage("ERROR", $logMessage);
}
	
logMessage("This is an info message.");
	
logMessage("This is an error message.");




