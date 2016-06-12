<?php
#class Logger{public function Log($tolog){}}
require_once("../../Logger.php");
define("LOGGING", true);
$logger = new Logger;
#################################################################
# Bear And Steady Gene
#
# https://www.hackerrank.com/challenges/bear-and-steady-gene
#
# 8
# GAAATAAA
#################################################################

$handle = fopen ("php://stdin","r");

$logger->log("Length: ");
fscanf($handle,"%d",$length);
$logger->log("Gene: ");
$input = fgets($handle);

$gene = new Gene($input, $length, $logger);


class Gene
{
	private $logger;
	private $length;
	private $gene;
	private $parts;

	function __construct($gene, $length, $logger)
	{
		$this->logger = $logger;
		$this->length = $length;
		$this->gene = trim($gene);
		$this->optimal = $this->length / 4;
		$this->parts = array(
			/* 0 is correct number of parts
			 * +int is this many to mush 
			 * -int is this many is missing */
				'A' => 0, 
				'C' => 0,
				'T' => 0,
				'G' => 0
			);


		// DEBUGGING!
		$this->count_parts();
		$this->logger->log($this->parts);
	}

	private function count_parts()
	{
		$geneparts = str_split($this->gene);
		foreach ($geneparts as $part)
		{
			$this->parts[$part] += 1;
		}
		$parts = $this->parts;
		foreach ($this->parts as $key => $value)
		{
			$parts[$key] = $value - $this->optimal;
		}
		$this->parts = $parts;
	}

	private function is_stable()
	{

	}
}
?>