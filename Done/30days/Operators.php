<?php
#################################################################
# Day 2
#
#################################################################
require_once("../Algorithms/Logger.php");
define("LOGGING", false);
$logger = new Logger;


$handle = fopen ("php://stdin","r");
$data = array();

fscanf($handle,"%f",$data['cost']);
fscanf($handle,"%d",$data['tip_procent']);
fscanf($handle,"%d",$data['tax_procent']);

$data['tip'] = number_format(($data['tip_procent'] / 100) * $data['cost'], 2);
$data['tax'] = number_format(($data['tax_procent'] / 100) * $data['cost'], 2);
$data['cost'] = number_format($data['cost'] * 1, 2);
$data['totalcost'] = number_format($data['tip'] + $data['tax'] + $data['cost'], 0);

$logger->log($data);

printf("The total meal cost is %s dollars.", $data['totalcost']);
?>
