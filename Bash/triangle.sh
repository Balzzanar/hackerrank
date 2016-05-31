#!/bin/bash

read x
read y
read z

if [ $x -eq $y ] && [ $x -eq $z ]; then
	echo "EQUILATERAL"
	exit 0
fi

if [ $x -eq $y ] || [ $x -eq $z ]; then
	echo "ISOSCELES"
	exit 0
fi

echo "SCALENE"
exit 0