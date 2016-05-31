<?php

define("LOGGING", true);
$logger = new Logger;



$handle = fopen ("php://stdin","r");
$logger->log("Testcases: ");
fscanf($handle,"%d",$testcases);

$testcases_list = array(); 

for ($i = 0; $i < $testcases; $i++)
{
	$testcases_list = read_testcase();
}

$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');




/**
 * @name read_testcase
 * @return Testcase
 */
function read_testcase()
{
	global $handle;
	global $logger;
	$testcase = new Testcase($logger);
	$testcase->Read($handle);
}



/**
* @name Testcase
* 
* 
* 
*/
class Testcase
{
	private $data;
	private $setup;
	private $handle;
	private $logger;

	function __construct(&$logger)
	{
		$this->data = array();
		$this->setup = array();
		$this->logger = $logger;
	}

	/**
	 * @name read
	 */
	public function Read(&$handle)
	{
		$this->logger->log("Reading testcase...\n");
		$this->handle = $handle;
		$this->read_grapth_setup();
	}



	/**
	 * @name read_grapth
	 */
	private function read_grapth_setup()
	{
		$this->logger->log("Graph Setup: ");
		$setup = fgets($this->handle);
		$setup = explode(" ", $setup);
		$this->setup['N'] = $setup[0];
		$this->setup['T'] = $setup[1];
		$this->setup['M'] = $setup[2];
		$this->logger->log($this->setup);
		die;
	}
}



/**
* @name Logger
* 
* 
* 
*/
class Logger
{
	/**
	 * @name log
	 * @param string  
	 */
	public function Log($tolog)
	{
		if (! LOGGING)
		{
			return;
		}
		if (is_array($tolog) || is_object($tolog))
		{
			print_r($tolog);
			return;
		}
		printf($tolog);
	}
}
?>