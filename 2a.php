<?php
$input = '1x1x10';
$input = file('inputs/2.txt', FILE_IGNORE_NEW_LINES);
$tot = 0;

echo array_reduce($input, function ($carry, $item) {
    $sides = explode('x', $item);
    sort($sides);
    return $carry + 3 * $sides[0] * $sides[1]
        + 2 * $sides[1] * $sides[2]
        + 2 * $sides[2] * $sides[0];
}, 0);
