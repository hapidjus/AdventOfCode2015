<?php
$input = file_get_contents('inputs/1.txt');
$i = 0;
$floor = 0;

array_map(function ($item) use (&$i, &$floor) {
    $i++;
    $floor += $item === '(' ? 1 : -1;
    if ($floor < 0) {
        echo $i;
        die();
    }
}, str_split($input));