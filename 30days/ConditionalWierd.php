<?php
require_once("../Algorithms/Logger.php");
define("LOGGING", false);
$logger = new Logger;

$handle = fopen ("php://stdin","r");

fscanf($handle,"%f",$data);

if (($data % 2) != 0)
{
	printf("Weird");
	return;
}

if (($data >= 2 && $data <= 5) || $data > 20)
{
	printf("Not Weird");
	return;
}

printf("Weird");
$logger->log("This is true yes?: ". $data > 20 . "\n");
return;

?>
