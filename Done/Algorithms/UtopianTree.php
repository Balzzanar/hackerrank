<?php
class Logger{public function Log($tolog){}}
#require_once("../../Logger.php");
define("LOGGING", false);
$logger = new Logger;
#################################################################
# Utopian Tree
#
# https://www.hackerrank.com/challenges/utopian-tree
#
#################################################################

$handle = fopen ("php://stdin","r");

$logger->log("Testcases: ");
fscanf($handle,"%d",$testcases);
for($a0 = 0; $a0 < $testcases; $a0++)
{
	$logger->log("Cycles: ");
	$cycles = fgets($handle);
	$sap = new Sappling();
	$sap->grow($cycles);
	$logger->log("Length-Done: ".$sap->length."\n");
	printf("%d\n",$sap->length);
}

class Sappling
{
	const SUMMER = "summer";
	const SPRING = "spring";

	public $length;
	private $current_season;


	function __construct()
	{
		$this->length = 1;
		$this->current_season = Sappling::SPRING;
	}

	function grow($cycles)
	{
		while ($cycles > 0)
		{
			$this->{"grow_".$this->current_season}();
			$cycles = $cycles -1;
		}
	}

	function grow_spring() 
	{
		$this->length = $this->length *2;
		$this->current_season = Sappling::SUMMER;
	}
	function grow_summer() 
	{
		$this->length = $this->length +1;
		$this->current_season = Sappling::SPRING;
	}
}

?>