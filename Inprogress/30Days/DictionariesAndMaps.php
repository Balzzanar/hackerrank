<?php
class Logger{public function Log($tolog){}}
#require_once("../../Logger.php");
define("LOGGING", false);
$logger = new Logger;
#################################################################
# Day 8
#
# https://www.hackerrank.com/challenges/30-dictionaries-and-maps
#
#################################################################

$phonebook = array();
$lookups = array();
$handle = fopen ("php://stdin","r");

$logger->log("Entries: ");
fscanf($handle,"%d",$entries);
while (trim(($str = fgets($handle))) != "") 
{
	handle_input(trim($str));
}
$logger->log($phonebook);


function handle_input($input)
{
	global $phonebook;
	//global $lookups;

	$arr = explode(" ", $input);
	if (count($arr) > 1)
	{
		$phonebook[$arr[0]] = $arr[1];
		return;
	}
	//$lookups[] = $input;
	printf("%s\n", lookup_name($input));
}


function lookup_name($name)
{
	global $phonebook;
	if (array_key_exists($name, $phonebook))
	{
		return $name . "=" . $phonebook[$name];
	}
	else 
	{
		return "Not found";
	}
}

?>