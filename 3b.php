<?php
$input = '^v^v^v^v^v';
$input = file_get_contents('inputs/3.txt', FILE_IGNORE_NEW_LINES);
$x = 0;
$x2 = 0;
$y = 0;
$y2 = 0;
$map[$y][$x] = 1;
foreach (str_split($input) as $index => $char) {
    if ($index % 2 == 0) {
        $x += str_replace(['^', '>', 'v', '<'], [0, 1, 0, -1], $char);
        $y += str_replace(['^', '>', 'v', '<'], [-1, 0, 1, 0], $char);
        $map[$y][$x] = $map[$y][$x] ?? 0 + 1;
    }else{
        $x2 += str_replace(['^', '>', 'v', '<'], [0, 1, 0, -1], $char);
        $y2 += str_replace(['^', '>', 'v', '<'], [-1, 0, 1, 0], $char);
        $map[$y2][$x2] = $map[$y2][$x2] ?? 0 + 1;
    }
}
echo array_reduce($map, function ($carry, $item) {
    return $carry + count($item);
}, 0);