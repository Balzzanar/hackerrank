<?php
class Logger{public function Log($tolog){}}
#require_once("../../Logger.php");
define("LOGGING", false);
$logger = new Logger;
#################################################################
# The Time in Words
#
# https://www.hackerrank.com/challenges/the-time-in-words
#
#################################################################

$handle = fopen ("php://stdin","r");

$logger->log("Hour: ");
fscanf($handle,"%d", $hour);
$logger->log("Minutes: ");
fscanf($handle,"%d", $min);

$clock = new Clock($hour, $min, $logger);
$time = $clock->getstrtime();
$logger->log("Clock: ".$time."\n");
printf($time);

class Clock
{
	private $hour;
	private $min;
	private $strtime;
	private $logger;
	private $position;

	const TIMES = array(
			1 => "one",
			2 => "two",
			3 => "three",
			4 => "four",
			5 => "five",
			6 => "six",
			7 => "seven",
			8 => "eight",
			9 => "nine",
			10 => "ten",
			11 => "eleven",
			12 => "twelve",
			13 => "thirteen",
			14 => "fourteen",
			15 => "fithteen",
			16 => "sixteen",
			17 => "seventeen",
			18 => "eightteen",
			19 => "nineteen",
			20 => "twenty",
			30 => "thirty",
			40 => "fourty",
			50 => "fifty"
		);

	function __construct($hour, $min, &$logger)
	{
		$this->hour = $hour;
		$this->min = $min;
		$this->strtime = "";
		$this->logger = $logger;
		$this->position = ($this->min > 30 ? "to" : "past");
	}

	public function getstrtime()
	{
		$this->logger->log("Calcultiong for Hour: ".$this->hour.", Min: ".$this->min."\n");
		// Start check for "00", hour + 'o'clock
		// 30 == half passed
		// check if min > 30, passed / to
		// 15 & 45 == quater passed / to

		$passed = false;
		if ($this->min == 0)
		{
			$this->strtime = $this->numtotext($this->hour) . " o' clock";
			return $this->strtime;
		}
		if ($this->min == 30)
		{
			$this->strtime = "half past ". $this->numtotext($this->hour);
			return $this->strtime;
		}
		if ($this->min == 15 || $this->min == 45)
		{
			if ($this->min > 30)
			{
				$this->hour += 1;
				$this->hour = ($this->hour == 25 ? 1 : $this->hour);
			}
			$this->strtime = "quarter ".$this->position." ".$this->numtotext($this->hour);
			return $this->strtime;
		}
		$minutes_str = ($this->min == 1 ? "minute" : "minutes");

		if ($this->min > 30)
		{
			$this->min = 60 - $this->min;	
			$this->hour += 1;
			$this->hour = ($this->hour == 25 ? 1 : $this->hour);
		}

		$this->strtime = $this->numtotext($this->min)." ".$minutes_str." ".
			$this->position." ".$this->numtotext($this->hour);
		return $this->strtime;
	}

	public function numtotext($num)
	{
		$str_digit = "";
		if ($num > 20)
		{
			$arr = str_split((string)$num);
			$str_digit = Clock::TIMES[(int)($arr[0]."0")] . " ";
			$str_digit .= Clock::TIMES[(int)$arr[1]];
		}
		else 
		{
			$str_digit = Clock::TIMES[$num];
		}
		return $str_digit;
	}


}

?>