<?php
$input ='1x1x10';
$input =file('inputs/2.txt', FILE_IGNORE_NEW_LINES);
echo array_reduce($input, function($carry, $line){
    $sides = explode('x', $line);
    sort($sides);
    return $carry + 2 * $sides[0]
        + 2 * $sides[1]
        + $sides[0] * $sides[1] * $sides[2];

}, 0);
