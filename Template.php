<?php
#class Logger{public function Log($tolog){}}
require_once("../../Logger.php");
define("LOGGING", false);
$logger = new Logger;
#################################################################
# [Exorcise name]
#
# [Link to exorcise]
#
#################################################################

$handle = fopen ("php://stdin","r");

$logger->log("Testcases: ");
fscanf($handle,"%d",$testcases);
for($a0 = 0; $a0 < $testcases; $a0++)
{
	$str = fgets($handle);
	# Code ...
}

?>