<?php
#class Logger{public function Log($tolog){}}
require_once("../../Logger.php");
define("LOGGING", true);
$logger = new Logger;
#################################################################
# Sherlock and The Beast
#
# https://www.hackerrank.com/challenges/sherlock-and-the-beast
#
# 
#################################################################

$handle = fopen ("php://stdin","r");


$logger->log("Testcases: ");
fscanf($handle,"%d",$testcases);
for($a0 = 0; $a0 < $testcases; $a0++)
{
    fscanf($handle,"%d", $digit);
    $dn = new DecentNumber(100, $logger);
}

/**
 * @name DecentNumber
 */
class DecentNumber
{
	private $number = 0;
	private $num_fives = 0;
	private $num_threes = 0;
	private $num_total = 0;
	private $logger;

	function __construct($number, $logger)
	{
		$this->number = $number;
		$this->logger = $logger;
		$this->logger->log("Digit: " . $number . "\n");
		$this->num_total();
		$this->num_fives();
		$this->num_threes();
		$this->logger->log("Total: " . $this->num_total . "\n");
		$this->logger->log("Fives: " . $this->num_fives . "\n");
		$this->logger->log("Threes: " . $this->num_threes . "\n");
	}

	/**
	 * @name isDecent
	 *
	 * Takes care of the logical question if the number is decent.
	 */
	public function isDecent()
	{
		# code...
	}

	private function num_fives()
	{
		$arr = str_split((string)$this->number);
		foreach ($arr as $digit)
		{
			if ($digit == '5')
			{
				$this->num_fives += 1;
			}
		}	
	}

	private function num_threes()
	{
		$arr = str_split((string)$this->number);
		foreach ($arr as $digit)
		{
			if ($digit == '3')
			{
				$this->num_threes += 1;
			}
		}		
	}

	private function num_total()
	{
		$arr = str_split((string)$this->number);
		$this->num_total = count($arr);
	}	

}

?>