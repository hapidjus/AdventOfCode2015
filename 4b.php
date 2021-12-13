<?php
include 'helpers.php';
$input = 'yzbqklnj';
$iterations = PHP_INT_MAX;

for ($i = 0; $i <= $iterations; $i++) {
    $hash = md5($input . $i);
    if (
        $hash[0] === '0'
        && $hash[1] === '0'
        && $hash[2] === '0'
        && $hash[3] === '0'
        && $hash[4] === '0'
        && $hash[5] === '0'
    ) {
        echo $hash . PE;
        echo $i . PE;
    }
}
