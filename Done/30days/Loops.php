<?php
#################################################################
# Day 5
#
# https://www.hackerrank.com/challenges/30-loops
#################################################################

$multiplier = intval(fgets(STDIN));

for ($i = 1; $i <= 10; $i++)
{
	printf("%d x %d = %d\n", $multiplier, $i, $i * $multiplier);
}


?>