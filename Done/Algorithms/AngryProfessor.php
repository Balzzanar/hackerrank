<?php
class Logger{public function Log($tolog){}}
#require_once("../../Logger.php");
define("LOGGING", true);
$logger = new Logger;
#################################################################
# Angry Professor
#
# https://www.hackerrank.com/challenges/angry-professor
# 
#    2
#    4 3
#    -1 -3 4 2
#    4 2
#    0 -1 2 1
#
#
#################################################################

$handle = fopen ("php://stdin","r");



$logger->log("Testcases: ");
fscanf($handle,"%d",$testcases);
for($a0 = 0; $a0 < $testcases; $a0++)
{
	$cancel = false;
	$attendance = 0;
	
	$logger->log("Number of students, Threshold: ");
    fscanf($handle,"%d %d", $num_students, $threshold);
    $logger->log("Arrival Times: ");
    $arrival_times = fgets($handle);
    $arrival_times = explode(" ", $arrival_times);

    $logger->log("Threshold: ".$threshold."\n");
    if (calc($arrival_times) >= $threshold)
    {
    	printf("NO\n");
    }
    else
    {
    	printf("YES\n");
    }
}

function calc($list_students)
{
	global $logger;
	$attend = 0;
	foreach ($list_students as $student)
	{
		if ($student <= 0)
		{
			$attend += 1;
		}
	}	
	$logger->log("Attendance: ".$attend . "\n");
	return $attend;
}

?>