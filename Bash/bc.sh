#!/bin/bash

#IN: 5+50*3/20 + (19*2)/7

read exp

echo "scale = 3;"$exp | bc
