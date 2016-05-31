<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$primary_tot = 0;
$secondary_tot = 0;
$data = array();

// Get input
for($a_i = 0; $a_i < $n; $a_i++) {
   $input = fgets($handle);
   $data[] = $input;
}

// Get prim
for($a_i = 0; $a_i < $n; $a_i++) {
   	$a = explode(" ",$data[$a_i]);
   	$primary_tot = $primary_tot + (int)$a[$a_i];
}
// Get secondary
$counter = $n-1;
for($a_i = 0; $a_i < $n; $a_i++) {
   	$a = explode(" ",$data[$a_i]);
   	$secondary_tot = $secondary_tot + (int)$a[$counter];
   	$counter -= 1;
}

$diff = abs($primary_tot - $secondary_tot);

#printf("Primary: %d\n", $primary_tot);
#printf("Secondary: %d\n", $secondary_tot);
#printf("Result: %d\n", $diff);

printf($diff)

?>
