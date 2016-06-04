<?php

$handle = fopen ("php://stdin","r");
print_r("asd");
fscanf($handle,"%d",$n);
print_r("asdddddd");
$arr_temp = fgets($handle);
print_r("asdaaaaa");
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

print_r($arr);

?>
