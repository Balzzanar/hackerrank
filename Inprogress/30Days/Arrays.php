<?php
class Logger{public function Log($tolog){}}
#require_once("../../Logger.php");
define("LOGGING", false);
$logger = new Logger;
#################################################################
# Day 7
#
# https://www.hackerrank.com/challenges/30-arrays
#
#################################################################

$handle = fopen ("php://stdin","r");

$logger->log("Testcases: ");
fscanf($handle,"%d",$testcases);
for($a0 = 0; $a0 < $testcases; $a0++)
{
	$str = fgets($handle);
	$arr = array_reverse(str_split($str));
	foreach ($arr as $digit)
	{
		if (trim($digit) == "")
		{
			continue;
		}
		printf("%s ", trim($digit));
	}
}

?>