<?php
class Logger{public function Log($tolog){}}
#require_once("../../Logger.php");
define("LOGGING", false);
$logger = new Logger;
#################################################################
# Day 6
#
# https://www.hackerrank.com/challenges/30-review-loop
#
#################################################################

$handle = fopen ("php://stdin","r");


$logger->log("Testcases: ");
fscanf($handle,"%d",$testcases);
for($a0 = 0; $a0 < $testcases; $a0++)
{
	$str = fgets($handle);
	printf("%s\n", get_odd_indexed_characters($str));
}

/**
 * Returns the index reorderd version of the given string
 *
 * @name get_odd_indexed_characters
 * @return string
 */
function get_odd_indexed_characters($str)
{
	global $logger;

	$odd = "";
	$even = "";

	$str = str_split($str);
	$logger->log($str);
	foreach ($str as $key => $char)
	{
		$c = trim($char);
		if ($c == "")
		{
			continue;
		}
		if ($key % 2 == 0)
		{
			$logger->log("Even char: ".$c."\n");
			$even .= $c;
		}
		else 
		{
			$logger->log("Odd char: ".$c."\n");
			$odd .= $c;	
		}
	}
	$logger->log("Even: ".$even.", Odd: ".$odd."\n");
	return $even." ".$odd;
}

?>