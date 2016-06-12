<?php
class Logger{public function Log($tolog){}}
#require_once("../../Logger.php");
define("LOGGING", false);
$logger = new Logger;
#################################################################
# Day 9
#
# https://www.hackerrank.com/challenges/30-recursion
#
#################################################################

$handle = fopen ("php://stdin","r");

$logger->log("Input: ");
fscanf($handle,"%d",$input);
printf(factorial($input));


function factorial($fact, $result = null)
{
	global $logger;

	if ($fact == 0)
	{
		return $result;
	}
	if (is_null($result))
	{
		$result = 1;
	}

	$result = $result * $fact;
	$logger->log("Fact: " . $fact . "\n");	
	$logger->log("Result: " . $result. "\n");
	return factorial($fact -1, $result);
}

?>