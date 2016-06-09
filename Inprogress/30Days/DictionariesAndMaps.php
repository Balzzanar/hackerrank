<?php
#class Logger{public function Log($tolog){}}
require_once("../../Logger.php");
define("LOGGING", false);
$logger = new Logger;
#################################################################
# Day 8
#
# https://www.hackerrank.com/challenges/30-dictionaries-and-maps
#
#################################################################

$handle = fopen ("php://stdin","r");

$logger->log("Testcases: ");
fscanf($handle,"%d",$testcases);
for($a0 = 0; $a0 < $testcases; $a0++)
{
	$str = fgets($handle);
}

?>